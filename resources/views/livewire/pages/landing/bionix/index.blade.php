@section('title','BIONIX 2021')
@section('desc','Business and IT Olympiad adalah bagian dari serangkaian acara ISE! dengan konsep kompetisi tingkat nasional yang ditujukan bagi pelajar SMA/SMK dengan menggabungkan antara bisnis dan teknologi informasi. Kompetisi terbagi menjadi 4 tahap yaitu, penyisihan 1, penyisihan 2, semifinal, dan final. Adapun penyisihan dilakukan serentak secara online di seluruh Indonesia')
<div>
    <!-- swiper section start -->
    <div class="swiper-container swiper-event mt-5 pt-5">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide1">
                <div class="about" style="min-height: 100vh">
                    <div class="row align-items-start">
                        <div class="col-4"><img src="{{asset('/img/landing/line-bionix.svg')}}" class="img-fluid"
                                                alt=""></div>
                    </div>
                    <h1>BUSINESS AND IT OLYMPIAD<br>
                        ON INFORMATION SYSTEMS EXPO</h1>
                    <p class="hindreg">Business and IT Olympiad on Information Systems Expo, olimpiade bisnis dan IT
                        terbesar di Indonesia<br> untuk tingkat pelajar SMA/SMK sederajat dan mahasiswa.</p>
                    {{--                    <a href="#" class="btn hindsbold">KENALI LEBIH LANJUT</a>--}}
                </div>
            </div>
        </div>
    </div>


    <!-- kategori lomba section start -->
    <div class="kategori-lomba container-fluid text-center">
        <h1>Kategori Lomba</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <div class="bionix-sl mx-md-5">
                    <h2>BIONIX Student Level</h2>
                    <p>Olimpiade bisnis dan IT terbesar<br>di Indonesia untuk tingkat pelajar<br>SMA/SMK sederajat.</p>
                    <a href="{{route('register')}}" class="btn daftar">Daftar</a>
                    <a href="{{route('bionix-landing',['type'=>'student'])}}" class="btn selengkapnya">Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="bionix-cl mx-md-5">
                    <h2>BIONIX College Level</h2>
                    <p>Kompetisi studi kasus bisnis<br>nasional untuk tingkat mahasiswa<br>di Indonesia.</p>
                    <a href="{{route('register')}}" class="btn daftar">Daftar</a>
                    <a href="{{route('bionix-landing',['type'=>'college'])}}" class="btn selengkapnya">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- total hadiah section start -->
    <div class="total-hadiah text-center" id="total-hadiah-sl">
        <h2>Total Hadiah</h2>
        <div class="button-hadiah">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active px-5 py-3 m-3" id="hadiahsl-tab" data-bs-toggle="tab"
                            data-bs-target="#hadiahsl" type="button" role="tab" aria-controls="hadiahsl"
                            aria-selected="true"><img src="{{asset('/img/bionix/medali-sl.svg')}}" alt=""> BIONIX
                        Student Level
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-5 py-3 m-3" id="hadiahcl-tab" data-bs-toggle="tab"
                            data-bs-target="#hadiahcl"
                            type="button" role="tab" aria-controls="hadiahcl" aria-selected="false"><img
                            src="{{asset('/img/bionix/medali-cl.svg')}}" alt=""> BIONIX College Level
                    </button>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="hadiahsl" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12 justify-content-end">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Juara 3</h4>
                                    <img src="{{asset('/img/bionix/juara3-bionix-sl.svg')}}" class="img-fluid" alt="">
                                    <p>Rp 2.000.000<br><span>+ Sertifikat</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 justify-content-center">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Juara 1</h4>
                                    <img src="{{asset('/img/bionix/juara1-bionix-sl.svg')}}" class="img-fluid" alt="">
                                    <p>Freepass SNMPTN<br>Sistem Informasi<br>ITS 2022<br><span>+ Rp 5.000.000<br>Sertifikat</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 justify-content-start">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Juara 2</h4>
                                    <img src="{{asset('/img/bionix/juara2-bionix-sl.svg')}}" class="img-fluid" alt="">
                                    <p>Rp 3.000.000<br><span>+ Sertifikat</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="hadiahcl" role="tabpanel">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-4 col-12 justify-content-end">
                            <div class="card juara3">
                                <div class="card-body">
                                    <h4>Juara 3</h4>
                                    <img src="{{asset('/img/bionix/juara3-bionix-sl.svg')}}" class="img-fluid" alt="">
                                    <p>Rp 1.000.000<br><span>+ Sertifikat</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 justify-content-center">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Juara 1</h4>
                                    <img src="{{asset('/img/bionix/juara1-bionix-sl.svg')}}" class="img-fluid" alt="">
                                    <p>Rp 3.000.000<br><span>+ Sertifikat</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 justify-content-start">
                            <div class="card juara2">
                                <div class="card-body">
                                    <h4>Juara 2</h4>
                                    <img src="{{asset('/img/bionix/juara2-bionix-sl.svg')}}" class="img-fluid" alt="">
                                    <p>Rp 2.000.000<br><span>+ Sertifikat</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <h2 style="font-family: 'Hind Bold'">Bisa dapat <span>Free Pass SNMPTN</span>,
                                        <span>banyak relasi</span>, dan <span>wawasan baru</span>!
                                    </h2>
                                    <p>“Dari BIONIX, wawasanku lebih terbuka tentang sistem informasi dan dapat banyak
                                        wawasan baru yang sebelumnya gak aku dapetin di SMA. Selain itu, di BIONIX aku
                                        juga
                                        dapet banyak temen baru yang bahkan masih keep contact sampai sekarang sehingga
                                        dari
                                        sini aku juga bisa memperluas relasi. Last but not least, aku juga dapat Free
                                        Pass
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
                                    <h2 style="font-family: 'Hind Bold'">Dapat ilmu <span>pemrograman</span>, dan <span>bisnis</span>!
                                    </h2>
                                    <p>“Di BIONIX aku bisa dapet banyak ilmu baru, belajar IT dan pemrograman hingga
                                        caranya
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

    <!-- tunggu apa lagi section -->
    <div class="bottom-text text-center">
        <div class="desc">
            <h2>Tunggu Apa Lagi? Daftar BIONIX Sekarang!</h2>
            <a href="{{route('register')}}" class="btn">Buat Akun ISE!</a>
        </div>
    </div>
</div>

@push('js')
    <script src="{{asset('/js/landing/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/bionix/custom.js')}}"></script>
    @if(!config('app.debug'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QZ9ZPEGSXH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-QZ9ZPEGSXH');
    </script>
    @endif
@endpush
