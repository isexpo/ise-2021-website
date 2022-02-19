@section('title','Data Science')
@section('desc','Data Science Academy merupakan rangkaian workshop mengenai keilmuan bidang data science dengan menghadirkan mentor-mentor ahli di bidang tersebut. Hadir sebagai sarana transfer of knowledge keilmuan data science kepada peserta dan menjadi katalis karir peserta sebagai seorang data scientist. Data Science Academy hadir untuk menjadi langkah awal atau katalis karier peserta sebagai seorang data scientist.')


{{-- TODO (Ridho) Landing Page Data Science

URL : /icon/academy/data-science

--}}
{{-- Do your work, then step back. --}}

<div>
    <div class="bg">
        <div class="scroll-up-btn">
            <img src="{{asset('/img/ds-landing/chevron-up.svg')}}" alt="go up!" title="go up!">
        </div>

        <!--navbar section-->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="{{route('ise-landing')}}"><img
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
                                    data-bs-toggle="dropdown" aria-expanded="false" style="padding: .5rem 1rem">
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
                                        data-bs-toggle="dropdown" aria-expanded="false" style="padding: .5rem 1rem">
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


        <nav class="navbar navbar-custom fixed-top navbar-expand-lg container-fluid" id="navbar2">

            <ul class="nav ml-5">
                <li class="nav-item">
                    <a class="nav-link" href="#intro">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#rangkaian-materi">Materi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#speakers">Speakers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#timeline">Timeline</a>
                </li>
            </ul>
            <a href="{{route('register')}}" class="nav-link my-1" id="daftar">Daftar</a>
            <a href="https://ise-its.com/GuidebookDataScience" class="nav-link my-1" id="guidebook" target="_blank"><i
                    class="fas fa-download"></i> Guidebook</a>
        </nav>


        <!-- header student level section start -->
        <section class="header d-flex flex-column justify-content-center" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 text-center text-lg-end">
                        <img src="{{asset('/img/ds-landing/header-img.png')}}" alt="" id="header-img" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-8 text-left ps-5 mt-5 mt-md-0">
                        <img src="{{asset('/img/ds-landing/line-header-icon.svg')}}" alt="" style="width: 5vw;">
                        <img src="{{asset('/img/ds-landing/icon.png')}}" alt="" style="width: 10em;">
                        <h1 style="text-transform:uppercase;">data science<br> Academy</h1>
                        <p>Data Science Academy hadir untuk menjadi langkah awal atau katalis karier peserta sebagai
                            seorang <i> data scientist</i>.
                        </p>
                        <a href="#intro" id="lebih-lanjut" class="btn">Lebih lanjut <img
                                src="{{asset('/img/ds-landing/chevron-right.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- intro section start -->
        <section class="intro" id="intro">
            <div class="container">
                <div class="row mx-2">
                    <p class="intro-text text-start text-md-center fs-4 lh-base" style="color: whitesmoke;">
                        Data Science Academy merupakan rangkaian workshop mengenai keilmuan bidang data science dengan
                        menghadirkan mentor-mentor ahli di bidang tersebut. Hadir sebagai sarana transfer of knowledge
                        keilmuan data science kepada peserta dan menjadi katalis karir peserta sebagai seorang data
                        scientist.
                    </p>
                    <p class="intro-text text-start text-md-center fs-4 lh-base my-5" style="color: whitesmoke;">Data
                        Science Academy berkolaborasi dengan :</p>
                </div>
                <div class="row justify-content-center" style="margin-bottom: 10vw;">
                    <div class="col text-center my-2">
                        <a href="https://datascience.or.id/" target="_blank">
                            <img src="{{asset('/img/ds-landing/dsi.png')}}" alt="Data Science Indonesia"
                                 style="width: 200px;"
                                 loading="lazy">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- rangkaian materi section -->
        <section class="rangkaian-materi" id="rangkaian-materi">
            <div class="container">
                <div class="col-lg-6 mx-auto">
                    <div class="row justify-content-center">
                        <h1 class="text-center" style="color: whitesmoke;">Rangkaian materi</h1>
                        <ul class="timeline">
                            <li class="timeline-item rounded ml-3 p-4 shadow">
                                <h2 class="my-1">Hari 1</h2>
                                <ul>
                                    <li>Overview Python/R</li>
                                    <li>Data Analytics</li>
                                </ul>
                            </li>
                            <li class="timeline-item rounded ml-3 p-4 shadow">
                                <h2 class="my-1">Hari 2</h2>
                                <ul>
                                    <li>Data Preprocessing</li>
                                    <li>Data Visualization</li>
                                </ul>
                            </li>
                            <li class="timeline-item rounded ml-3 p-4 shadow">
                                <h2 class="my-1">Hari 3</h2>
                                <ul>
                                    <li>Machine Learning</li>
                                </ul>
                            </li>
                            <li class="timeline-item rounded ml-3 p-4 shadow">
                                <h2 class="my-1">Hari 4</h2>
                                <ul>
                                    <li>Aplikasi Machine Learning (Study Case)</li>
                                </ul>
                            </li>
                        </ul><!-- End -->
                    </div>
                </div>
            </div>
        </section>

        <!-- speakers section start -->
        <section class="speakers" id="speakers">
            <div class="container">
                <h1 class="hindbold text-center" style="color: whitesmoke;">Speakers</h1>
                <div class="row mx-auto justify-content-center">

                    <div class="col-md-3 text-center pt-5">
                        <img src="{{asset('img/speakers/ds/fitria-nur-aida.png')}}" alt="Fitria Nur Aida"
                             class="img-fluid"
                             style="max-width: 280px;"
                             loading="lazy"/>
                        <h2 class="text-center mt-4 speaker-name">Fitria <br/>Nur Aida</h2>
                        <h5 class="text-white">Business Intelligence Analyst at Aplikasi SUPER</h5>
                    </div>
                    <div class="col-md-3 text-center pt-5">
                        <img src="{{asset('img/speakers/ds/radical-rakhman-wahid.png')}}"
                             alt="Radical Rakhman Wahid"
                             class="img-fluid"
                             style="max-width: 280px;"
                             loading="lazy"/>
                        <h2 class="text-center mt-4 speaker-name">Radical <br/>Rakhman Wahid</h2>
                        <h5 class="text-white">Data Scientist at Widya Analytic</h5>
                    </div>

                </div>
            </div>
        </section>

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
                                <h2 class="h5 mb-0">Day 1 </h2><span>Overview<br>
                              Data Analytics</span>
                                <p>9 Okt 2021</p>
                            </li>
                            <li class="timeline-item rounded ml-3 p-4 shadow">
                                <h2 class="h5 mb-0">Day 2 </h2><span>Data Preprocessing<br>
                              Data Visualization</span>
                                <p>10 Okt 2021</p>

                            </li>
                            <li class="timeline-item rounded ml-3 p-4 shadow">
                                <h2 class="h5 mb-0">Day 3 </h2><span>Machine Learning</span>
                                <p>16 Okt 2021</p>
                            </li>
                            <li class="timeline-item rounded ml-3 p-4 shadow">
                                <h2 class="h5 mb-0">Day 4 </h2><span>Aplikasi Machine<br>
                              Learning</span>
                                <p>17 Okt 2021</p>

                            </li>
                        </ul><!-- End -->

                    </div>
                </div>
            </div>


            <!-- desktop width timeline -->
            <div class="timeline text-center" id="timeline-horizontal">
                <h1>Timeline</h1>
                <div class="container-fluid">
                    <div class="row" id="circle-timeline">
                        <div class="col">
                            <div class="circle" id="rocket">
                                <div id="inside-circle"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="circle"></div>
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
                            <h5>Day 1 <br><span>Overview<br>
                Data Analytics</span></h5>
                            <p>9 Okt 2021</p>
                        </div>
                        <div class="col">
                            <h5>Day 2 <br><span>Data Preprocessing<br>
                Data Visualization</span></h5>
                            <p>10 Okt 2021</p>
                        </div>
                        <div class="col">
                            <h5>Day 3 <br><span>Machine Learning</span></h5>
                            <p style="margin-top: 42px;">16 Okt 2021</p>
                        </div>
                        <div class="col">
                            <h5>Day 4 <br><span>Aplikasi Machine<br>
                Learning</span></h5>
                            <p>17 Okt 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- tunggu apa lagi section -->
        <div class="bottom-text text-center">
            <div class="desc">
                <h2>Inisiasi awal karir data scientist mu, <br/>Dengan Bergabung di ICON Data Science Academy Sekarang!
                </h2>
                <a href="{{route('register')}}" class="btn">Daftar</a>
            </div>
        </div>


        <!-- FAQ section -->
        <div class="faq text-center">
            <h1>FAQ</h1>
            <div class="container">
                <div class="row">
                    <div class="accordion" id="accordionFaq">
                        <div class="accordion-item show" id="AccordionItemOne">
                            <h2 class="accordion-header" id="persyaratan-sl">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa itu ICON Academy?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>
                                        ICON Academy adalah salah satu sub-event ICON pada Information Systems Expo!
                                        2021 yang merupakan acara edukasi berbentuk workshop terhadap beberapa ilmu di
                                        bidang IT untuk mahasiswa D3/D4/S1/sederajat di Indonesia. Pada tahun ini, ICON
                                        Academy terdiri dari Data Science Academy dan Startup Academy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="fasilitas-sl">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Kapan acara berlangsung?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Data Science Academy akan berlangsung selama 2 minggu, pada 9-10 Oktober 2021 dan
                                        pada 16-17 Oktober 2021.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" id="AccordionItemTwo">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                    Bagaimana alur pendaftaran ICON Academy?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>
                                        Pendaftaran dapat dilakukan dengan membuat akun pada <a
                                            href="https://icon.ise-its.com" target="_blank">https://icon.ise-its.com</a>
                                        Khusus untuk Startup Academy, peserta hanya perlu membuat 1 akun atas nama Ketua
                                        Tim. Langkah-langkah pendaftaran lebih lanjut dapat dilihat di dokumen Guidebook
                                        pada bagian Tata Cara Pendaftaran. Setelah berhasil mendaftar, tunggu hasil
                                        seleksi. Peserta yang lolos seleksi selanjutnya dapat mengikuti rangkaian ICON
                                        Academy. Kuota untuk Data Science Academy adalah <b>35 orang</b>.
                                        Seleksi peserta Data Science Academy didasarkan pada kecocokan dengan target
                                        peserta Data Science Academy.
                                        Keputusan panitia tidak dapat diganggu gugat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                                    Apa saja syarat peserta ICON Academy?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Peserta adalah mahasiswa aktif di tingkat D3/D4/S1/sederajat dibuktikan dengan
                                        Kartu Tanda Mahasiswa. Jika hilang atau belum memiliki, peserta diperbolehkan
                                        untuk menggantinya dengan bukti lain, yaitu Surat Keterangan Mahasiswa Aktif
                                        atau Transkrip Akademik terbaru. Peserta Data Science Academy adalah perorangan.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                                    Berapa biaya pendaftaran ICON Academy?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>ICON Academy ini dapat diikuti sepenuhnya secara gratis dan tanpa biaya apapun.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                                    Apa saja yang didapatkan dari ICON Academy?

                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Pada Data Science Academy, peserta akan mendapatkan materi dan skill mengenai
                                        ilmu dasar dan penerapan data science pada kasus nyata serta sertifikat sebagai
                                        bukti partisipasi peserta.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <livewire:components.sponsor/>
        </div>
        <!-- whatsapp section -->
        @include('livewire.pages.landing.icon.whatsapp')
    </div>
</div>

@push('css')
    <link rel="stylesheet" href="{{asset('/css/ds-landing/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('/css/icon/style.css?ver_date='.date('YmdHis',filemtime('css/icon/style.css')))}}"/>

    <link rel="stylesheet"
          href="{{asset('/css/ds-landing/css/style.css?ver_date='.date('YmdHis',filemtime('css/ds-landing/css/style.css')))}}"/>
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
    <script src="{{asset('/js/ds-landing/custom.js')}}"></script>
@endpush

