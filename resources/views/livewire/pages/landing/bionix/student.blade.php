@section('title','BIONIX Student Level 2021')
@section('desc','Business and IT Olympiad adalah bagian dari serangkaian acara ISE! dengan konsep kompetisi tingkat nasional yang ditujukan bagi pelajar SMA/SMK dengan menggabungkan antara bisnis dan teknologi informasi. Kompetisi terbagi menjadi 4 tahap yaitu, penyisihan regional, penyisihan nasional, semifinal, dan final. Adapun penyisihan dilakukan serentak secara online di seluruh Indonesia')
<div>
    <nav class="navbar navbarsl navbar-custom fixed-top navbar-expand-lg container-fluid" id="navbar2">
        <ul class="nav ml-5">
            <li class="nav-item">
                <a class="nav-link" href="#tahapan-sl">Tahapan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#total-hadiah-sl">Hadiah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#timeline-sl">Timeline</a>
            </li>
        </ul>
        <a href="{{route('register')}}" class="nav-link" id="daftar">Daftar</a>
        <a href="https://ise-its.com/panduan-student" class="nav-link" id="guidebook" target="_blank"><img src="{{asset('/img/bionix/DownloadSimple.svg')}}" alt="">
            Guidebook</a>
    </nav>


    <!-- header student level section start -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-end d-none d-md-block">
                    <img src="{{asset('/img/bionix/medali-sl-putih.svg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 col-12 px-3 px-md-0 text-left">
                    <h1 class="mb-0"><img src="{{asset('/img/bionix/line-putih.svg')}}"
                                          class="img-fluid d-none d-md-block" alt=""
                                          style="width: 10%;">
                        BIONIX Student
                        Level</h1>
                    <p>Olimpiade bisnis dan IT terbesar di Indonesia untuk tingkat pelajar SMA/SMK sederajat. BIONIX
                        Student Level dilaksanakan melalui empat tahapan kompetisi dengan konsep acara daring penuh</p>
                </div>
            </div>
        </div>
    </header>

    <!-- tahapan student level section start -->
    <div id="tahapan-sl">
        <div class="tahapan text-center" id="tahapan-large">
            <h1>Tahapan</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h5>Penyisihan<br>Regional</h5>
                    </div>
                    <div class="col">
                        <h5>Penyisihan<br>Nasional</h5>
                    </div>
                    <div class="col">
                        <h5>Semifinal</h5>
                    </div>
                    <div class="col">
                        <h5>Final</h5>
                    </div>
                </div>
                <div class="row" id="garis-tahapan">
                    <div class="col ">
                        <div class="nomor">
                            <h3>1</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="nomor">
                            <h3>2</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="nomor">
                            <h3>3</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="nomor">
                            <h3>4</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex col">
                        <div class="card" id="card-tahapan">
                            <div class="card-body" id="card-body-tahapan">
                                <h3>Penyisihan Region</h3>
                                <hr>
                                <p>Peserta akan berkompetisi melawan tim lain yang berada dalam satu region yang sama.
                                    Peserta akan mengerjakan soal pilihan ganda berdasarkan lima bidang keilmuan sistem
                                    informasi dengan jumlah 100 soal</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex col">
                        <div class="card" id="card-tahapan">
                            <div class="card-body" id="card-body-tahapan">
                                <h3>Penyisihan Nasional</h3>
                                <hr>
                                <p>Peserta akan berkompetisi melawan tim lain dari seluruh Indonesia. Peserta akan
                                    mengerjakan soal pilihan ganda berdasarkan lima bidang keilmuan sistem informasi
                                    dengan jumlah 100 soal</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex col">
                        <div class="card" id="card-tahapan">
                            <div class="card-body" id="card-body-tahapan">
                                <h3>Semifinal</h3>
                                <hr>
                                <p> Peserta akan membuat sebuah ide bisnis berdasarkan tema yang telah ditentukan dan
                                    menuangkannya dalam bentuk proposal dan video</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex col">
                        <div class="card" id="card-tahapan">
                            <div class="card-body" id="card-body-tahapan">
                                <h3>Final</h3>
                                <hr>
                                <p>Tahap terakhir yang harus dilalui setiap peserta. Pada tahap ini, peserta akan
                                    mempresentasikan ide bisnis yang telah dibuat sebelumnya di hadapan juri yang
                                    kompeten di bidang bisnis dan teknologi informasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5 tahapan" id="tahapan-small">

            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="tahapan">
                        <h1 class="mb-5 text-center">Tahapan</h1>
                    </div>

                    <ul class="timeline">
                        <li class="timeline-item rounded-lg ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Penyisihan Region</h2>
                            <p class="text-small mt-2 font-weight-light">Peserta akan berkompetisi melawan tim lain yang
                                berada dalam satu region yang sama. Peserta akan mengerjakan soal pilihan ganda
                                berdasarkan lima bidang keilmuan sistem informasi dengan jumlah 100 soal</p>
                        </li>
                        <li class="timeline-item rounded-lg ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Penyisihan Nasional</h2>
                            <p class="text-small mt-2 font-weight-light">Peserta akan berkompetisi melawan tim lain dari
                                seluruh Indonesia. Peserta akan mengerjakan soal pilihan ganda berdasarkan lima bidang
                                keilmuan sistem informasi dengan jumlah 100 soal</p>
                        </li>
                        <li class="timeline-item rounded-lg ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Semifinal</h2>
                            <p class="text-small mt-2 font-weight-light"> Peserta akan membuat sebuah ide bisnis
                                berdasarkan tema yang telah ditentukan dan menuangkannya dalam bentuk proposal dan
                                video</p>
                        </li>
                        <li class="timeline-item rounded-lg ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Final</h2>
                            <p class="text-small mt-2 font-weight-light">Tahap terakhir yang harus dilalui setiap
                                peserta. Pada tahap ini, peserta akan mempresentasikan ide bisnis yang telah dibuat
                                sebelumnya di hadapan juri yang kompeten di bidang bisnis dan teknologi informasi</p>
                        </li>
                    </ul><!-- End -->
                </div>
            </div>
        </div>
    </div>


    <!-- total hadiah section start -->
    <div class="total-hadiah text-center" id="total-hadiah-sl">
        <h2>Total Hadiah</h2>
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

        </div>

    </div>

    <!-- timeline student level section -->

    <div id="timeline-sl">
        <div class="container py-5" id="timeline-small">

            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="tahapan">
                        <h1 class="mb-5 text-center">Timeline</h1>
                    </div>

                    <!-- Timeline -->
                    <ul class="timeline">
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Pendaftaran</h2><span><i class="fa fa-clock mr-1"></i> 3 Jul - 20 Sep 2021</span>
                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Penyisihan Regional</h2><span><i
                                    class="fa fa-clock mr-1"></i> 26 Sep 2021</span>

                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Penyisihan Nasional</h2><span><i
                                    class="fa fa-clock mr-1"></i> 3 Okt 2021</span>

                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Semifinal</h2><span><i
                                    class="fa fa-clock mr-1"></i> 5 - 23 Okt 2021</span>

                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Final</h2><span><i class="fa fa-clock mr-1"></i> 6 Nov 2021</span>

                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Awarding</h2><span><i class="fa fa-clock mr-1"></i> 7 Nov 2021</span>

                        </li>
                    </ul><!-- End -->

                </div>
            </div>
        </div>


        <div class="timeline text-center" id="timeline-student-level">
            <h1>Timeline</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h5>3 Jul - 20 Sep 2021</h5>
                    </div>
                    <div class="col">
                        <h5>26 Sep 2021</h5>
                    </div>
                    <div class="col">
                        <h5>3 Okt 2021</h5>
                    </div>
                    <div class="col">
                        <h5>5 - 23 Okt 2021</h5>
                    </div>
                    <div class="col">
                        <h5>6 Nov 2021</h5>
                    </div>
                    <div class="col">
                        <h5>7 Nov 2021</h5>
                    </div>
                </div>
                <div class="row" id="circle-timeline">
                    <div class="col">
                        <div class="circle rocket">
                            @if(date('Y-m-d')<=date('Y-m-d',strtotime('2021-09-25')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="circle @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-09-26'))) rocket @endif">
                            @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-09-26'))&&date('Y-m-d')<=date('Y-m-d',strtotime('2021-10-02')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="circle @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-10-03'))) rocket @endif">
                            @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-10-03'))&&date('Y-m-d')<=date('Y-m-d',strtotime('2021-10-04')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="circle @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-10-05'))) rocket @endif">
                            @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-10-05'))&&date('Y-m-d')<=date('Y-m-d',strtotime('2021-11-05')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="circle @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-11-06'))) rocket @endif">
                            @if(date('Y-m-d')==date('Y-m-d',strtotime('2021-11-06')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="circle @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-11-07'))) rocket @endif">
                            @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-11-07')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5>Pendaftaran</h5>
                    </div>
                    <div class="col">
                        <h5>Penyisihan Regional</h5>
                    </div>
                    <div class="col">
                        <h5>Penyisihan Nasional</h5>
                    </div>
                    <div class="col">
                        <h5>Semifinal</h5>
                    </div>
                    <div class="col">
                        <h5>Final</h5>
                    </div>
                    <div class="col">
                        <h5>Awarding</h5>
                    </div>
                </div>
            </div>
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
                                Apa saja syarat yang diperlukan untuk mengikuti BIONIX Student Level?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <ul>
                                    <li>Satu tim terdiri dari 2 orang dan berasal dari sekolah yang sama.</li>
                                    <li>Membayar biaya pendaftaran sebesar Rp 89.000/tim.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="fasilitas-sl">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Fasilitas apa saja yang akan didapatkan oleh peserta?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <ul>
                                    <li>Sertifikat digital untuk semua peserta yang telah diverifikasi identitasnya.
                                    </li>
                                    <li>Simulasi pengerjaan soal penyisihan (untuk waktu tertentu) dan pembahasannya
                                        sebanyak dua kali untuk semua peserta.
                                    </li>
                                    <li>Workshop pembuatan ide bisnis berbasis IT bersama dengan pemateri yang kompeten
                                        pada bidang bisnis
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="AccordionItemTwo">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                Apakah peserta BIONIX Student Level akan mendapatkan sertifikat?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>Semua peserta akan mendapatkan sertifikat. Sertifikat akan dikirim via email dalam
                                    bentuk e-certificate. Sertifikat ini dapat dicetak sendiri sesuai dengan panduan
                                    yang sudah ada.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                                Berapa harga pendaftaran BIONIX Student Level?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>Biaya pendaftaran BIONIX Student Level adalah sebesar Rp89.000/tim dengan setiap tim
                                    terdiri dari maksimal 2 (dua) orang. Harga pendaftaran dapat dikurangi jika calon
                                    peserta mendapatkan promo khusus selama masa pendaftaran BIONIX Student Level
                                    berlangsung.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana cara mendaftar BIONIX Student Level?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>Pendaftaran dapat dilakukan secara daring pada web <a href="{{route('bionix-landing',['type'=>'student'])}}">https://bionix.ise-its.com/student</a>.
                                    Langkah-langkah pendaftaran juga sudah ada pada bagian Tata Cara Pendaftaran di
                                    dokumen guidebook.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                                Apakah peserta boleh mendaftarkan diri lebih dari satu tim di BIONIX Student Level?

                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>Peserta hanya boleh mendaftar di satu tim saja. Jika panitia ISE! 2021 mendeteksi
                                    adanya peserta ganda (terdaftar di lebih dari satu tim), maka peserta tersebut akan
                                    didiskualifikasi.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseTwo">
                                Apakah tim BIONIX Student Level boleh terdiri atas lintas tahun angkatan ataupun berbeda
                                jenis kelamin?

                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>Ya, tim diperbolehkan terdiri atas lintas tahun angkatan maupun berbeda jenis kelamin
                                    asalkan tim tersebut berasal dari sekolah yang sama.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapseTwo">
                                Dimana pelaksanaan tahap Penyisihan BIONIX Student Level?
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>Seluruh tahapan BIONIX Student Level akan diadakan secara full online, sehingga
                                    pengerjaan soal BIONIX Student Level dapat dilakukan di mana saja. Hal yang
                                    dibutuhkan hanyalah koneksi internet yang stabil dan memadai.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana bentuk soal BIONIX Student Level?
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>Soal penyisihan BIONIX Student Level dikategorikan ke dalam empat bidang, yaitu:
                                    teknologi informasi, pemrograman, logika matematika, dan manajemen bisnis. Untuk
                                    mengetahui contoh soal-soal yang akan diujikan, peserta dapat mengikuti simulasi
                                    Tryout yang diberikan.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:components.sponsor/>
</div>

@push('js')
    <script src="{{asset('/js/landing/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/bionix/custom.js')}}"></script>
    @if(!config('app.debug'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MFJ49ZZNJY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-MFJ49ZZNJY');
    </script>
    @endif
@endpush
