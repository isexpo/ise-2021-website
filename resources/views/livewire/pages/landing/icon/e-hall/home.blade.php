@section('title','E-Hall of IS')
@section('desc','Pameran e–Hall of IS diselenggarakan secara digital, menggunakan platform website ISE 2021, dan disajikan dalam bentuk video profil, artikel, dan permainan berupa quiz dan challenge.')
<div>
    <div class="bg">
        <!--navbar section-->
        <livewire:components.e-hall.navbar/>


        <nav class="navbar navbarsl navbar-custom fixed-top navbar-expand-lg container-fluid" id="navbar2">

            <ul class="nav ms-xl-3 ml-5">
                <li class="nav-item">
                    <a class="nav-link" href="#intro">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#virtual-play">Virtual Play</a>
                </li>
            </ul>
            @if(Auth::check()&&Auth::user()->userType=='member')
                <div class="me-lg-5 nav-link my-1" id="daftar">{{Auth::user()->userable->hois_point}} Points</div>
            @endif
        </nav>


        <!-- header student level section start -->
        <section class="header d-flex flex-column justify-content-center" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 text-center text-lg-end">
                        <img src="{{asset('/img/startup-landing/E-hall logo.png')}}" alt="" id="header-img"
                             class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-8 text-left ps-5 mt-5 mt-md-0">
                        <img src="{{asset('/img/startup-landing/icon.png')}}" id="logo-img" alt="">
                        <h1 style="text-transform:uppercase;">e-hall of is</h1>
                        <p>Pameran e–Hall of IS diselenggarakan secara digital, menggunakan platform website ISE 2021,
                            dan disajikan dalam bentuk video profil, artikel, dan permainan berupa quiz dan challenge.
                        </p>
                        <a class="ps-0" href="#intro" id="lebih-lanjut" class="btn">Lebih lanjut <img
                                src="{{asset('/img/ds-landing/chevron-right.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </section>


        <section id="intro">
            <div class="swiper mx-5 px-5">
                <div class="swiper-container  hoisSwipper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">

                                <img src="{{asset('/img/icon/e-hall/swiper/1.png')}}" alt="" class="img-fluid">

                        </div>
                        <div class="swiper-slide">

                                <img src="{{asset('/img/icon/e-hall/swiper/2.png')}}" alt="" class="img-fluid">

                        </div>
                        <div class="swiper-slide">

                                <img src="{{asset('/img/icon/e-hall/swiper/3.png')}}" alt="" class="img-fluid">

                        </div>
                        <div class="swiper-slide">

                                <img src="{{asset('/img/icon/e-hall/swiper/4.png')}}" alt="" class="img-fluid">

                        </div>
                        <div class="swiper-slide">

                                <img src="{{asset('/img/icon/e-hall/swiper/5.png')}}" alt="" class="img-fluid">

                        </div>

                    </div>


                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>
            <p class="container pt-5 mt-5">
                E-Hall of IS merupakan zona berisikan pameran
                virtual karya-karya autentik mahasiswa dan alumni Sistem Informasi Institut
                Teknologi
                Sepuluh Nopember (ITS) dengan reputasi gemilang, baik ranah nasional maupun
                internasional.
                Zona ini memiliki dua tujuan utama. Pertama, memperkenalkan karya Sistem
                Informasi ITS ke khalayak umum.
                Kedua, mengedukasi dan menyebarkan awareness seputar teknologi.

            </p>
        </section>


        <section id="virtual-play" class="pt-5">
            <div class="bottom-text text-center mt-5 ">
                <div class="desc">
                    <h2>Ayo mainkan beberapa quiz dan challenge yang ada dan dapatkan
                        <br>
                        hadiah menarik
                    </h2>
                    <a href="{{route('virtual-play.index')}}" class="btn">PLAY</a>
                </div>
            </div>
        </section>


        <!-- Card Section -->
        <section id="adastartup">
            <div class="mt-5  container">
                <div class="row text-center">
                    <h2 class="mb-5">Ada Startup apa aja sih?</h2>
                    <div class="my-3 col-12 col-xl-6 ">
                        <div class="card py-5" style="min-height: 80vh; height: 100%;">
                            <div class="cardvid text-center">
                                <h2 class="mb-4">Energeek</h2>
                                <iframe src="https://www.youtube.com/embed/4KOMVoMpI7A" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <p class="card-text">Energeek The E – Government Solution merupakan
                                    perusahaan konsultan dan jasa teknologi informasi, dengan tagline Innovation Is
                                    Our DNA.</p>
                                <a href="{{route('article.energeek')}}" class="btn btn-primary">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-12 col-xl-6">
                        <div class="card py-5 " style="min-height: 80vh; height: 100%;">
                            <div class="cardvid text-center">
                                <h2 class="mb-4">GoSocial</h2>
                                <iframe src="https://www.youtube.com/embed/lzzzADNtIzk" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <p class="card-text pb-4">GoSocial menawarkan pengalaman baru dalam melakukan
                                    Outsourcing
                                    Digital
                                    Marketing khususnya media sosial dengan menggunakan sistem yang serba
                                    otomatis.</p>
                                <a href="{{route('article.go-social')}}" class="btn btn-primary">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-12 col-xl-6">
                        <div class="card py-5 " style="min-height: 80vh; height: 100%;">
                            <div class="cardvid text-center">
                                <h2 class="mb-4">Digiflux</h2>
                                <iframe src="https://www.youtube.com/embed/WjwYP_ylqb0" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <p class="card-text pb-4">Digiflux adalah Startup yang menyediakan layanan
                                    influencer marketing untuk Brand yang
                                    ingin mempromosikan produknya melalui influencer dengan platform yang terintegrasi
                                    sehingga seluruh proses pemasaran melalui influencer marketing menjadi lebih
                                    Efektif,
                                    efesien
                                    dan berdampak.</p>
                                <a href="{{route('article.digiflux')}}" class="btn btn-primary">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-12 col-xl-6">
                        <div class="card py-5 " style="min-height: 80vh; height: 100%;">
                            <div class="cardvid text-center">
                                <h2 class="mb-4">Alinamed</h2>
                                <iframe src="https://www.youtube.com/embed/PopaIHiuH0A" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <p class="card-text pb-4">Alinamed merupakan startup yang bergerak di bidang
                                    layanan kesehatan dibawah nama perusahaan PT Alina Medika Indonesia.</p>
                                <a href="{{route('article.alinamed')}}" class="btn btn-primary">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-12 col-xl-6">
                        <div class="card py-5 " style="min-height: 80vh; height: 100%;">
                            <div class="cardvid text-center">
                                <h2 class="mb-4">Stratek</h2>
                                <iframe src="https://www.youtube.com/embed/O1M0s_TY4Zk" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <p class="card-text pb-4">Stratek merupakan startup jasa berbasis IT, yang
                                    mengedepankan aspek kepuasan pelanggan, kerja tepat dan berintegritas. Berfokus pada
                                    Pengembangan Software, ERP, Pengembangan Game, dan Digital Marketing.</p>
                                <a href="{{route('article.stratek')}}" class="btn btn-primary">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>

                    <div class="my-3 col-12 col-xl-6">
                        <div class="card py-5 " style="min-height: 80vh; height: 100%;">
                            <div class="cardvid text-center">
                                <h2 class="mb-4">Kreaktif</h2>
                                <iframe src="https://www.youtube.com/embed/YiYwsebqVco" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <p class="card-text pb-4">Kreaktif merupakan sebuah perusahaan Software
                                    Development yang memberikan solusi lengkap dan terintegrasi dalam pengembangan
                                    perangkat
                                    lunak untuk perusahaan, usaha kecil, lembaga pendidikan, lembaga pemerintah, dan
                                    bahkan
                                    organisasi nirlaba.</p>
                                <a href="{{route('article.kreaktif')}}" class="btn btn-primary">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>

                    <div class="my-3 col-12 col-xl-6">
                        <div class="card py-5 " style="min-height: 80vh; height: 100%;">
                            <div class="cardvid text-center">
                                <h2 class="mb-4">Drafta</h2>
                                <iframe src="https://www.youtube.com/embed/8l6OdZgcVok" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <p class="card-text pb-4">Drafta merupakan sebuah startup yang berkonsep A
                                    Student-Centric Digital Ecosystem yang mempertemukan mahasiswa dengan
                                    peluang-peluang
                                    pengembangan diri impiannya dan memberikan penyaluran tenaga kerja magang yang tepat
                                    sasaran
                                    bagi perusahaan.</p>
                                <a href="{{route('article.drafta')}}" class="btn btn-primary">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>

                    <div class="my-3 col-12 col-xl-6">
                        <div class="card py-5 " style="min-height: 80vh; height: 100%;">
                            <div class="cardvid text-center">
                                <h2 class="mb-4">IlmuDewantara</h2>
                                <iframe src="https://www.youtube.com/embed/2_XSm1kK2eg" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <p class="card-text pb-4">IlmuDewantara menawarkan solusi berupa platform
                                    paket lengkap yang berisi modul yang dapat membantu para mahasiswa untuk mendalami
                                    kemampuan
                                    nonakademis secara spesifik.</p>
                                <a href="{{route('article.ilmu-dewantara')}}" class="btn btn-primary">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- whatsapp section -->
        @include('livewire.pages.landing.icon.whatsapp')
    </div>
</div>
<!-- End of WA section -->

</div>

@push('css')

    <link rel="stylesheet" href="{{asset('/css/startup-landing/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/icon/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/startup-landing/navbar.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('/css/e-hall/style.css?ver_date='.date('YmdHis',filemtime('css/e-hall/style.css')))}}"/>


@endpush

@push('js')
    <script src="{{asset('/js/icon/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/icon/custom.js')}}"></script>
    <script>
        new Swiper(".hoisSwipper", {
            slidesPerView: 1,
            centeredSlides: true,
            spaceBetween:10,
            autoplay: {
              delay: 3000,
              disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 320px
               480: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },

                800: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },

            }
        });
    </script>
    @endpush


    </div>
