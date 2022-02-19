<?php

namespace App\Http\Livewire\Pages\DashboardGlobal\Home;

use App\Mail\TalkshowMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Index extends Component
{
    public $events = [];
    public $event_countdowns = [];

    public function mount()
    {
        if (\Auth::user()->userable->jenjang == 'Siswa SMA') {
            $this->events = [
                [
                    'title' => 'Grand Talkshow',
                    'description' => 'Sesi talkshow gratis yang akan memberikan  insight baru kepada seluruh partisipan untuk semakin adaptif di era perkembangan digital yang semakin pesat. Tidak hanya itu kamu juga akan mendapatkan insight terkait cara agar startup kamu dapat semakin berkembang di masa normal baru.',
                    'start_date' => '2021-10-11',
                    'end_date' => '2021-11-06',
                    'regis_link' => route('register-talkshow'),
                    'landing_link' => null,
                    'already_registered' => \Auth::user()->userable->talkshow != null
                ],
                [
                    'title' => 'Virtual Play',
                    'description' => 'Segera mainkan game interaktif untuk mengetahui seberapa jauh pengetahuan umum dan teknologi kamu di virtual play. Pastikan kamu berusaha untuk meraih poin setinggi mungkin dengan menjawab berbagai tantangan yang ada dan kamu berkesempatan untuk mendapatkan hadiah spesial dari ISE! 2021.',
                    'start_date' => '2021-10-09',
                    'end_date' => '2021-11-07',
                    'regis_link' => null,
                    'landing_link' => route('virtual-play.index'),
                    'already_registered' => \Auth::user()->userable->bionix_id != null
                ],
                [
                    'title' => 'BIONIX Student Level 2021',
                    'description' => 'Olimpiade bisnis dan IT terbesar di Indonesia untuk tingkat pelajar SMA/SMK sederajat.BIONIX Student Level dilaksanakan melalui empat tahapan kompetisi dengan konsep acara daring penuh.',
                    'start_date' => '2021-07-03',
                    'end_date' => '2021-09-25',
                    'regis_link' => route('register-student'),
                    'landing_link' => route('bionix-landing', ['type' => 'student']),
                    'already_registered' => \Auth::user()->userable->bionix_id != null
                ]
            ];
        } elseif (\Auth::user()->userable->jenjang == 'Mahasiswa') {
            $this->events = [
                [
                    'title' => 'Grand Talkshow',
                    'description' => 'Sesi talkshow gratis yang akan memberikan  insight baru kepada seluruh partisipan untuk semakin adaptif di era perkembangan digital yang semakin pesat. Tidak hanya itu kamu juga akan mendapatkan insight terkait cara agar startup kamu dapat semakin berkembang di masa normal baru.',
                    'start_date' => '2021-10-11',
                    'end_date' => '2021-11-06',
                    'regis_link' => route('register-talkshow'),
                    'landing_link' => null,
                    'already_registered' => \Auth::user()->userable->talkshow != null
                ],
                [
                    'title' => 'Virtual Play',
                    'description' => 'Segera mainkan game interaktif untuk mengetahui seberapa jauh pengetahuan umum dan teknologi kamu di virtual play. Pastikan kamu berusaha untuk meraih poin setinggi mungkin dengan menjawab berbagai tantangan yang ada dan kamu berkesempatan untuk mendapatkan hadiah spesial dari ISE! 2021.',
                    'start_date' => '2021-10-09',
                    'end_date' => '2021-11-07',
                    'regis_link' => null,
                    'landing_link' => route('virtual-play.index'),
                    'already_registered' => \Auth::user()->userable->bionix_id != null
                ],
                [
                    'title' => 'BIONIX College Level 2021',
                    'description' => 'Kompetisi studi kasus bisnis nasional yang berfokus pada pemecahan studi kasus bisnis dan teknologi informasi yang dialami oleh suatu perusahaan untuk tingkat mahasiswa di Indonesia.BIONIX College Level dilaksanakan melalui tiga tahapan kompetisi dengan konsep acara daring penuh.',
                    'start_date' => '2021-08-01',
                    'end_date' => '2021-09-01',
                    'regis_link' => route('register-college'),
                    'landing_link' => route('bionix-landing', ['type' => 'college']),
                    'already_registered' => \Auth::user()->userable->bionix_id != null
                ],
                [
                    'title' => 'Startup Academy',
                    'description' => 'Startup Academy hadir untuk memberikan fundamental knowledge kepada para akademisi sebagai the next founder of startup.',
                    'start_date' => '2021-08-23',
                    'end_date' => '2021-10-10',
                    'regis_link' => route('register-startup'),
                    'landing_link' => route('startup-landing.index'),
                    'already_registered' => \Auth::user()->userable->academy_id != null,
                    'already_registered_message' => 'Anda sudah mendaftar pada salah satu academy'
                ],
                [
                    'title' => 'Data Science Academy',
                    'description' => 'Data Science Academy hadir untuk menjadi langkah awal atau katalis karier peserta sebagai seorang data scientist.',
                    'start_date' => '2021-08-23',
                    'end_date' => '2021-09-30',
                    'regis_link' => route('register-data-science'),
                    'landing_link' => route('data-science-landing.index'),
                    'already_registered' => \Auth::user()->userable->academy_id != null,
                    'already_registered_message' => 'Anda sudah mendaftar pada salah satu academy'
                ],
                [
                    'title' => 'Virtual Intern & Jobfair',
                    'description' => 'ICON Virtual Intern & Jobfair menawarkan lowongan magang dan pekerjaan di bidang keprofesian Teknologi Informasi dan Sistem Informasi.',
                    'start_date' => '2021-10-31',
                    'end_date' => '2021-11-07',
                    'regis_link' => route('icon.peserta.jobfair.registrasi'),
                    'landing_link' => route('virtual-job-fair.index'),
                    'already_registered' => \Auth::user()->userable->jobfair!=null
                ]

            ];
        } elseif (\Auth::user()->userable->jenjang == 'Umum') {
            $this->events = [
                [
                    'title' => 'Grand Talkshow',
                    'description' => 'Sesi talkshow gratis yang akan memberikan  insight baru kepada seluruh partisipan untuk semakin adaptif di era perkembangan digital yang semakin pesat. Tidak hanya itu kamu juga akan mendapatkan insight terkait cara agar startup kamu dapat semakin berkembang di masa normal baru.',
                    'start_date' => '2021-10-11',
                    'end_date' => '2021-11-06',
                    'regis_link' => route('register-talkshow'),
                    'landing_link' => null,
                    'already_registered' => \Auth::user()->userable->talkshow != null
                ],
                [
                    'title' => 'Virtual Play',
                    'description' => 'Segera mainkan game interaktif untuk mengetahui seberapa jauh pengetahuan umum dan teknologi kamu di virtual play. Pastikan kamu berusaha untuk meraih poin setinggi mungkin dengan menjawab berbagai tantangan yang ada dan kamu berkesempatan untuk mendapatkan hadiah spesial dari ISE! 2021.',
                    'start_date' => '2021-10-09',
                    'end_date' => '2021-11-07',
                    'regis_link' => null,
                    'landing_link' => route('virtual-play.index'),
                    'already_registered' => \Auth::user()->userable->bionix_id != null
                ],
                [
                    'title' => 'Virtual Intern & Jobfair',
                    'description' => 'ICON Virtual Intern & Jobfair menawarkan lowongan magang dan pekerjaan di bidang keprofesian Teknologi Informasi dan Sistem Informasi.',
                    'start_date' => '2021-10-31',
                    'end_date' => '2021-11-07',
                    'regis_link' => route('icon.peserta.jobfair.registrasi'),
                    'landing_link' => route('virtual-job-fair.index'),
                    'already_registered' => \Auth::user()->userable->jobfair!=null
                ]
            ];
        }
        $this->event_countdowns = [
            //BIONIX College
            [
                'id' => random_int(0, 1000),
                'title' => 'Coaching',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-08-29 08:30:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Penutupan Registrasi',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-09-01 23:59:59',
                'for_event' => 'none',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Mulai Babak Penyisihan',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-09-02 00:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Akhir Babak Penyisihan',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-09-16 23:59:59',
                'for_event' => 'bionix',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Pengumuman Lolos Penyisihan',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-09-19',
                'for_event' => 'bionix',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Mulai Pembayaran Semifinal Batch 1',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-09-19 00:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Akhir Pembayaran Semifinal Batch 1',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-09-22 23:59:59',
                'for_event' => 'bionix',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Mulai Pembayaran Semifinal Batch 2',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-09-23 00:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Akhir Pembayaran Semifinal Batch 2',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-09-26 23:59:59',
                'for_event' => 'bionix',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Mulai Babak Semifinal',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-09-19 00:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Akhir Babak Semifinal',
                'tag' => 'BIONIX College Level',
                'deadline' => '2021-10-10 23:59:59',
                'for_event' => 'bionix',
                'who_can_join' => 'Mahasiswa'
            ],

            //BIONIX Student
            [
                'id' => random_int(0, 1000),
                'title' => 'Penutupan Registrasi',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-09-25 23:59:59',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Try Out 1',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-09-05 09:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Hasil dan Pembahasan Try Out 1',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-09-06 19:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Try Out 2',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-09-12 09:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Hasil dan Pembahasan Try Out 2',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-09-13',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Penyisihan 1',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-09-26 07:30:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Coaching',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-10-02 08:30:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Pengumuman Lolos Penyisihan 1',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-10-02 13:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Penyisihan 2',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-10-03 09:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Pengumuman Lolos Penyisihan 2',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-10-04 19:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Mulai Babak Semifinal',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-10-05 00:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Akhir Babak Semifinal',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-10-23 23:59:59',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Pengumuman Lolos Semifinal',
                'tag' => 'BIONIX Student Level',
                'deadline' => '2021-11-01 19:00:00',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Final',
                'tag' => (\Auth::user()->userable->bionix_type == "bionix_senior" ? 'BIONIX College Level' : 'BIONIX Student Level'),
                'deadline' => '2021-11-06',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA,Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Awarding',
                'tag' => (\Auth::user()->userable->bionix_type == "bionix_senior" ? 'BIONIX College Level' : 'BIONIX Student Level'),
                'deadline' => '2021-11-07',
                'for_event' => 'bionix',
                'who_can_join' => 'Siswa SMA,Mahasiswa'
            ],

            //All Academy
            [
                'id' => random_int(0, 1000),
                'title' => 'Penutupan Registrasi',
                'tag' => 'Data Science Academy',
                'deadline' => '2021-09-30 23:59:59',
                'for_event' => 'none',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Penutupan Registrasi',
                'tag' => 'Startup Academy',
                'deadline' => '2021-10-10 23:59:59',
                'for_event' => 'none',
                'who_can_join' => 'Mahasiswa'
            ],
            //Startup Academy
            [
                'id' => random_int(0, 1000),
                'title' => 'Technical Meeting',
                'tag' => 'Startup Academy',
                'deadline' => '2021-10-22 19:00:00',
                'for_event' => 'startup_academy',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Day 1',
                'tag' => 'Startup Academy',
                'deadline' => '2021-10-23 08:30:00',
                'for_event' => 'startup_academy',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Day 2',
                'tag' => 'Startup Academy',
                'deadline' => '2021-10-24 08:30:00',
                'for_event' => 'startup_academy',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Day 3',
                'tag' => 'Startup Academy',
                'deadline' => '2021-10-30 08:30:00',
                'for_event' => 'startup_academy',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Day 4',
                'tag' => 'Startup Academy',
                'deadline' => '2021-10-31 08:30:00',
                'for_event' => 'startup_academy',
                'who_can_join' => 'Mahasiswa'
            ],

            //Data Science Academy
            [
                'id' => random_int(0, 1000),
                'title' => 'Technical Meeting',
                'tag' => 'Data Science Academy',
                'deadline' => '2021-10-8 19:00:00',
                'for_event' => 'data_science_academy',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Day 1',
                'tag' => 'Data Science Academy',
                'deadline' => '2021-10-9 08:30:00',
                'for_event' => 'data_science_academy',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Day 2',
                'tag' => 'Data Science Academy',
                'deadline' => '2021-10-10 08:30:00',
                'for_event' => 'data_science_academy',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Day 3',
                'tag' => 'Data Science Academy',
                'deadline' => '2021-10-16 08:30:00',
                'for_event' => 'data_science_academy',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Day 4',
                'tag' => 'Data Science Academy',
                'deadline' => '2021-10-17 08:30:00',
                'for_event' => 'data_science_academy',
                'who_can_join' => 'Mahasiswa'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Grand Talkshow',
                'tag' => 'Grand Talkshow',
                'deadline' => '2021-11-07 10:00:00',
                'for_event' => 'none',
                'who_can_join' => 'Mahasiswa,Umum,Siswa SMA'
            ],
            [
                'id' => random_int(0, 1000),
                'title' => 'Penutupan Virtual Intern & Jobfair',
                'tag' => 'Virtual Intern & Jobfair',
                'deadline' => '2021-11-07 00:00:00',
                'for_event' => 'none',
                'who_can_join' => 'Mahasiswa,Umum'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.pages.dashboard-global.home.index');
    }
}
