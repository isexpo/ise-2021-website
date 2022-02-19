@section('title','Grand Talkshow')
@section('desc','Grand Talkshow akan membahas mengenai isu teknologi terkini dan potensinya, terutama pada
                            kondisi pandemi yang terjadi saat ini, ketika teknologi semakin dibutuhkan dalam kehidupan
                            sehari-hari.')

<div>

    <div class="bg">
        <!--navbar section-->

        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="@if(!config('app.debug')) https://ise-its.com/ @else {{route('ise-landing')}} @endif"><img
                        src="{{asset('img/icon/img/logo-text-white.svg')}}"
                        alt="logo ISE! 2021"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDrop" aria-controls="navbarTogglerDrop" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDrop">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{route('icon-landing.index')}}">ICON
                                Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuEvent"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="d-inline">Event <i class="fas fa-chevron-down" style="margin-left: 10px;"></i>
                                </p>
                            </button>
                            <ul class="dropdown-menu text-center text-md-start me-0">
                                <li>
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-12 col-md-6">
                                                <a class=" dropdown-item" href="{{route('e-hall.index')}}"> <img
                                                        id="gambar2"
                                                        src="{{asset('img/icon/img/Hall of IS 1.png')}}"
                                                        alt=""> E-Hall of
                                                    IS</a>
                                            </div>


                                            <div class="col-12 col-md-6">
                                                <a class="pad2 dropdown-item"
                                                   href="{{route('data-science-landing.index')}}"><img id="gambar4"
                                                                                                       src="{{asset('img/icon/img/DS.png')}}"
                                                                                                       alt=""> Data
                                                    Science</a>

                                            </div>


                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-12 col-md-6">
                                                <a class="dropdown-item" href="{{route('virtual-job-fair.index')}}"><img
                                                        id="gambar1"
                                                        src="{{asset('img/icon/img/Layer 2.png')}}"
                                                        alt=""> Virtual Intern &
                                                    Jobfair</a>
                                            </div>


                                            <div class="col-12 col-md-6">
                                                <a class="pad1 dropdown-item" href="{{route('startup-landing.index')}}"><img
                                                        id="gambar3"
                                                        src="{{asset('img/icon/img/start.png')}}"
                                                        alt=""> Startup Academy</a>


                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-12 col-md-6">
                                                <a class="dropdown-item" href="{{route('grand-talkshow')}}"><img
                                                        id="gambar3"
                                                        src="{{asset('img/icon/img/Grand Talk Show 1.png')}}"
                                                        alt=""> Grand Talk Show</a>


                                            </div>


                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        @if(Auth::check())
                            <li class="nav-item dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuEvent"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('img/icon/img/user.svg')}}" alt="" class="me-1" height="20px">
                                    <p class="d-inline">{{Auth::user()->name}} <i class="fas fa-chevron-down"
                                                                                  style="margin-left: 10px;"></i>
                                    </p>
                                </button>
                                <ul class="dropdown-menu text-center text-md-start" id="user">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('dashboard.index')}}">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('logout')}}"
                                           onclick="event.preventDefault();
                $('#logout').submit();">Keluar</a>
                                        <form action="{{ route('logout') }}" method="POST" id="logout"> @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                    @else

                        <a class="nav-link login" href="{{route('login')}}">Login</a>
                    @endif
                </div>
            </div>
        </nav>


        <nav class="navbar navbarsl navbar-custom fixed-top navbar-expand-lg container-fluid" id="navbar2">

            <a href="{{route('register-talkshow')}}" class="nav-link my-1 me-3" id="daftar">Daftar</a>

        </nav>


        <!-- header student level section start -->
        <section class="header d-flex flex-column align-items-center justify-content-center">
            <div class="container" style="height: initial">
                <div class="row">
                    <div class="col-12 col-lg-4 text-center text-lg-end">
                        <img src="{{asset('/img/startup-landing/Grand.png')}}" alt="" id="header-img" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-8 text-left ps-5 mt-5 mt-md-0">
                        <img src="{{asset('/img/startup-landing/icon.png')}}" id="logo-img" alt="">
                        <h1 style="text-transform:uppercase;">Grand Talkshow</h1>
                        <p>Grand Talkshow akan membahas mengenai isu teknologi terkini dan potensinya, terutama pada
                            kondisi pandemi yang terjadi saat ini, ketika teknologi semakin dibutuhkan dalam kehidupan
                            sehari-hari.
                        </p>
                        <a href="https://www.youtube.com/watch?v=6HE_cMAB3-g" target="_blank" id="lebih-lanjut" class="btn">Lebih lanjut <img
                                src="{{asset('/img/ds-landing/chevron-right.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- intro section start -->
        <section class="intro" id="intro">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex flex-column align-items-center">
                        <p class="intro-text text-start text-md-center mb-5 lh-base"
                           style="color: whitesmoke; font-size: 2rem">
                            Grand talkshow pada ICON 2021 akan membawakan tiga tema umum,
                            yaitu :</p>

                        <ul class="fs-4" style="width: fit-content">
                            <li>Building a Sustainable Startup in Post Pandemic Era,</li>
                            <li>Important Skills For
                                Undergraduates To Survive in Digital World,
                            </li>
                            <li>
                                Artificial Intelligence (AI) in The Real
                                World
                            </li>
                        </ul>
                    </div>

                    <!-- speakers section start -->
                    <section class="speakers" id="speakers">
                        <div class="container">
                            <h1 class="hindbold text-center" style="color: whitesmoke;">Speakers</h1>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-3 text-center pt-5">
                                    <img src="{{asset('img/speakers/talkshow/raymond-chin.png')}}" alt="Raymond Chin"
                                         class="img-fluid"
                                         style="max-width: 280px;"
                                         loading="lazy"/>
                                    <h2 class="text-center mt-4 speaker-name">Raymond <br/>Chin</h2>
                                    <h5>CEO & Co-founder of Ternak Uang</h5>
                                </div>
                                <div class="col-md-3 text-center pt-5">
                                    <img src="{{asset('img/speakers/talkshow/leonardo-edwin.png')}}" alt="Leonardo Edwin"
                                         class="img-fluid"
                                         style="max-width: 280px;"
                                         loading="lazy"/>
                                    <h2 class="text-center mt-4 speaker-name">Leonardo <br/>Edwin</h2>
                                    <h5>Content Creator</h5>
                                </div>
                                <div class="col-md-3 text-center pt-5">
                                    <img src="{{asset('img/speakers/talkshow/made-mulia.png')}}" alt="Made Mulia Indrajaya"
                                         class="img-fluid"
                                         style="max-width: 280px;"
                                         loading="lazy"/>
                                    <h2 class="text-center mt-4 speaker-name">Made Mulia <br/>Indrajaya</h2>
                                    <h5>DevOps Institute Ambassador</h5>
                                </div>
                                <div class="col-md-3 text-center pt-5">
                                    <img src="{{asset('img/speakers/talkshow/christian-hermanus.png')}}"
                                         alt="Christian Hermanus"
                                         class="img-fluid"
                                         style="max-width: 280px;"
                                         loading="lazy"/>
                                    <h2 class="text-center mt-4 speaker-name">Christian <br/>Hermanus</h2>
                                    <h5>IT Governance Expert</h5>
                                </div>
                            </div>
                        </div>
                    </section>

                    @if(date('Y-m-d H:i:s')>=date('Y-m-d H:i:s',strtotime('2021-11-07 10:00:00')))
                        <div class="row justify-content-center ms-1">
                            <p class="intro-text acara text-center  fs-4 lh-base py-2"
                               style="margin: 3rem 0;color: rgba(206, 0, 177, 1); border: 2px solid white; border-radius: 28px; width: 25rem; ">
                                <span><img src="{{asset('/img/startup-landing/Ellipse 38.png')}}" alt="">  Acara sedang berlangsung</span>
                            </p>
                        </div>
                    @endif

                </div>
                <div class="container mt-5 d-flex flex-row align-items-center justify-content-center">
                    <iframe width="320" height="180" src="https://www.youtube.com/embed/6HE_cMAB3-g"
                            title="YouTube video player" style="width: 100% !important;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            class="d-block d-sm-none"></iframe>
                    <iframe width="576" height="324" src="https://www.youtube.com/embed/6HE_cMAB3-g"
                            title="YouTube video player" style="width: 100% !important;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            class="d-none d-sm-block d-md-none"></iframe>
                    <iframe width="768" height="432" src="https://www.youtube.com/embed/6HE_cMAB3-g"
                            title="YouTube video player" style="width: 100% !important;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            class="d-none d-md-block d-lg-none"></iframe>
                    <iframe width="992" height="558" src="https://www.youtube.com/embed/6HE_cMAB3-g"
                            title="YouTube video player" style="width: 100% !important;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            class="d-none d-lg-block d-xl-none"></iframe>
                    <iframe width="1200" height="675" src="https://www.youtube.com/embed/6HE_cMAB3-g"
                            title="YouTube video player" style="width: 100% !important;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            class="d-none d-xl-block d-xxl-none"></iframe>
                    <iframe width="1400" height="787.5" src="https://www.youtube.com/embed/6HE_cMAB3-g"
                            title="YouTube video player" style="width: 100% !important;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            class="d-none d-xxl-block"></iframe>
                </div>
            </div>
        </section>


        <!--Virtual Intern Job Section-->
        <div class="swiper-container intern-swiper mb-5">
            <div class="swiper-wrapper">
                <div class="flex  swiper-slide">
                    <div class="container ">
                        <div class="row align-items-center">
                            <h2 class="mb-5 hindbold text-center">E-HALL OF IS</h2>
                            <div class="mar col-xl-2  col-lg-4 d-flex justify-content-center  px-2">
                                <img src="{{asset('img/icon/img/energeek.png')}}" width="240px" alt="">
                            </div>
                            <div class="col-lg-8 d-none d-lg-flex">
                                <p class="reg ps-xl-5 ps-lg-1">
                                    Energeek merupakan perusahaan konsultan dan jasa
                                    teknologi informasi yang terletak di Surabaya Jawa Timur.
                                    Energeek selalu berusaha
                                    menghasilkan berbagai inovasi, sehingga aplikasi yang dibuat mampu menyesuaikan
                                    dengan
                                    perkembangan teknologi. Energeek selalu menghasilkan aplikasi dengan
                                    desain yang
                                    baik tanpa mengesampingkan kemudahan penggunaan.
                                    Energeek fokus terhadap tiga hal yaitu Web Apps, Mobile Apps dan Infrastructure.
                                </p>
                            </div>
                            <div class="gap offset-xl-2 col-lg-8 d-none d-lg-flex justify-content-end pt-4">
                            <!-- <div style="margin-left:-100px;">
                                    <img src="{{asset('img/icon/img/bg e-hall 2.png')}}"  alt="">
                                </div> -->
                                <p class="reg text-end pe-xl-5 pe-lg-3">
                                    Startup yang bergerak dibidang creative digital agency untuk membantu dalam
                                    melakukan Social Media Activation, Social Media Management, Social Media
                                    Marketing, Social Media Optimization, hingga berbagai kebutuhan Digital
                                    Marketing lainnya. Go Social menggunakan sistem yang serba otomatis dan strategi
                                    Digital
                                    Marketing Hack yang belum pernah ada di digital agency manapun.
                                </p>
                            </div>
                            <div class="col-xl-2  col-lg-4 d-flex mt-4 justify-content-center">
                                <img src="{{asset('img/icon/img/gosocial.png')}}" width="240px" alt="">
                            </div>
                        </div>
                        <div class="pt-5  d-flex justify-content-center">
                            <a class="bnt mt-2 mb-4 text-uppercase btnhome btnabout"
                               style="text-decoration: none;" href="{{route('e-hall.index')}}">selengkapnya</a>
                        </div>
                        <div class="mt-5 container">
                            <div id="brdr" class="row py-5 justify-content-center align-items-center">
                                {{--                                    <div class="col-xl-8 col-12 ">--}}
                                <div class="col">
                                    <p class="reg">
                                        <span>Pameran virtual karya-karya autentik</span> mahasiswa dan alumni
                                        Sistem Informasi Institut Teknologi Sepuluh Nopember (ITS) dengan reputasi
                                        gemilang, baik ranah nasional maupun internasional.
                                        Pameran e–Hall of IS diselenggarakan secara digital, menggunakan platform
                                        website ISE 2021, dan disajikan dalam bentuk video profil, artikel, dan
                                        permainan berupa quiz dan challenge
                                    </p>
                                </div>
                                {{--                                    <div class="mt-lg-5 mt-xl-0 col-xl-4 col-12 ml-5 text-xl-end text-center">--}}
                                {{--                                        <iframe src="https://www.youtube.com/embed/7aMOurgDB-o" width="90%"--}}
                                {{--                                                height="200px" title="YouTube video player"--}}
                                {{--                                                frameborder="0"--}}
                                {{--                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
                                {{--                                                allowfullscreen></iframe>--}}
                                {{--                                    </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex  swiper-slide">
                    <div class="container ">
                        <div class="py-5 row align-items-center">
                            <h2 class="mb-5 hindbold text-center">VIRTUAL INTERN <br> & <br> JOB FAIR</h2>
                            <div class="col-xl-4  col-lg-4 d-flex justify-content-center px-2">
                                <img src="{{asset('img/icon/img/work.png')}}" style="max-width: 400px" alt="">
                            </div>
                            <div class="col-lg-8">
                                <p class="reg ps-xl-5 ps-lg-1 p-5 d-none d-lg-flex">
                                    Dapatkan pengalaman menarik dengan melamar pekerjaan idaman kamu di ICON Virtual
                                    Intern and Job Fair. Kemudahan dan Kesesuaian dengan keprofesian di bidang
                                    teknologi
                                    informasi salah satu penawaran yang kami siapkan untuk menyungsung awal karir
                                    gemilang kamu! tunggu apa lagi yuk apply sekarang!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-5  d-flex justify-content-center">
                        <a class="bnt mt-2 mb-4 text-uppercase btnhome btnabout"
                           style="text-decoration: none;" href="{{route('virtual-job-fair.index')}}">selengkapnya</a>
                    </div>
                    <div class="mt-5 container">
                        <div id="brdr" class="row py-5 justify-content-center align-items-center">
                            {{--                                <div class="col-xl-8 col-12 ">--}}
                            <div class="col">
                                <p class="reg">
                                    <span>Pameran Lowongan Magang dan pekerjaan</span> di bidang keprofesian
                                    Teknologi Informasi dan Sistem Informasi virtual via Website ISE. Setiap
                                    partisipan perusahaan akan memiliki laman masing-masing yang berisi video dan
                                    narasi profil, daftar lowongan yang tersedia, kualifikasi lowongan, syarat
                                    berkas, dan kolom pendaftaran. Keuntungan bagi perusahaan yang membuka lowongan
                                    magang dan pekerjaan di ICON Virtual Intern & Jobfair adalah tidak dipungutnya
                                    biaya dan target audience ICON yang mengerucut
                                </p>
                            </div>
                            {{--                                <div class="mt-lg-5 mt-xl-0 col-xl-4 col-12 ml-5 text-xl-end text-center">--}}
                            {{--                                    <iframe src="https://www.youtube.com/embed/CID-sYQNCew" width="90%" height="200px"--}}
                            {{--                                            title="YouTube video player"--}}
                            {{--                                            frameborder="0"--}}
                            {{--                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
                            {{--                                            allowfullscreen></iframe>--}}
                            {{--                                </div>--}}
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


        <livewire:components.sponsor/>
    </div>

    <!-- whatsapp section -->
    @include('livewire.pages.landing.icon.whatsapp')
</div>
</div>
<!-- End of WA section -->

</div>

@push('css')


    <link rel="stylesheet" href="{{asset('/css/icon/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/icon/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('/css/icon/style.css?ver_date='.date('YmdHis',filemtime('css/icon/style.css')))}}"/>
    <link rel="stylesheet"
          href="{{asset('/css/startup-landing/style.css?ver_date='.date('YmdHis',filemtime('css/startup-landing/style.css')))}}"/>
    <link rel="stylesheet" href="{{asset('/css/startup-landing/navbar.css')}}"/>


    <style>
        body {
            background-image: url("{{asset('/img/ds-landing/background-ds-academy.png')}}");
            background-size: cover;
            background-repeat: no-repeat;
        }

        h2 {
            color: white;
        }
    </style>

@endpush

@push('js')
    <script src="{{asset('/js/icon/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/icon/custom.js')}}"></script>
@endpush
