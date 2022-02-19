@section('title','BIONIX College Level 2021')
@section('desc','Business and IT Olympiad adalah bagian dari serangkaian acara ISE! dengan konsep kompetisi tingkat nasional yang ditujukan bagi pelajar SMA/SMK dengan menggabungkan antara bisnis dan teknologi informasi. Kompetisi terbagi menjadi 4 tahap yaitu, penyisihan 1, penyisihan 2, semifinal, dan final. Adapun penyisihan dilakukan serentak secara online di seluruh Indonesia')
<div>
    <nav class="navbar navbarsl navbar-custom fixed-top navbar-expand-lg container-fluid" id="navbar2">

        <ul class="nav ml-5">
            <li class="nav-item">
                <a class="nav-link" href="#tahapan-cl">Tahapan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#total-hadiah-cl">Hadiah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#timeline-cl">Timeline</a>
            </li>
        </ul>
        <a href="{{route('register')}}" class="nav-link" id="daftar">Daftar</a>
        <a href="https://ise-its.com/panduan-college" class="nav-link" id="guidebook" target="_blank"><img
                src="{{asset('/img/bionix/DownloadSimple.svg')}}" alt="">
            Guidebook</a>

    </nav>


    <!-- header student level section start -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-end d-none d-md-block">
                    <img src="{{asset('/img/landing/content-icon/bcl.svg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 col-12 px-3 px-md-0 text-left">
                    <h1 class="mb-0"><img src="{{asset('/img/bionix/line-putih.svg')}}"
                                          class="img-fluid d-none d-md-block" alt=""
                                          style="width: 10%;"> BIONIX College
                        Level</h1>
                    <div class="bg-white float-start px-4 my-2 d-flex flex-row align-items-center"
                         style="border-radius:25px;color: black;">
                        <h4 class="m-0 d-none d-md-block" style="font-family:'Hind Bold';">In
                            Collaboration with: </h4>
                        <img
                            src="{{asset('img/bionix/cicil.png')}}" class="img-fluid ms-2 d-none d-md-block"
                            style="width: 80px;"/>
                        <h5 class="m-0 d-md-none d-block" style="font-family:'Hind Bold';">Collab. with: </h5>
                        <img
                            src="{{asset('img/bionix/cicil.png')}}" class="img-fluid ms-2 d-md-none d-block"
                            style="width: 64px;"/>
                    </div>
                    <p class="float-start">Kompetisi studi kasus bisnis nasional yang berfokus pada pemecahan studi
                        kasus bisnis dan
                        teknologi informasi yang dialami oleh suatu perusahaan untuk tingkat mahasiswa di Indonesia.
                        BIONIX College Level dilaksanakan melalui tiga tahapan kompetisi dengan konsep acara daring
                        penuh.
                    </p>
                </div>
            </div>
        </div>
    </header>


    <!-- tahapan college level section start -->

    <div id="tahapan-cl">
        <div class="tahapan text-center" id="tahapan-large">
            <h1>Tahapan</h1>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5>Penyisihan</h5>
                    </div>
                    <div class="col">
                        <h5>Semifinal</h5>
                    </div>
                    <div class="col">
                        <h5>Final</h5>
                    </div>
                </div>
                <div class="row" id="garis-tahapancl">
                    <div class="col">
                        <div class="nomor" id="nomor-college">
                            <h3>1</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="nomor" id="nomor-college">
                            <h3>2</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="nomor" id="nomor-college">
                            <h3>3</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex col">
                        <div class="card" id="card-tahapan">
                            <div class="card-body" id="card-body-tahapan">
                                <h3>Penyisihan</h3>
                                <hr>
                                <p>Peserta membuat implementasi bisnis dan teknologi informasi dari studi kasus
                                    perusahaan yang telah diberikan dan menuangkannya dalam bentuk paper</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex col">
                        <div class="card" id="card-tahapan">
                            <div class="card-body" id="card-body-tahapan">
                                <h3>Semifinal</h3>
                                <hr>
                                <p>Peserta membuat implementasi bisnis dan teknologi informasi dari studi kasus
                                    perusahaan yang telah diberikan dan menuangkannya dalam bentuk paper dan video.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex col">
                        <div class="card" id="card-tahapan">
                            <div class="card-body" id="card-body-tahapan">
                                <h3>Final</h3>
                                <hr>
                                <p>Peserta akan mempresentasikan penyelesaian studi kasus bisnis yang telah dibuat
                                    sebelumnya di hadapan juri yang kompeten di bidang bisnis dan teknologi
                                    informasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5" id="tahapan-small">

            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="tahapan">
                        <h1 class="mb-5 text-center">Tahapan</h1>
                    </div>

                    <!-- Timeline -->
                    <ul class="timeline">
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Penyisihan</h2>
                            <p class="text-small mt-2 font-weight-light">Peserta membuat implementasi bisnis dan
                                teknologi informasi dari studi kasus perusahaan yang telah diberikan dan menuangkannya
                                dalam bentuk paper</p>
                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Semifinal</h2>
                            <p class="text-small mt-2 font-weight-light"> Peserta membuat implementasi bisnis dan
                                teknologi informasi dari studi kasus perusahaan yang telah diberikan dan menuangkannya
                                dalam bentuk paper dan video.</p>
                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Final</h2>
                            <p class="text-small mt-2 font-weight-light">Peserta akan mempresentasikan penyelesaian
                                studi kasus bisnis yang telah dibuat sebelumnya di hadapan juri yang kompeten di bidang
                                bisnis dan teknologi informasi.</p>
                        </li>
                    </ul><!-- End -->

                </div>
            </div>
        </div>
    </div>


    <!-- total hadiah section start -->
    <div class="total-hadiah text-center mt-5" id="total-hadiah-cl">
        <h2>Total Hadiah</h2>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="hadiahcl" role="tabpanel">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-md-4 justify-content-end">
                            <div class="card juara3">
                                <div class="card-body">
                                    <h4>Juara 3</h4>
                                    <img src="{{asset('/img/bionix/juara3-bionix-sl.svg')}}" class="img-fluid" alt="">
                                    <p>Rp 1.000.000<br><span>+ Sertifikat</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 justify-content-center">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Juara 1</h4>
                                    <img src="{{asset('/img/bionix/juara1-bionix-sl.svg')}}" class="img-fluid" alt="">
                                    <p>Rp 3.000.000<br><span>+ Sertifikat</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 justify-content-start">
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

    <!-- timeline student level section -->
    <div id="timeline-cl">
        <div class="timeline text-center" id="timeline-student-level">
            <h1>Timeline</h1>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5>1 Ags - 1 Sep 2021</h5>
                    </div>
                    <div class="col">
                        <h5>29 Ags 2021</h5>
                    </div>
                    <div class="col">
                        <h5>2 - 16 Sep 2021</h5>
                    </div>
                    <div class="col">
                        <h5>19 Sep - 10 Okt 2021</h5>
                    </div>
                    <div class="col">
                        <h5>6 Nov 2021</h5>
                    </div>
                    <div class="col">
                        <h5>7 Nov 2021</h5>
                    </div>
                </div>
                <div class="row" id="circle-timeline-cl">
                    <div class="col">
                        <div class="circle rocket">
                            @if(date('Y-m-d')<=date('Y-m-d',strtotime('2021-08-28')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="circle @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-08-29'))) rocket @endif"
                             id="circle-cl">
                            @if(date('Y-m-d')==date('Y-m-d',strtotime('2021-08-29')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div
                            class="circle @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-09-02'))) rocket @endif"
                            id="circle-cl">
                            @if(date('Y-m-d')<=date('Y-m-d',strtotime('2021-09-18'))&&date('Y-m-d')>=date('Y-m-d',strtotime('2021-09-02')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="circle @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-09-19'))) rocket @endif"
                             id="circle-cl">
                            @if(date('Y-m-d')<=date('Y-m-d',strtotime('2021-11-05'))&&date('Y-m-d')>=date('Y-m-d',strtotime('2021-09-19')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="circle @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-11-06'))) rocket @endif"
                             id="circle-cl">
                            @if(date('Y-m-d')==date('Y-m-d',strtotime('2021-11-06')))
                                <img src="{{asset('/img/bionix/rocket.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="circle @if(date('Y-m-d')>=date('Y-m-d',strtotime('2021-11-07'))) rocket @endif"
                             id="circle-cl">
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
                        <h5>Coaching</h5>
                    </div>
                    <div class="col">
                        <h5>Penyisihan</h5>
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

        <div class="container py-5" id="timeline-small">

            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="tahapan">
                        <h1 class="mb-5 text-center">Timeline</h1>
                    </div>

                    <!-- Timeline -->
                    <ul class="timeline">
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Pendaftaran</h2><span><i class="fa fa-clock mr-1"></i> 1 Ags - 1 Sep 2021</span>
                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Coaching</h2><span><i class="fa fa-clock mr-1"></i> 29 Ags 2021</span>
                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Penyisihan 1</h2><span><i class="fa fa-clock mr-1"></i> 2 - 16 Sep 2021</span>
                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Penyisihan 2</h2><span><i class="fa fa-clock mr-1"></i> 19 Sep - 10 Okt 2021</span>

                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Semifinal</h2><span><i class="fa fa-clock mr-1"></i> 6 Nov 2021</span>

                        </li>
                        <li class="timeline-item rounded ml-3 p-4 shadow">
                            <h2 class="h5 mb-0">Final</h2><span><i class="fa fa-clock mr-1"></i> 7 Nov 2021</span>

                        </li>
                    </ul><!-- End -->

                </div>
            </div>
        </div>

    </div>


    <!-- FAQ section -->
    <div class="faq text-center" id="faqcl">
        <h1>FAQ</h1>
        <div class="container">
            <div class="row">
                <div class="accordion" id="accordionFaq">
                    <div class="accordion-item show" id="AccordionItemOne">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Apakah perlu biaya pendaftaran untuk mengikuti babak penyisihan?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>
                                    Tidak. Untuk mengikuti babak penyisihan, peserta tidak dipungut biaya apapun
                                    (gratis) dan hanya perlu mendaftarkan timnya pada website.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="AccordionItemTwo">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana cara mendaftar BIONIX College Level?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>
                                    Perwakilan dari tim harus melakukan pendaftaran pada website resmi ISE! 2021 yang
                                    beralamatkan di <a
                                        href="{{route('bionix-landing',['type'=>'college'])}}">bionix.ise-its.com/college</a>
                                    lalu
                                    mengikuti tata cara pendaftaran yang telah dijelaskan di atas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="AccordionItemThree">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Studi kasus di BIONIX College Level itu seperti apa sih?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>
                                    Setiap tim akan diberikan studi kasus sebuah perusahaan lalu membuat strategi
                                    implementasi bisnis dan teknologi informasi berupa paper dari studi kasus yang telah
                                    diberikan pada babak penyisihan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="AccordionItemFour">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Apakah satu orang boleh terdaftar di tim yang berbeda?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>
                                    Tidak boleh, satu orang hanya boleh terdaftar pada satu tim. Pada saat pendaftaran,
                                    setiap peserta diharuskan untuk melampirkan kartu mahasiswa, jika ditemukan
                                    kecurangan maka peserta akan didiskualifikasi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="AccordionItemFive">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Bagaimana ketentuan tim pada BIONIX College Level?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>
                                    Satu tim terdiri dari 3 (tiga) anggota yang berasal dari institusi yang sama (boleh
                                    berbeda angkatan dan berbeda jurusan) dan satu orang hanya boleh mendaftar pada satu
                                    tim.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="AccordionItemSix">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Apakah kartu tanda mahasiswa harus di-scan pada saat verifikasi identitas?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>
                                    Tidak harus, peserta boleh mengirimkan foto biasa saja (tanpa scan) jika identitas
                                    pada kartu tanda mahasiswa dapat dibaca dengan jelas. Pastikan bahwa kartu tanda
                                    mahasiswa masih berlaku pada saat mendaftar BIONIX College Level.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="AccordionItemSeven">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Bagaimana jika belum mempunyai Kartu Tanda Mahasiswa atau Kartu Tanda Mahasiswa hilang?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>
                                    Peserta diperbolehkan untuk mengganti kartu tanda mahasiswa dengan bukti lain,
                                    seperti surat keterangan mahasiswa aktif, surat keterangan rekomendasi dosen dan
                                    berisi foto diri serta asal institusi masing-masing peserta.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="AccordionItemEight">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Berapakah waktu yang diberikan untuk menyelesaikan paper?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                             data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>
                                    Waktu yang diberikan untuk menyelesaikan paper adalah selama 2 (dua) minggu, yaitu
                                    pada tanggal 2 September 2021 hingga terakhir pengumpulan paper adalah 16 September
                                    2021.
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
