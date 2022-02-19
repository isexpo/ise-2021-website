<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public $menu;

    public function mount()
    {
        $this->menu = [];
        if (Auth::user()->usertype == "member") {
            array_push($this->menu, [
                'type' => 'menu',
                'icon' => 'far fa-calendar-alt',
                'title' => 'Daftar Acara',
                'route-name' => 'peserta.choose-dashboard'
            ], [
                'type' => 'divider'
            ]);
            if (Auth::user()->userable->bionix_id) {
                if (Auth::user()->userable->bionix_type == "bionix_junior") {
                    array_push(
                        $this->menu,
                        [
                            'type' => 'title',
                            'title' => 'BIONIX'
                        ],
                        [
                            'type' => 'menu',
                            'icon' => 'cil-home',
                            'title' => 'Beranda',
                            'route-name' => 'bionix.peserta.homepage'
                        ],
                        [
                            'type' => 'menu',
                            'icon' => 'cil-group',
                            'title' => 'Identitas Tim',
                            'route-name' => 'bionix.peserta.identitas-tim'
                        ]
                    );
                    if (Auth::user()->userable->bionix->profile_verif_status == 'Terverifikasi') {
                        array_push($this->menu, [
                            'type' => 'menu',
                            'icon' => 'cil-money',
                            'title' => 'Pembayaran',
                            'route-name' => 'bionix.peserta.pembayaran'
                        ]);
                    }
                    if (Auth::user()->userable->bionix->payment_verif_status == 'Terverifikasi') {
                        array_push($this->menu, [
                            'type' => 'menu',
                            'icon' => 'far fa-file-alt',
                            'title' => 'Try Out',
                            'route-name' => 'bionix.peserta.student.tryout'
                        ]);
                    }
                    if (Auth::user()->userable->bionix->competition_round == 'Semifinal') {
                        array_push($this->menu, [
                            'type' => 'menu',
                            'icon' => 'far fa-file-alt',
                            'title' => 'Semifinal',
                            'route-name' => 'bionix.peserta.student.semifinal'
                        ]);
                    }
                    array_push($this->menu, [
                        'type' => 'divider'
                    ]);
                } elseif (Auth::user()->userable->bionix_type == "bionix_senior") {
                    array_push(
                        $this->menu,
                        [
                            'type' => 'title',
                            'title' => 'BIONIX'
                        ],
                        [
                            'type' => 'menu',
                            'icon' => 'cil-home',
                            'title' => 'Beranda',
                            'route-name' => 'bionix.peserta.homepage'
                        ],
                        [
                            'type' => 'menu',
                            'icon' => 'cil-group',
                            'title' => 'Identitas Tim',
                            'route-name' => 'bionix.peserta.identitas-tim'
                        ]
                    );

                    if (Auth::user()->userable->bionix->profile_verif_status == 'Terverifikasi') {
                        if (date('Y-m-d H:i:s') > date('Y-m-d H:i:s', strtotime('2021-09-02 19:00:00')) && date('Y-m-d H:i:s') <= date('Y-m-d H:i:s', strtotime('2021-09-16 23:59:59'))) {
                            array_push($this->menu, [
                                'type' => 'menu',
                                'icon' => 'far fa-file-alt',
                                'title' => 'Penyisihan',
                                'route-name' => 'bionix.peserta.college.penyisihan'
                            ]);
                        }
                        if (Auth::user()->userable->bionix->competition_round == 'Semifinal') {
                            array_push($this->menu, [
                                'type' => 'menu',
                                'icon' => 'cil-money',
                                'title' => 'Pembayaran',
                                'route-name' => 'bionix.peserta.pembayaran'
                            ]);

                            if (date('Y-m-d H:i:s') > date('Y-m-d H:i:s', strtotime('2021-09-19 19:00:00')) && date('Y-m-d H:i:s') <= date('Y-m-d H:i:s', strtotime('2021-10-10 23:59:59')) && Auth::user()->userable->bionix->payment_verif_status == 'Terverifikasi') {
                                array_push($this->menu, [
                                    'type' => 'menu',
                                    'icon' => 'far fa-file-alt',
                                    'title' => 'Semifinal',
                                    'route-name' => 'bionix.peserta.college.semifinal'
                                ]);
                            }
                        }

                    }
                    array_push($this->menu, [
                        'type' => 'divider'
                    ]);
                }
            }
            if (Auth::user()->userable->academy_id) {
                if (Auth::user()->userable->academy_type == 'Data Science Academy') {
                    array_push(
                        $this->menu,
                        [
                            'type' => 'title',
                            'title' => 'ICON - Data Science'
                        ],
                        [
                            'type' => 'menu',
                            'icon' => 'cil-home',
                            'title' => 'Beranda',
                            'route-name' => 'academy.academy.home'
                        ],
                        [
                            'type' => 'menu',
                            'icon' => 'cil-group',
                            'title' => 'Registrasi Ulang',
                            'route-name' => 'academy.academy.registrasi-ulang'
                        ], [
                        'type' => 'menu',
                        'icon' => 'cil-book',
                        'title' => 'Tugas',
                        'route-name' => 'academy.academy.tugas'
                    ],
                        [
                            'type' => 'divider'
                        ]
                    );
                } elseif (Auth::user()->userable->academy_type == 'Startup Academy') {
                    array_push(
                        $this->menu,
                        [
                            'type' => 'title',
                            'title' => 'ICON - Startup Academy'
                        ],
                        [
                            'type' => 'menu',
                            'icon' => 'cil-home',
                            'title' => 'Beranda',
                            'route-name' => 'academy.academy.home'
                        ],
                        [
                            'type' => 'menu',
                            'icon' => 'cil-group',
                            'title' => 'Identitas Tim',
                            'route-name' => 'academy.academy.registrasi-ulang'
                        ],
                        [
                            'type' => 'menu',
                            'icon' => 'cil-book',
                            'title' => 'Tugas',
                            'route-name' => 'academy.academy.tugas'
                        ],
                        [
                            'type' => 'divider'
                        ]
                    );
                }
            }
            if((Auth::user()->userable->jenjang=='Mahasiswa'||Auth::user()->userable->jenjang=='Umum')&&Auth::user()->userable->jobfair){
                array_push(
                    $this->menu,
                    [
                        'type' => 'title',
                        'title' => 'ICON - Jobfair'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-home',
                        'title' => 'Beranda',
                        'route-name' => 'icon.peserta.jobfair.home'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Biodata Diri',
                        'route-name' => 'icon.peserta.jobfair.biodata'
                    ],
                    [
                        'type' => 'divider'
                    ]
                );
            }
        } elseif (Auth::user()->usertype == "admin") {
            if (Auth::user()->userable->admin_type == "Bionix Admin" || Auth::user()->userable->admin_type == "Global Admin") {
                array_push(
                    $this->menu,
                    [
                        'type' => 'title',
                        'title' => 'BIONIX'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-home',
                        'title' => 'Beranda',
                        'route-name' => 'bionix.admin.beranda.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Daftar Peserta',
                        'route-name' => 'bionix.admin.daftar-peserta.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-money',
                        'title' => 'Promo',
                        'route-name' => 'bionix.admin.promo.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-dollar',
                        'title' => 'Invoice',
                        'route-name' => 'bionix.admin.invoice.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-bullhorn',
                        'title' => 'Pengumuman',
                        'route-name' => 'bionix.admin.pengumuman.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Verifikasi Biodata Tim',
                        'route-name' => 'bionix.admin.verifikasi-identitas.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-money',
                        'title' => 'Verifikasi Pembayaran',
                        'route-name' => 'bionix.admin.verifikasi-pembayaran.index'
                    ],
                    [
                        'type' => 'dropdown',
                        'icon' => 'cil-check',
                        'title' => 'Submission',
                        'items' => [
                            [
                                'title' => 'College Penyisihan',
                                'route-name' => 'bionix.admin.submission.penyisihan-college'
                            ],
                            [
                                'title' => 'College Semifinal',
                                'route-name' => 'bionix.admin.submission.semifinal-college'
                            ],
                            [
                                'title' => 'Student Semifinal',
                                'route-name' => 'bionix.admin.submission.semifinal-student'
                            ]
                        ]
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'fas fa-link',
                        'title' => 'Shorten Link',
                        'route-name' => 'admin.shorten-link'
                    ],
                    [
                        'type' => 'divider'
                    ]
                );
            }
            if (Auth::user()->userable->admin_type == "ICON Admin" || Auth::user()->userable->admin_type == "Global Admin") {
                // Menu ICON taruh di sini
                array_push(
                    $this->menu,
                    [
                        'type' => 'title',
                        'title' => 'ICON',
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'fas fa-comment-dots',
                        'title' => 'Masukan',
                        'route-name' => 'icon.admin.feedback.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'fas fa-link',
                        'title' => 'Shorten Link',
                        'route-name' => 'admin.shorten-link'
                    ],
                    [
                        'type' => 'divider'
                    ],
                    [
                        'type' => 'title',
                        'title' => 'ICON - Academy'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-home',
                        'title' => 'Beranda',
                        'route-name' => 'academy.admin.home.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Daftar Peserta',
                        'route-name' => 'academy.admin.daftar-peserta.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-bullhorn',
                        'title' => 'Pengumuman',
                        'route-name' => 'academy.admin.pengumuman.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-task',
                        'title' => 'Tugas',
                        'route-name' => 'academy.admin.tugas.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Verifikasi Biodata Tim',
                        'route-name' => 'academy.admin.verifikasi-identitas.index'
                    ],
                    [
                        'type' => 'divider'
                    ],
                    [
                        'type' => 'title',
                        'title' => 'ICON - Hall of IS'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-home',
                        'title' => 'Beranda',
                        'route-name' => 'e-hall.admin.home.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-task',
                        'title' => 'Quest',
                        'route-name' => 'e-hall.admin.quest.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Share',
                        'route-name' => 'e-hall.admin.share.index'
                    ],
                    [
                        'type' => 'divider'
                    ],
                    [
                        'type' => 'title',
                        'title' => 'ICON - Grand Talkshow'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Daftar Peserta',
                        'route-name' => 'talkshow.admin.daftar-peserta'
                    ],
                    [
                        'type' => 'divider'
                    ],
                    [
                        'type' => 'title',
                        'title' => 'ICON - Virtual Jobfair'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-task',
                        'title' => 'Perusahaan',
                        'route-name' => 'jobfair.admin.perusahaan'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Lowongan',
                        'route-name' => 'jobfair.admin.lowongan'
                    ],
                    [
                        'type' => 'divider'
                    ]
                );
            }
        }
    }

    public function render()
    {

        return view('livewire.components.sidebar');
    }
}
