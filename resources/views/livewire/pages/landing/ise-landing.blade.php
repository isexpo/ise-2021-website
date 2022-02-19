<div class="nav-container">
    <nav class="navbar navbar-custom fixed-top navbar-expand-lg container-fluid mb-5">
        <div class="logo"><a class="navbar-brand img-fluid" href="{{config('app.url')}}"><img
                    src="{{asset('img/landing/logo-text-white.svg')}}"
                    alt="logo ISE! 2021"/></a></div>
        <div class="collapse navbar-collapse order-3 dual-collapse2 list" id="collapse_target">
            <ul class="border-0 nav navbar-nav nav-tabs ms-auto" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <a href="#about" class="nav-link">About</a>
                <a href="#events" class="nav-link">Events</a>
            </ul>
            @if(Auth::check())
                {{--                <li class="nav-item dropdown">--}}
                {{--                    <a class="nav-link" id="usernav"><i class="far fa-user"></i> {{Auth::user()->name}} <i--}}
                {{--                            class="fas fa-chevron-down"></i></a>--}}
                {{--                    <ul class="dropdown-menu">--}}
                {{--                        <li>--}}
                {{--                            <a class="text-white dropdown-item" href="{{route('peserta.choose-dashboard')}}">Dashboard</a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a class="text-white dropdown-item" href="{{route('logout')}}"--}}
                {{--                               onclick="event.preventDefault();--}}
                {{--                $('#logout').submit();">Keluar</a>--}}
                {{--                            <form action="{{ route('logout') }}" method="POST" id="logout"> @csrf--}}
                {{--                            </form>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                <a class="nav-link login" href="{{route('dashboard.index')}}">Dashboard</a>
            @else
                <a class="nav-link login" href="{{route('login')}}">Login</a>
            @endif
        </div>
        <button class="navbar-toggle menu-btn" data-bs-toggle="collapse" data-bs-target="#collapse_target"
                id="hamburger-button">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>

<!-- Home section start -->
<section id="home" style="min-height: 100vh" class="d-flex pt-5 mt-5 pb-5 mt-md-0">
    <div class="container text-white text-left d-flex">
        <div class="row my-auto w-100">
            <div class="col-12 col-md-7">
                <div style="font-size: 2em;">
                    <span class="sfoutline">#</span><span class="sfregular">ISE</span><span
                        class="sfoutline">CATALYST</span>
                    <h1 class="sfregular my-1">ISE! 2021</h1>
                    <h2 class="hindbold">Prepare to Accelerate The Future!</h2>
                    <p class="hindreg" style="font-size: 0.6em;">ISE! 2021 kini kembali hadir dengan kompetisi yang
                        menantang, akademi dan talkshow IT, dan masih banyak acara menarik lainnnya</p>
                </div>
                <div class="flex-column flex-md-row d-flex justify-content-start">
                    <a class="btn mt-2 mb-4 text-uppercase btnhome btndaftar" href="{{route('register')}}">Daftar
                        sekarang</a>
                    <a class="btn ms-md-4 mt-2 mb-4 text-uppercase btnhome btnabout" href="#about">Tentang
                        ISE!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about start -->
<section id="about">
    <div class="swiper-container vertical">
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide vertslide1 d-flex">
                <div class="container my-auto ms-0 ms-md-5 w-100 text-justify">
                    <div class="d-block d-md-none col-12 col-md-7 p-4 rounded"
                         style="background: rgba(0,0,0,0.5);color: white">
                        <h1 class="hindbold">Apa itu ISE?</h1>
                        <p class="hindreg">Information Systems Expo (ISE) merupakan acara Sistem Informasi terbesar di
                            Indonesia yang diselenggarakan setiap tahun oleh Himpunan Mahasiswa Sistem Informasi ITS
                            dalam rangka memperkenalkan Departemen Sistem Informasi ITS serta memberikan edukasi akan
                            pentingnya teknologi informasi ke masyarakat Indonesia.</p>
                    </div>
                    <div class="d-md-block d-none col-12 col-md-7 p-4">
                        <h1 class="hindbold">Apa itu ISE?</h1>
                        <p class="hindreg">Information Systems Expo (ISE) merupakan acara Sistem Informasi terbesar di
                            Indonesia yang diselenggarakan setiap tahun oleh Himpunan Mahasiswa Sistem Informasi ITS
                            dalam rangka memperkenalkan Departemen Sistem Informasi ITS serta memberikan edukasi akan
                            pentingnya teknologi informasi ke masyarakat Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide vertslide2 d-flex">
                <div class="container my-auto ms-0 ms-md-5 w-100 text-justify">
                    <div class="d-block d-md-none col-12 col-md-7 p-4 rounded"
                         style="background: rgba(0,0,0,0.5);color: white">
                        <h1 class="hindbold">Apa itu BIONIX?</h1>
                        <p class="hindreg">Business and IT Olympiad on Information Systems Expo (BIONIX), olimpiade
                            bisnis dan IT terbesar di Indonesia untuk tingkat pelajar SMA/SMK sederajat dan mahasiswa.
                        </p>
                        <div class="d-flex flex-column flex-md-row justify-content-start">
                            <a class="mb-4 btn text-uppercase btnhome btndaftarbionix" href="{{route('register')}}">Daftar
                                sekarang</a>
                            <a class="ms-md-4 mb-4 btn text-uppercase btnhome btnabout text-white"
                               href="{{route('bionix-landing')}}">Tentang
                                BIONIX</a>
                        </div>
                    </div>
                    <div class="d-md-block d-none col-12 col-md-7 p-4">
                        <h1 class="hindbold">Apa itu BIONIX?</h1>
                        <p class="hindreg">Business and IT Olympiad on Information Systems Expo (BIONIX), olimpiade
                            bisnis dan IT terbesar di Indonesia untuk tingkat pelajar SMA/SMK sederajat dan mahasiswa.
                        </p>
                        <div class="d-flex flex-column flex-md-row justify-content-start">
                            <a class="mb-4 btn text-uppercase btnhome btndaftarbionix" href="{{route('register')}}">Daftar
                                sekarang</a>
                            <a class="ms-md-4 btn mb-4 text-uppercase btnhome btnabout"
                               href="{{route('bionix-landing')}}">Tentang
                                BIONIX</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide vertslide3 d-flex">
                <div class="container my-auto ms-0 ms-md-5 w-100 text-justify">
                    <div class="d-block d-md-none col-12 col-md-7 p-4 rounded"
                         style="background: rgba(0,0,0,0.5);color: white">
                        <h1 class="hindbold">Apa itu ICON?</h1>
                        <p class="hindreg">ICON (IT Convention) diselenggarakan sebagai bentuk kontribusi dalam
                            peningkatan awareness masyarakat terhadap potensi teknologi informasi yang ditujukan untuk
                            umum.</p>
                        <div class="d-flex flex-column flex-md-row justify-content-start">
                            <a class="text-uppercase btnhome btndaftaricon btn mb-4"
                               href="{{route('register')}}">Daftar sekarang</a>
                            <a class="text-uppercase btnhome btnabout btn text-white ms-md-4 mb-4"
                               href="{{route('icon-landing.index')}}">Tentang
                                ICON</a>
                        </div>
                    </div>
                    <div class="d-md-block d-none col-12 col-md-7 p-4">
                        <h1 class="hindbold">Apa itu ICON?</h1>
                        <p class="hindreg">ICON (IT Convention) diselenggarakan sebagai bentuk kontribusi dalam
                            peningkatan awareness masyarakat terhadap potensi teknologi informasi yang ditujukan untuk
                            umum.</p>
                        <div class="d-flex flex-column flex-md-row justify-content-start">
                            <a class="mt-2 mb-4 btn text-uppercase btnhome btndaftaricon"
                               href="{{route('register')}}">Daftar sekarang</a>
                            <a class="ms-md-4 mt-2 mb-4 btn text-uppercase btnhome btnabout"
                               href="{{route('icon-landing.index')}}">Tentang
                                ICON</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- events ise start -->
<section id="events" class="py-4 d-flex">
    <div class="container my-auto">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-4">
                <h2 class="hindbold">Ada acara apa saja di ISE! 2021?</h2>
                <p class="hindreg text-justify">Tahun ini, ISE! mengangkat tema “Catalyst”. Dengan mengusung tema
                    Catalyst, ISE! 2021 diharapkan menjadi katalisator dalam mempercepat persiapan masyarakat Indonesia
                    menuju era transformasi digital, dengan membawa berbagai acara baru berbeda dengan tahun
                    sebelumnya
                </p>
            </div>
            <div class="col-10 col-lg-8">
                <div class="row justify-content-center text-center align-items-center py-2">
                    <a href="{{route('bionix-landing',['type'=>'student'])}}"
                       class="col-12 col-md-6 row align-items-center acara-link px-3"
                       style="text-decoration: none;">
                        <div class="col-12 row ps-0 pe-2 m-0">
                            <div class="col-12 row m-1" style="background-color: #354B80;border-radius: 8px;">
                                <div class="col-12 col-md-5 text-md-right"
                                     style="display: flex;align-items: center;justify-content: center">
                                    <img src="{{asset('/img/landing/content-icon/bsl.svg')}}" alt="" class="img-fluid"
                                         style="height: 70%;">
                                </div>
                                <div class="col-12 col-md-7 pt-3 pt-md-0 acara"
                                     style="display: flex;align-items: center;justify-content: center;flex-direction: column">
                                    BIONIX Student Level<br><span>Pendaftaran ditutup</span></div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('icon-landing.index')}}"
                       class="col-12 col-md-6 row align-items-center acara-link px-3"
                       style="text-decoration: none;">
                        <div class="col-12 row ps-0 pe-2 m-0">
                            <div class="col-12 row m-1 py-3" style="background-color: #354B80;border-radius: 8px;">
                                <div class="col-12 col-md-5 text-md-right"
                                     style="display: flex;align-items: center;justify-content: center">
                                    <img src="{{asset('/img/landing/content-icon/icon_academy.svg')}}" alt=""
                                         class="img-fluid"
                                         style="height: 80%;">
                                </div>
                                <div class="col-12 col-md-7 pt-3 pt-md-0 acara"
                                     style="display: flex;align-items: center;justify-content: center;flex-direction: column">
                                    ICON Academy<br><span>Pendaftaran Ditutup</span></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="row justify-content-center text-center align-items-center py-2">
                    <a href="{{route('bionix-landing',['type'=>'college'])}}"
                       class="col-12 col-md-6 row align-items-center acara-link px-3"
                       style="text-decoration: none;">
                        <div class="col-12 row ps-0 pe-2 m-0">
                            <div class="col-12 row m-1" style="background-color: #354B80;border-radius: 8px;">
                                <div class="col-12 col-md-5 text-md-right"
                                     style="display: flex;align-items: center;justify-content: center">
                                    <img src="{{asset('/img/landing/content-icon/bcl.svg')}}" alt="" class="img-fluid"
                                         style="height: 70%;">
                                </div>
                                <div class="col-12 col-md-7 pt-3 pt-md-0 acara"
                                     style="display: flex;align-items: center;justify-content: center;flex-direction: column">
                                    BIONIX College Level<br><span>Pendaftaran Ditutup</span></div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('grand-talkshow')}}" class="col-12 col-md-6 row align-items-center acara-link px-3"
                       style="text-decoration: none;">
                        <div class="col-12 row ps-0 pe-2 m-0 open-events">
                            <div class="col-12 row m-1" style="background-color: #354B80;border-radius: 8px;padding-top: 1.37rem!important;
    padding-bottom: 1.35rem!important;">
                                <div class="col-12 col-md-5 text-md-right"
                                     style="display: flex;align-items: center;justify-content: center">
                                    <img src="{{asset('/img/landing/content-icon/grand_talk_show.svg')}}" alt=""
                                         class="img-fluid"
                                         style="height: 70%;">
                                </div>
                                <div class="col-12 col-md-7 pt-3 pt-md-0 acara"
                                     style="display: flex;align-items: center;justify-content: center;flex-direction: column">
                                    Grand Talk Show<br><span>Pendaftaran Dibuka</span></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="row justify-content-center text-center align-items-center py-2">
                    <a href="{{route('virtual-job-fair.index')}}"
                       class="col-12 col-md-6 row align-items-center acara-link px-3"
                       style="text-decoration: none;">
                        <div class="col-12 row ps-0 pe-2 m-0 open-events">
                            <div class="col-12 row m-1 py-3" style="background-color: #354B80;border-radius: 8px;padding-top: 1.26rem!important;
    padding-bottom: 1.26rem!important;">
                                <div class="col-12 col-md-5 text-md-right"
                                     style="display: flex;align-items: center;justify-content: center">
                                    <img src="{{asset('/img/landing/content-icon/virtual_job_fair.svg')}}" alt=""
                                         class="img-fluid"
                                         style="height: 50%;">
                                </div>
                                <div class="col-12 col-md-7 pt-3 pt-md-0 acara"
                                     style="display: flex;align-items: center;justify-content: center;flex-direction: column">
                                    Virtual Intern & Job Fair<br><span>Pendaftaran Dibuka</span></div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('e-hall.index')}}" class="col-12 col-md-6 row align-items-center acara-link px-3"
                       style="text-decoration: none;">
                        <div class="col-12 row ps-0 pe-2 m-0 open-events">
                            <div class="col-12 row m-1 py-2" style="background-color: #354B80;border-radius: 8px;padding-top: .7rem!important;
    padding-bottom: .7rem!important;">
                                <div class="col-12 col-md-5 text-md-right"
                                     style="display: flex;align-items: center;justify-content: center">
                                    <img src="{{asset('/img/landing/content-icon/hall_of_is.svg')}}" alt=""
                                         class="img-fluid"
                                         style="height: 70%;">
                                </div>
                                <div class="col-12 col-md-7 pt-3 pt-md-0 acara"
                                     style="display: flex;align-items: center;justify-content: center;flex-direction: column">
                                    E-Hall of IS<br><span>Pendaftaran Dibuka</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- swiper section start -->
<div class="swiper-container swiper-event mt-0">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide1">
            <div class="about">
                <div class="row align-items-start">
                    <div class="col-4"><img src="{{asset('/img/landing/line-bionix.svg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-4 my-auto text-uppercase warningtag">Pendaftaran dibuka</div>
                </div>
                <h1>BUSINESS AND IT OLYMPIAD<br>
                    ON INFORMATION SYSTEMS EXPO</h1>
                <p class="hindreg">Business and IT Olympiad on Information Systems Expo, olimpiade bisnis dan IT
                    terbesar di Indonesia<br> untuk tingkat pelajar SMA/SMK sederajat dan mahasiswa.</p>
                <a href="{{route('bionix-landing')}}" class="btn hindsbold">KENALI LEBIH LANJUT</a>
            </div>
        </div>
    </div>
</div>

<!-- swiper 2 section start -->
<div class="swiper-bottom">
    <div class="swiper-container mySwiper swiper-2">
        <h2 class="container title text-left">Apa Kata Mereka Tentang ISE?</h2>
        <div class="swiper-wrapper">
            <div class="swiper-slide slide1-2">
                <div class="content d-flex" style="min-height: 60vh;">
                    <div class="container-fluid d-md-flex">
                        <div class="row">
                            <div class="col-md-4 img-nabila rounded-right">
                            </div>
                            <div class="col-md-8 desc">
                                <h2>Bisa dapat <span>Free Pass SNMPTN</span>, <span>banyak relasi</span>, dan <span>wawasan baru</span>!
                                </h2>
                                <p>“Dari BIONIX, wawasanku lebih terbuka tentang sistem informasi dan dapat banyak
                                    wawasan baru yang sebelumnya gak aku dapetin di SMA. Selain itu, di BIONIX aku juga
                                    dapet banyak temen baru yang bahkan masih keep contact sampai sekarang sehingga dari
                                    sini aku juga bisa memperluas relasi. Last but not least, aku juga dapat Free Pass
                                    SNMPTN Sistem Informasi ITS berkat BIONIX.”</p>
                                <h4>Nabila Aprillia<br><span
                                        style="color: rgba(0,0,0,0.65)">1st Winner BIONIX 2019</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="content d-flex">
                    <div class="container-fluid d-md-flex">
                        <div class="row">
                            <div class="col-md-4 img-arif rounded-right">
                            </div>
                            <div class="col-md-8 desc">
                                <h2>Dapat ilmu <span>pemrograman</span>, dan <span>bisnis</span>!
                                </h2>
                                <p>“Di BIONIX aku bisa dapet banyak ilmu baru, belajar IT dan pemrograman hingga caranya
                                    belajar bikin ide bisnis. Aku yakin BIONIX akan lebih asik karena banyak manfaat
                                    yang bisa didapetin.”</p>
                                <h4>M Arif Nuriman<br><span
                                        style="color: rgba(0,0,0,0.65)">1st Winner BIONIX 2019</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<!-- Start of Sponsor -->
<livewire:components.sponsor/>
<!-- End of Sponsor -->

@push('css')
    <link rel="stylesheet" href="{{asset('/css/landing/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/landing/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/landing/normalize.min.css')}}"/>
    <style>
        .swiper-container-vertical > .swiper-pagination-bullets {
            left: 10px;
            top: 50%;
            transform: translate3d(0px, -50%, 0);
        }

        .swiper-container-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 24px 0;
            display: block;
        }

        .swiper-container-vertical .swiper-pagination-bullet {
            width: 48px;
            height: 48px;
            display: inline-block;
            border-radius: 50%;
            background: #000;
            opacity: .2;
        }

        .swiper-container-vertical .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background: blue;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
            bottom: 0px;
            left: 0;
            width: 100%;
        }
    </style>
@endpush

@push('js')
    <script src="{{asset('/js/landing/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/landing/custom.js')}}"></script>
@endpush
