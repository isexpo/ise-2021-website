@section('title','ICON 2021')
@section('desc','ICON 2021 berinovasi lebih jauh dengan menghadirkan ICON Academy sebagai workshop teknologi kepada masyarakat khususnya kalangan mahasiswa, Grand Talk Show yang membahas tema IT dan pembicara menarik, Virtual Intern & Job Fair, serta Hall of Information system sebagai pameran karya mahasiswa SI.')

{{-- TODO (Fikri) Landing Page ICON

URL : /icon/

--}}
{{-- Do your work, then step back. --}}
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
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="#timeline">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#speakers">Speakers</a>
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


        <!-- Home section start -->
        <section id="home" class="d-flex pt-5 mt-5 pb-5 mt-md-0">
            <div class="container text-white text-left d-flex">
                <div class="row my-auto w-100">
                    <div class="col-12 col-md-12">
                        <div style="font-size: 2em;">
                            <img class="icon" src="{{asset('img/icon/img/icon.png')}}" alt="Icon">
                            <h2 class="moskultra">INFORMATION <br>TECHNOLOGY CONVENTION</h2>
                        </div>
                    </div>
                    <div class="col-11 col-md-6">
                        <div style="font-size: 2em;">
                            <p class="hindreg" style="font-size: 0.6em; color: #D0D0D0;">ICON diselenggarakan sebagai
                                bentuk kontribusi dalam
                                peningkatan awareness masyarakat terhadap potensi teknologi informasi yang ditujukan
                                untuk umum. </p>

                            <div class="flex-column flex-md-row d-flex justify-content-start">
                                <div class="mt-2 mb-4"><a class="text-uppercase btnhome btnabout" href="#about"
                                                          style="text-decoration: none;">Kenali
                                        lebih lanjut</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End-->


        <main class="bgmain">

            <!--About Section Start -->
            <section id="about" class="py-4 d-flex">
                <div class="con container">
                    <div class="row ">
                        <div class="col-lg-6 col-12">

                            <h2 class="hindbold">Apa itu ICON?</h2>
                            <div class="mt-5">
                                <p>ICON 2021 berinovasi lebih jauh dengan menghadirkan ICON Academy sebagai workshop
                                    teknologi kepada masyarakat khususnya kalangan mahasiswa, Grand Talk Show yang
                                    membahas tema IT dan pembicara menarik, Virtual Intern & Job Fair, serta Hall of
                                    Information system sebagai pameran karya mahasiswa SI.</p>
                            </div>

                        </div>
                        <div class=" col-lg-6 col-12">

                            <div id="vidio">
                                <iframe id="frem" src="https://www.youtube.com/embed/UtNzCgkXYOs"
                                        title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                <div class=" butoncntr mt-4 justify-content-center"><a
                                        class="text-uppercase btnhome btndaftar" style="text-decoration: none;"
                                        href="https://www.youtube.com/channel/UCPbOX3w8G4_dwOMDNl97PTw">ISE
                                        Youtube Channel</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End-->


            <!--Events Start-->
            <section id="events">
                <div class=" sweper swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <div class="flek swiper-slide slide1">
                            <div class="container">
                                <div class="py-5 row ">
                                    <div class=" col-lg-6 col-12">
                                        <h2 class="hindbold">Ada acara apa saja di ICON 2021?</h2>
                                        <h2 class="tex pt-5 hindbold">ICON Virtual Intern & Jobfair</h2>
                                        <div class="mt-0">
                                            <p class="par">Pameran virtual lowongan magang dan pekerjaan yang
                                                mempertemukan perusahaan yang mencari pekerja dan para pencari kerja
                                                yang ingin menemukan pekerjaan impian mereka secara mudah terfokus pada
                                                bidang IT dan Sistem Informasi.</p>
                                        </div>


                                        <div class="pt-5 flex-column flex-md-row d-flex justify-content-start">
                                                                                        <a class="bnt mt-2 mb-4 text-uppercase btnhome btnabout"
                                                                                           style="text-decoration: none;" href="{{route('virtual-job-fair.index')}}">selengkapnya</a>
                                                                                        <a class="bnt ms-lg-4 mt-2 mb-4 text-uppercase btnhome btnregis"
                                                                                           style="text-decoration: none;" href="{{route('icon.peserta.jobfair.registrasi')}}">daftar</a>

                                        </div>

                                    </div>
                                    <div class="ptop pik col-lg-6 col-12">
                                        <img src="{{asset('img/icon/img/Landing Page-variation.png')}}" alt="">
                                        <h2 class="xet pt-5 hindbold">ICON Virtual Intern & Jobfair</h2>
                                        <div class="mt-0">
                                            <p class="rap">Pameran virtual lowongan magang dan pekerjaan yang
                                                mempertemukan perusahaan yang mencari pekerja dan para pencari kerja
                                                yang ingin menemukan pekerjaan impian mereka secara mudah terfokus pada
                                                bidang IT dan Sistem Informasi.</p>
                                        </div>
                                                                                <div class="pt-5 d-grid gap-2 col-5 mx-auto justify-content-center">
                                                                                    <a class=" tnb mt-2 mb-4 text-uppercase btnhome btnabout"
                                                                                       style="text-decoration: none;" href="{{route('virtual-job-fair.index')}}">selengkapnya</a>
                                                                                    <a class=" tnb ms-lg-4 mt-2 mb-4 text-uppercase btnhome btnregis"
                                                                                       style="text-decoration: none;" href="{{route('icon.peserta.jobfair.registrasi')}}">daftar</a>
                                                                                </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="swiper-slide slide2">
                            <div class="container">
                                <div class="py-5 row ">
                                    <div class=" col-lg-6 col-12">
                                        <h2 class="hindbold">Ada acara apa saja di ICON 2021?</h2>
                                        <h2 class="tex pt-5 hindbold">GRAND TALKSHOW</h2>
                                        <div class="mt-0">
                                            <p class="par">Talkshow interaktif yang dilaksanakan secara online sebagai
                                                penutup dari rangkaian ISE! 2021 dengan membawakan dua tema besar, yaitu
                                                Building a Sustainable Startup in Post Pandemic Era, serta Important
                                                Skills for Undergraduates To Survive in the Digital World.

                                            </p>
                                        </div>


                                        <div class="pt-5 flex-column flex-md-row d-flex justify-content-start">
                                            <a class="bnt mt-2 mb-4 text-uppercase btnhome btnabout"
                                               style="text-decoration: none;" href="{{route('grand-talkshow')}}">selengkapnya</a>
                                            <a class="bnt mt-2 mb-4 ms-4 text-uppercase btnhome btnregis"
                                               style="text-decoration: none;" href="{{route('register-talkshow')}}">daftar</a>
                                            {{--                                            <h2 class="d-none d-lg-block fw-bold">Coming Soon</h2>--}}
                                        </div>

                                    </div>
                                    <div class="ptop pik col-lg-6 col-12">
                                        <img src="{{asset('img/icon/img/Frame 39.png')}}" alt="">
                                        <h2 class="xet pt-5 hindbold">GRAND TALKSHOW</h2>
                                        <div class="mt-0">
                                            <p class="rap">Talkshow interaktif yang dilaksanakan secara online sebagai
                                                penutup dari rangkaian ISE! 2021 dengan membawakan dua tema besar, yaitu
                                                Building a Sustainable Startup in Post Pandemic Era, serta Important
                                                Skills for Undergraduates To Survive in the Digital World.

                                            </p>
                                        </div>

                                        <div class="pt-5 d-grid gap-2 col-5 mx-auto justify-content-center">
                                            <a class="tnb mt-2 mb-4 text-uppercase btnhome btnabout"
                                               style="text-decoration: none;" href="{{route('grand-talkshow')}}">selengkapnya</a>
                                            <a class="tnb ms-lg-4 mt-2 mb-4 text-uppercase btnhome btnregis"
                                               style="text-decoration: none;" href="{{route('register-talkshow')}}">daftar</a>
                                        </div>
                                        {{--                                        <h2 class="d-block d-lg-none fw-bold">Coming Soon</h2>--}}


                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide slide3">
                            <div class="container">
                                <div class="py-5 row ">
                                    <div class=" col-lg-6 col-12">
                                        <h2 class="hindbold">Ada acara apa saja di ICON 2021?</h2>
                                        <h2 class="tex pt-5 hindbold">E - Hall of IS</h2>
                                        <div class="mt-0">
                                            <p class="par">Pameran virtual karya-karya autentik mahasiswa dan alumni
                                                Sistem Informasi ITS di ranah nasional maupun internasional yang
                                                dilengkapi dengan quiz dan challenge interaktif.

                                            </p>
                                        </div>


                                        <div class="pt-5 flex-column flex-md-row d-flex justify-content-start">
                                            <a class="bnt mt-2 mb-4 text-uppercase btnhome btnabout"
                                               style="text-decoration: none;" href="{{route('e-hall.index')}}">selengkapnya</a>
                                            {{--                                            <h2 class="d-none d-lg-block fw-bold">Coming Soon</h2>--}}
                                        </div>
                                    </div>
                                    <div class="ptop pik col-lg-6 col-12">
                                        <img src="{{asset('img/icon/img/Frame 41 (2).png')}}" alt="">
                                        <h2 class="xet pt-5 hindbold">E - Hall of IS</h2>
                                        <div class="mt-0">
                                            <p class="rap">Pameran virtual karya-karya autentik mahasiswa dan alumni
                                                Sistem Informasi ITS di ranah nasional maupun internasional yang
                                                dilengkapi dengan quiz dan challenge interaktif.

                                            </p>
                                        </div>
                                        <div class="pt-5 d-grid gap-2 col-5 mx-auto justify-content-center">
                                            <a class="tnb mt-2 mb-4 text-uppercase btnhome btnabout"
                                               style="text-decoration: none;" href="{{route('e-hall.index')}}">selengkapnya</a>
                                        </div>
                                        {{--                                        <h2 class="d-block d-lg-none fw-bold">Coming Soon</h2>--}}


                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide slide4">
                            <div class="container">
                                <div class="py-5 row ">
                                    <div class=" col-lg-6 col-12">
                                        <h2 class="hindbold">Ada acara apa saja di ICON 2021?</h2>
                                        <h2 class="tex pt-5 hindbold">ICON Academy</h2>
                                        <div class="mt-0">
                                            <p class="par">Rangkaian pelatihan/workshop mengenai suatu keilmuan bidang
                                                teknologi dengan menghadirkan mentor/pengajar yang ahli dan
                                                berpengalaman di bidang keilmuan tersebut. Pada ICON Academy, ICON
                                                mengangkat dua topik umum, yaitu <span class="fw-bold">Data Science Academy </span>
                                                dan
                                                <span class="fw-bold">Startup Academy</span> .
                                            </p>
                                        </div>


                                        <div class="pt-5 flex-column flex-md-row d-flex justify-content-start">
                                            <div class="dropdown">
                                                <a class="bnt btn mt-2 mb-4 text-uppercase btnhome btnabout dropdown-toggle"
                                                   role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                   aria-expanded="false">
                                                    Selengkapnya <i class="lft fas fa-chevron-down"></i>
                                                </a>

                                                <ul class="dropdown-menu px-4 py-0" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="btnse dropdown-item mt-1"
                                                           href="{{route('data-science-landing.index')}}">Data
                                                            Science</a>
                                                    </li>
                                                    <li><a class="btnse dropdown-item"
                                                           href="{{route('startup-landing.index')}}">Startup</a></li>
                                                </ul>
                                            </div>
                                            <a type="button"
                                               class="bnt ms-lg-4 mt-2 mb-4 text-uppercase btnhome btnregis"
                                               style="text-decoration: none;" href="{{route('register')}}">daftar</a>
                                        </div>
                                    </div>
                                    <div class="ptop pik col-lg-6 col-12">
                                        <img src="{{asset('img/icon/img/Frame 108.png')}}" alt="">
                                        <h2 class="xet pt-5 hindbold">ICON Academy</h2>
                                        <div class="mt-0">
                                            <p class="rap">Rangkaian pelatihan/workshop mengenai suatu keilmuan bidang
                                                teknologi dengan menghadirkan mentor/pengajar yang ahli dan
                                                berpengalaman di bidang keilmuan tersebut. Pada ICON Academy, ICON
                                                mengangkat dua topik umum, yaitu <span class="fw-bold">Data Science Academy </span>
                                                dan
                                                <span class="fw-bold">Startup Academy</span> .

                                            </p>
                                        </div>
                                        <div class="pt-5 d-grid gap-2 col-5 mx-auto justify-content-center">
                                            <a class="tnb ms-lg-4 mt-2 mb-4 text-uppercase btnhome btnregis"
                                               style="text-decoration: none;" href="{{route('register')}}">daftar</a>
                                            <div class="dropdown">
                                                <a class="tnb btn mt-2 mb-4 text-uppercase btnhome btnabout dropdown-toggle "
                                                   role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                   aria-expanded="false">
                                                    Selengkapnya <i class="lft fas fa-chevron-down"></i>
                                                </a>

                                                <ul class="dropdown-menu px-4 py-0" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="btnse dropdown-item mt-1"
                                                           href="{{route('data-science-landing.index')}}">Data
                                                            Science</a>
                                                    </li>
                                                    <li><a class="btnse dropdown-item"
                                                           href="{{route('startup-landing.index')}}">Startup</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="selanjutnya" class="swiper-button-next"></div>
                    <div id="sebelumnya" class="swiper-button-prev"></div>

                </div>
            </section>
            <!--End of Event Section-->


            <!-- timeline section -->
            <!-- responsive width timeline -->
            <section id="timeline">
                <div class="container py-5" id="timeline-small">

                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <div class="tahapan">
                                <h1 class="mb-5 text-center">Timeline</h1>
                            </div>

                            <!-- Timeline -->
                            <ul class="timeline">
                                <li class="timeline-item rounded ml-3 p-4 shadow">
                                    <h2 class="h5 mb-0">ICON Academy <br> Data Science </h2><span><i
                                            class="fa fa-clock mr-1"></i> 9, 10, 16, 17 Okt</span>
                                </li>
                                <li class="timeline-item rounded ml-3 p-4 shadow">
                                    <h2 class="h5 mb-0">ICON Academy <br> Startup Academy </h2><span><i
                                            class="fa fa-clock mr-1"></i> 23, 24, 30, 31 Okt</span>

                                </li>
                                <li class="timeline-item rounded ml-3 p-4 shadow">
                                    <h2 class="h5 mb-0">E - Hall of IS </h2><span><i class="fa fa-clock mr-1"></i> 9 Okt - 7 Nov</span>

                                </li>
                                <li class="timeline-item rounded ml-3 p-4 shadow">
                                    <h2 class="h5 mb-0">Virtual Intern & Job Fair</h2><span><i
                                            class="fa fa-clock mr-1"></i> 31 Okt - 7 Nov</span>

                                </li>
                                <li class="timeline-item rounded ml-3 p-4 shadow">
                                    <h2 class="h5 mb-0">Grand Talkshow </h2><span><i class="fa fa-clock mr-1"></i> 7 Nov</span>
                                </li>
                            </ul><!-- End -->


                        </div>
                    </div>
                </div>


                <!-- desktop width timeline -->
                <div class="timeline text-center" id="timeline-horizontal">
                    <h1 id="mtog">Timeline</h1>
                    <div class="container-fluid">
                        <div class="row" id="circle-timeline">
                            <div class="col">
                                <div class="circle rocket">
                                    <div class="inside-circle"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="circle rocket">
                                    <div class="inside-circle"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="circle rocket">
                                    <div class="inside-circle"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="circle"></div>
                            </div>
                            <div class="col">
                                <div class="circle"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5>ICON Academy <br><span>Data Science<br>
                Academy</span></h5>
                                <p>9, 10, 16, 17 Okt</p>

                            </div>
                            <div class="col">
                                <h5>ICON Academy <br><span>Startup Academy<br>
                </span></h5>
                                <br>
                                <p>23, 24, 30, 31 Okt</p>
                            </div>
                            <div class="col">
                                <h5>E - Hall of IS </h5>
                                <br><br>
                                <p>9 Okt - 7 Nov</p>
                            </div>
                            <div class="col">
                                <h5>Virtual Intern & <br> Job Fair</h5>
                                <br>
                                <p>31 Okt - 7 Nov</p>
                            </div>
                            <div class="col">
                                <h5>Grand Talkshow</h5>
                                <br><br>
                                <p>7 Nov</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Ayo-daftar-vertical container-fluid mt-5">
                    <div class="row text-center py-5">
                        <div class="col-12 my-5">
                            <h4>Pameran E-Hall of IS dan Pendaftaran Grand Talkshow Telah Dibuka</h4>
                        </div>
                        <div>
                            <a class="tnb  text-uppercase btnhome btnregis"
                               style="text-decoration: none;" href="{{route('register')}}">daftar</a>
                        </div>
                    </div>
                </div>

            </section>
            <!--End of Timeline Section-->


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
                        <div class="col-md-3 text-center pt-5">
                            <img src="{{asset('img/speakers/ds/fitria-nur-aida.png')}}" alt="Fitria Nur Aida"
                                 class="img-fluid"
                                 style="max-width: 280px;"
                                 loading="lazy"/>
                            <h2 class="text-center mt-4 speaker-name">Fitria <br/>Nur Aida</h2>
                            <h5>Business Intelligence Analyst at Aplikasi SUPER</h5>
                        </div>
                        <div class="col-md-3 text-center pt-5">
                            <img src="{{asset('img/speakers/ds/radical-rakhman-wahid.png')}}"
                                 alt="Radical Rakhman Wahid"
                                 class="img-fluid"
                                 style="max-width: 280px;"
                                 loading="lazy"/>
                            <h2 class="text-center mt-4 speaker-name">Radical <br/>Rakhman Wahid</h2>
                            <h5>Data Scientist at Widya Analytic</h5>
                        </div>
                        <div class="col-md-3 text-center pt-5">
                            <img src="{{asset('img/speakers/startup/ignasius-seto-lareno.png')}}"
                                 alt="Ignasius Seto Lareno"
                                 class="img-fluid"
                                 style="max-width: 280px;"
                                 loading="lazy"/>
                            <h2 class="text-center mt-4 speaker-name">Ignasius <br/>Seto Lareno</h2>
                            <h5>COO of Binar Academy</h5>
                        </div>
                        <div class="col-md-3 text-center pt-5">
                            <img src="{{asset('img/speakers/startup/vinda-hardikurnia.png')}}" alt="Vinda Hardikurnia"
                                 class="img-fluid"
                                 style="max-width: 280px;"
                                 loading="lazy"/>
                            <h2 class="text-center mt-4 speaker-name">Vinda <br/>Hardikurnia</h2>
                            <h5>Instructional Designer of Binar Academy</h5>
                        </div>
                        <div class="col-md-3 text-center pt-5">
                            <img src="{{asset('img/speakers/startup/faiz-muhammad.png')}}" alt="Faiz Muhammad"
                                 class="img-fluid"
                                 style="max-width: 280px;"
                                 loading="lazy"/>
                            <h2 class="text-center mt-4 speaker-name">Faiz <br/>Muhammad</h2>
                            <h5>Product Manager of Binar Academy</h5>
                        </div>
                        <div class="col-md-3 text-center pt-5">
                            <img src="{{asset('img/speakers/startup/cynthia-cecilia.png')}}" alt="Cynthia Cecilia"
                                 class="img-fluid"
                                 style="max-width: 280px;"
                                 loading="lazy"/>
                            <h2 class="text-center mt-4 speaker-name">Cynthia <br/>Cecilia</h2>
                            <h5>Founder & CEO of Jobhun</h5>
                        </div>
                        <div class="col-md-3 text-center pt-5">
                            <img src="{{asset('img/speakers/startup/kevin-goly.png')}}" alt="Kevin Goly"
                                 class="img-fluid"
                                 style="max-width: 280px;"
                                 loading="lazy"/>
                            <h2 class="text-center mt-4 speaker-name">Kevin <br/>Goly</h2>
                            <h5>CEO & Co-founder of Looyal</h5>
                        </div>
                        <div class="col-md-3 text-center pt-5">
                            <img src="{{asset('img/speakers/startup/raditro-suryo.png')}}" alt="Radityo Suryo H."
                                 class="img-fluid"
                                 style="max-width: 280px;"
                                 loading="lazy"/>
                            <h2 class="text-center mt-4 speaker-name">Radityo <br/>Suryo H.</h2>
                            <h5>CMO of Satu Atap Coworkshare</h5>
                        </div>
                    </div>
                </div>
            </section>
            <!--End of Speakers section-->


            <!--Virtual Intern Job Section-->
            <div class="swiper-container intern-swiper">
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


            <!-- Testimonial  Swiper Section -->
            <div class="swiper-bottom">
                <div class="swiper-container swiper-2" id="testimonialSwipper">
                    <h2 class="container title text-center">Apa Kata Mereka Tentang ICON</h2>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide1-2">
                            <div class="content d-flex" style="min-height: 60vh;">
                                <div class="container-fluid d-md-flex">
                                    <div class="row">
                                        <div class="col-md-4 img-mithsal rounded-right">
                                        </div>
                                        <div class="tup col-md-8 desc">
                                            <h3>“Hal yang paling berkesan dari ICON adalah saat disuruh untuk <span>membuat prototyping</span>
                                                tampilan platform yang kita buat, karena itu adalah kali pertamaku untuk
                                                membuat prototype dan sekarang malah menjadi hobi baru. Dari ICON aku
                                                bisa dapetin pengalaman yang <span>sangat insightful.</span> ”
                                            </h3>
                                            <h4>Hanif Mithsal Mahatta<br><span
                                                    style="color: rgba(255, 255, 255, 0.65);">PESERTA ICON 2020</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content d-flex">
                                <div class="container-fluid d-md-flex">
                                    <div class="row">
                                        <div class="col-md-4 img-raynaldi rounded-right">
                                        </div>
                                        <div class="tup col-md-8 desc">
                                            <h3>“ICON tahun lalu fokusnya soal <span>pitching</span>, bagaimana kita
                                                mempresentasikan ide bisnis dengan baik dan menarik. Jurinya juga keren
                                                semua, jadi semakin banyak insight yang bisa didapetin. Dari ICON aku
                                                juga <span>direkrut</span> oleh perusahaan sponsor mereka, jadinya bisa
                                                dapet relasi.”</h3>
                                            <h4>Raynaldi Anggiat Samuel Siahaan<br><span
                                                    style="color: rgba(255, 255, 255, 0.65);
                                      ">PESERTA ICON 2020</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content d-flex">
                                <div class="container-fluid d-md-flex">
                                    <div class="row">
                                        <div class="col-md-4 img-syifa rounded-right">
                                        </div>
                                        <div class="tup col-md-8 desc">
                                            <h3>“Materi di ICON sangat <span>insightful</span> dan
                                                <span>berbobot,</span> dibawakan oleh <span>ahli</span> dari berbagai
                                                background of expertise yang benar-benar paham trend dan perkembangan
                                                dunia teknologi saat ini. Disini kita diberi kesempatan untuk <span>mengembangkan ide</span>
                                                startup kita menjadi gagasan bisnis yang matang dan terukur potensinya.”
                                            </h3>
                                            <h4>Syifa Alina Amri<br><span
                                                    style="color: rgba(255, 255, 255, 0.65);
                                    ">PESERTA ICON 2020</span></h4>
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
            <!--End of Testimonial Section-->

            <!-- Start of Sponsor -->
            <livewire:components.sponsor/>
            <!-- End of Sponsor -->
            <!--Form section start-->

            <div class="wrapper" id="feedback">
                <h4 class="mx-2" style="margin-bottom: 0;">Apa yang ingin kamu sampaikan</h4>
                <div class="field mt-4">
                    @if($message)
                        <p class="fw-bold mb-2" style="color:{{$messageColor}}">{{$message}}</p>
                    @endif
                    <input type="text" placeholder="Tulis di sini" wire:model.defer="feedback" maxlength="300">
                    <button wire:click="addFeedback" type="button" class="btn btn-primary btn-sm btnhome btnsent">
                        Kirim
                    </button>

                </div>

            </div>
        </main>
    </div>
    <!--End of Form section-->


    <!-- whatsapp section -->
@include('livewire.pages.landing.icon.whatsapp')
<!-- End of WA section -->
</div>

@push('css')
    <link rel="stylesheet" href="{{asset('/css/icon/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/icon/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('/css/icon/style.css?ver_date='.date('YmdHis',filemtime('css/icon/style.css')))}}"/>
@endpush

@push('js')
    <script src="{{asset('/js/icon/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/icon/custom.js')}}"></script>
@endpush


