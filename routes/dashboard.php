<?php

use Illuminate\Support\Facades\Route;

//    Auth for Guest
Route::middleware('guest')->group(function () {
    Route::get('/login', \App\Http\Livewire\Pages\Auth\Login::class)->name('login');
    Route::get('/forgot-password', \App\Http\Livewire\Pages\Auth\ForgotPassword::class)->name('forgot-password');
    Route::get('/reset-password', \App\Http\Livewire\Pages\Auth\ResetPassword::class)->name('password.reset');
    Route::get('/register', \App\Http\Livewire\Pages\Auth\Register::class)->name('register');
});

//    End of Auth for Guest

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        if (Auth::user()) {
            if (Auth::user()->userable_type == 'App\Models\Admin') {
                if (Auth::user()->userable->admin_type == "ICON Admin") {
                    return redirect(route('academy.admin.home.index'));
                } else {
                    return redirect(route('bionix.admin.beranda.index'));
                }
            } else {
                return redirect(route('peserta.choose-dashboard'));
            }
        }
    })->name('dashboard.index');
    Route::get('/email/verify', \App\Http\Livewire\Pages\Auth\EmailVerification::class)->name('verification.notice');

    Route::middleware('verified')->group(function () {
        Route::get('/ganti-password', \App\Http\Livewire\Pages\Auth\GantiPassword::class)->name('ganti-password');
        Route::get('/bantuan', \App\Http\Livewire\Pages\Bantuan::class)->name('bantuan');
        Route::get('/syarat-ketentuan', \App\Http\Livewire\Pages\Auth\TermsCondition::class)->name('syarat-ketentuan');

        Route::group(['prefix' => 'peserta', 'middleware' => 'usertypecheck:member'], function () {
            Route::get('/', \App\Http\Livewire\Pages\DashboardGlobal\Home\Index::class)->name('peserta.choose-dashboard');

            //              BIONIX
            Route::group(['prefix' => 'bionix'], function () {
                Route::group(['middleware' => 'bionixcheck:unregistered'], function () {
                    Route::middleware(['usertypecheck:Mahasiswa'])->group(function () {
                        Route::get('register/college', \App\Http\Livewire\Pages\Auth\RegisterCollege::class)->middleware(['accessdate:true,01-01-2021 00:00:00,01-09-2021 23:59:59'])->name('register-college');
                    });
                    Route::middleware('usertypecheck:Siswa SMA')->group(function () {
                        Route::get('register/student', \App\Http\Livewire\Pages\Auth\RegisterStudent::class)->name('register-student');
                    });
                });
                Route::group(['middleware' => 'usertypecheck:bionix_peserta'], function () {
                    Route::get('/', \App\Http\Livewire\Pages\Bionix\Peserta\Homepage::class)->name('bionix.peserta.homepage');
                    Route::get('/identitas-tim', \App\Http\Livewire\Pages\Bionix\Peserta\IdentitasTim::class)->name('bionix.peserta.identitas-tim');
                    Route::group(['middleware' => 'bionixcheck:profil_terverifikasi'], function () {
                        Route::get('/pembayaran', \App\Http\Livewire\Pages\Bionix\Peserta\Pembayaran::class)->name('bionix.peserta.pembayaran');
                        Route::get('/college/penyisihan', \App\Http\Livewire\Pages\Bionix\Peserta\College\Penyisihan\Index::class)->middleware(['accessdate:true,02-09-2021 19:00:00,16-09-2021 23:59:59', 'usertypecheck:Mahasiswa'])->name('bionix.peserta.college.penyisihan');
                        Route::get('/college/semifinal', \App\Http\Livewire\Pages\Bionix\Peserta\College\Semifinal\Index::class)->middleware(['accessdate:true,19-09-2021 00:00:00,10-10-2021 23:59:59', 'usertypecheck:Mahasiswa', 'bionixcheck:pembayaran_terverifikasi'])->name('bionix.peserta.college.semifinal');
                    });
                    Route::group(['middleware' => 'bionixcheck:pembayaran_terverifikasi'], function () {
                        Route::group(['prefix' => 'student', 'middleware' => 'usertypecheck:Siswa SMA'], function () {
                            Route::get('tryout', App\Http\Livewire\Pages\Bionix\Peserta\Student\Tryout\Index::class)->name('bionix.peserta.student.tryout');
                            Route::get('/student/semifinal', \App\Http\Livewire\Pages\Bionix\Peserta\Student\Semifinal\Index::class)->middleware([ 'usertypecheck:Siswa SMA', 'bionixcheck:Semifinal'])->name('bionix.peserta.student.semifinal');
                        });
                    });
                });
            });

            //              End of BIONIX


            //              Academy
            Route::group(['prefix' => 'academy'], function () {
                Route::group(['prefix' => 'register', 'middleware' => ['usertypecheck:Mahasiswa', 'academycheck:unregistered']], function () {
                    Route::get('startup', \App\Http\Livewire\Pages\Auth\Icon\Academy\RegisterStartup::class)->name('register-startup');
                    Route::get('data-science', \App\Http\Livewire\Pages\Auth\Icon\Academy\RegisterDataScience::class)->name('register-data-science');
                });
                Route::group(['middleware' => 'usertypecheck:academy_peserta'], function () {
                    Route::get('/', App\Http\Livewire\Pages\Icon\Academy\Peserta\Home\Index::class)->name('academy.academy.home');
                    Route::get('/registrasi-ulang', App\Http\Livewire\Pages\Icon\Academy\Peserta\RegistrasiUlang\Index::class)->name('academy.academy.registrasi-ulang');
                    //Route::middleware()->get('/pembayaran', App\Http\Livewire\Pages\Icon\Academy\Peserta\Pembayaran\Index::class)->name('academy.academy.pembayaran');
                    Route::get('/tugas', App\Http\Livewire\Pages\Icon\Academy\Peserta\Tugas\Index::class)->name('academy.academy.tugas');
                });
            });
            //                End of Academy
            //            Talkshow
            Route::group(['prefix' => 'talkshow'], function () {
                Route::get('register', \App\Http\Livewire\Pages\Auth\Icon\Talkshow\Index::class)->name('register-talkshow');
                //                Route::get('register', function(){
                //                    return redirect(route('coming-soon'));
                //                })->name('register-talkshow');
                Route::get('register/success', \App\Http\Livewire\Pages\Auth\Icon\Talkshow\Success::class)->name('register-success-talkshow');
            });

            Route::group(['prefix' => 'jobfair'], function () {
                Route::get('/', \App\Http\Livewire\Pages\Icon\Jobfair\Peserta\Home\Index::class)->middleware(['jobfair:registered'])->name('icon.peserta.jobfair.home');
                Route::get('registrasi', \App\Http\Livewire\Pages\Auth\Icon\Jobfair\Index::class)->middleware(['jobfair:unregistered'])->name('icon.peserta.jobfair.registrasi');
                Route::get('biodata', \App\Http\Livewire\Pages\Icon\Jobfair\Peserta\RegistrasiUlang\Index::class)->middleware(['jobfair:registered'])->name('icon.peserta.jobfair.biodata');
            });
        });


        //            Admin

        Route::group(['prefix' => 'admin', 'middleware' => 'usertypecheck:admin'], function () {
            Route::group(['prefix' => 'bionix', 'middleware' => 'usertypecheck:bionix_admin'], function () {
                Route::get('/', App\Http\Livewire\Pages\Bionix\Admin\Beranda\Index::class)->name('bionix.admin.beranda.index');
                Route::get('/daftar-peserta', App\Http\Livewire\Pages\Bionix\Admin\DaftarPeserta\Index::class)->name('bionix.admin.daftar-peserta.index');
                Route::group(['prefix' => 'pengumuman'], function () {
                    Route::get('/', App\Http\Livewire\Pages\Bionix\Admin\Pengumuman\Index::class)->name('bionix.admin.pengumuman.index');
                });
                Route::group(['prefix' => 'promo'], function () {
                    Route::get('/', App\Http\Livewire\Pages\Bionix\Admin\Promo\Index::class)->name('bionix.admin.promo.index');
                });
                Route::group(['prefix' => 'invoice'], function () {
                    Route::get('/', App\Http\Livewire\Pages\Bionix\Admin\Invoice\Index::class)->name('bionix.admin.invoice.index');
                });
                Route::group(['prefix' => 'verifikasi'], function () {
                    Route::get('/identitas', App\Http\Livewire\Pages\Bionix\Admin\VerifikasiIdentitas\Index::class)->name('bionix.admin.verifikasi-identitas.index');
                    Route::get('/pembayaran', App\Http\Livewire\Pages\Bionix\Admin\VerifikasiPembayaran\Index::class)->name('bionix.admin.verifikasi-pembayaran.index');
                });
                Route::group(['prefix' => 'submission'], function () {
                    Route::get('{type?}', App\Http\Livewire\Pages\Bionix\Admin\Submission\Index::class)->name('bionix.admin.submission');
                    Route::get('penyisihan-college', App\Http\Livewire\Pages\Bionix\Admin\Submission\Index::class)->name('bionix.admin.submission.penyisihan-college');
                    Route::get('semifinal-college', App\Http\Livewire\Pages\Bionix\Admin\Submission\Index::class)->name('bionix.admin.submission.semifinal-college');
                    Route::get('semifinal-student', App\Http\Livewire\Pages\Bionix\Admin\Submission\Index::class)->name('bionix.admin.submission.semifinal-student');
                });
            });

            Route::group(['prefix' => 'icon', 'middleware' => 'usertypecheck:icon_admin'], function () {
                Route::get('/feedback', App\Http\Livewire\Pages\Icon\General\Admin\Feedback\Index::class)->name('icon.admin.feedback.index');
                Route::group(['prefix' => 'academy'], function () {
                    Route::get('/', App\Http\Livewire\Pages\Icon\Academy\Admin\Home\Index::class)->name('academy.admin.home.index');
                    Route::get('/daftar-peserta', App\Http\Livewire\Pages\Icon\Academy\Admin\DaftarPeserta\Index::class)->name('academy.admin.daftar-peserta.index');
                    Route::get('/pengumuman', App\Http\Livewire\Pages\Icon\Academy\Admin\Pengumuman\Index::class)->name('academy.admin.pengumuman.index');
                    Route::group(['prefix' => 'tugas'], function () {
                        Route::get('/', App\Http\Livewire\Pages\Icon\Academy\Admin\Tugas\Index::class)->name('academy.admin.tugas.index');
                        Route::get('/{id}', App\Http\Livewire\Pages\Icon\Academy\Admin\Tugas\Evaluasi\Index::class)->name('academy.admin.tugas.detail');
                    });
                    Route::group(['prefix' => 'verifikasi'], function () {
                        Route::get('/identitas', App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiIdentitas\Index::class)->name('academy.admin.verifikasi-identitas.index');
                    });
                });

                // EHall
                Route::group(['prefix' => 'e-hall'], function () {
                    Route::get('/', App\Http\Livewire\Pages\Icon\EHall\Admin\Home\Index::class)->name('e-hall.admin.home.index');
                    Route::group(['prefix' => 'quest'], function () {
                        Route::get('/', App\Http\Livewire\Pages\Icon\EHall\Admin\Quest\Level\Index::class)->name('e-hall.admin.quest.index');
                        Route::get('/{id}', App\Http\Livewire\Pages\Icon\EHall\Admin\Quest\Index::class)->name('e-hall.admin.quest.detail');
                    });
                    //Route::get('/share', App\Http\Livewire\Pages\Icon\EHall\Admin\Share\Index::class)->name('e-hall.admin.share.index');
                    Route::group(['prefix' => 'share'], function () {
                        Route::get('/', App\Http\Livewire\Pages\Icon\EHall\Admin\Share\Index::class)->name('e-hall.admin.share.index');
                        Route::get('/{id}', App\Http\Livewire\Pages\Icon\EHall\Admin\Share\Evaluasi\Index::class)->name('e-hall.admin.share.detail');
                    });
                });

                //Virtual Jobfair
                Route::group(['prefix' => 'jobfair'], function () {
                    Route::get('perusahaan', App\Http\Livewire\Pages\Icon\Jobfair\Admin\Perusahaan\Index::class)->name('jobfair.admin.perusahaan');
                    Route::get('lowongan', App\Http\Livewire\Pages\Icon\Jobfair\Admin\Lowongan\Index::class)->name('jobfair.admin.lowongan');
                    Route::get('lowongan/{id}', App\Http\Livewire\Pages\Icon\Jobfair\Admin\Lowongan\Peserta\Index::class)->name('jobfair.admin.lowongan.detail');
                });

                //Talkshow
                Route::group(['prefix' => 'talkshow'], function () {
                    Route::get('/', \App\Http\Livewire\Pages\Icon\Talkshow\Admin\DaftarPeserta\Index::class)->name('talkshow.admin.daftar-peserta');
                });
            });
            Route::get('/shorten-link', App\Http\Livewire\Pages\Admin\ShortenLink\Index::class)->name('admin.shorten-link');
        });

        //            End of Admin
    });
});
