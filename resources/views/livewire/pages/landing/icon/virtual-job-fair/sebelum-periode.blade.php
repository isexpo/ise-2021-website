@section('title','Virtual Intern & Job Fair')
@section('desc','ICON Virtual Intern & Jobfair menawarkan lowongan magang dan pekerjaan di bidang keprofesian Teknologi Informasi dan Sistem Informasi.')


{{-- TODO (Ridho) Virtual Job Fair

URL : /icon/virtual-job-fair

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
                            <a class="nav-link " aria-current="page" href="{{route('icon-landing.index')}}">ICON Home</a>
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
                                                <a class="dropdown-item" href="{{route('coming-soon')}}"><img
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
                                                <a class="dropdown-item" href="{{route('coming-soon')}}"><img
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
      <section class="header" id="header">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 text-center text-lg-end">
              <img src="{{asset('img/virtual-job/header-img.png')}}" alt="" id="header-img" class="img-fluid">
            </div>
            <div class="col-12 col-lg-8 text-left ps-5 mt-5 mt-md-0">
              <img src="{{asset('img/virtual-job/line-header-icon.svg')}}" alt="" style="width: 5vw;">
              <img src="{{asset('img/virtual-job/icon.png')}}" alt="" style="width: 10em;">
              <h1 style="text-transform:uppercase;">Virtual Intern &<br>  Job Fair</h1>
              <p>ICON Virtual Intern & Jobfair menawarkan lowongan magang dan pekerjaan di bidang keprofesian Teknologi Informasi dan Sistem Informasi.
              </p>
              <a href="#" id="lebih-lanjut" class="btn">Lebih cepat <i class="fa fa-chevron-right ps-3" style="color: #FF726B;font-size: 24px;"></i></a>
            </div>
          </div>
        </div>
      </section>

      <!-- intro section start -->
      <section class="intro" id="intro">
        <div class="container">
          <div class="row mx-2" style="padding-top:5vh;">
            <p class="intro-text text-center fs-2 lh-base" style="color: whitesmoke;">
              <span>Stay tuned,</span>  our event is on the way!
            </p>
          </div>
          <div class="row" style="margin-bottom: 10vw;">
            <div class="countdown mt-5 px-5">
              <ul class="fw-bold p-0 text-center d-flex flex-row justify-content-around">
                  <li><span id="days">00</span></li>
                  <li>:</li>
                  <li><span id="hours">00</span></li>
                  <li>:</li>
                  <li><span id="minutes">00</span></li>
              </ul>
          </div>
          </div>
        </div>
      </section>


      <!-- company section start -->
      <section class="company my-2" id="company">
        <div class="container">
          <div class="row text-center">
            @foreach ($lowongan as $lowongan)
            <div class="col-md-4 col-12 d-flex justify-content-center">
              <div class="card my-3">
                <div class="card-body">
                  <img class="img-fluid pt-5 mb-5" src="{{ url('storage/'.$lowongan->perusahaan->logo_path) }}" alt="logo-perusahaan">
                  <h5 class="card-title pt-5">{{ $lowongan->name }} <br></h5>
                  <a class="btn" href="{{route('virtual-job-fair.dalam-periode')}}">Kunjungi website</a>
                </div>
              </div>
            </div>
            @endforeach
            {{-- <div class="col-md-4 col-12 d-flex justify-content-center">
              <div class="card my-3">
                <div class="card-body">
                  <img class="img-fluid pt-5 mb-5" src="{{asset('img/virtual-job/dicoding.png')}}" alt="logo-perusahaan">
                  <h5 class="card-title pt-5">Full Stack Developer</h5>
                  <a class="btn" href="{{route('virtual-job-fair.dalam-periode')}}">Kunjungi website</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12 d-flex justify-content-center">
              <div class="card my-3">
                <div class="card-body">
                  <img class="img-fluid pt-5 mb-5" src="{{asset('img/virtual-job/dicoding.png')}}" alt="logo-perusahaan">
                  <h5 class="card-title pt-5">Full Stack Developer</h5>
                  <a class="btn" href="{{route('virtual-job-fair.dalam-periode')}}">Kunjungi website</a>
                </div>
              </div>
            </div> --}}
          </div>

          {{-- <div class="row text-center">
            <div class="col-md-4 col-12 d-flex justify-content-center">
              <div class="card my-3">
                <div class="card-body">
                  <img class="img-fluid pt-5 mb-5" src="{{asset('img/virtual-job/dicoding.png')}}" alt="logo-perusahaan">
                  <h5 class="card-title pt-5">Full Stack Developer</h5>
                  <a class="btn" href="{{route('virtual-job-fair.dalam-periode')}}">Kunjungi website</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12 d-flex justify-content-center">
              <div class="card my-3">
                <div class="card-body">
                  <img class="img-fluid pt-5 mb-5" src="{{asset('img/virtual-job/dicoding.png')}}" alt="logo-perusahaan">
                  <h5 class="card-title pt-5">Full Stack Developer</h5>
                  <a class="btn" href="{{route('virtual-job-fair.dalam-periode')}}">Kunjungi website</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12 d-flex justify-content-center">
              <div class="card my-3">
                <div class="card-body">
                  <img class="img-fluid pt-5 mb-5" src="{{asset('img/virtual-job/dicoding.png')}}" alt="logo-perusahaan">
                  <h5 class="card-title pt-5">Full Stack Developer</h5>
                  <a class="btn" href="{{route('virtual-job-fair.dalam-periode')}}">Kunjungi website</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-4 col-12 d-flex justify-content-center">
              <div class="card my-3">
                <div class="card-body">
                  <img class="img-fluid pt-5 mb-5" src="{{asset('img/virtual-job/dicoding.png')}}" alt="logo-perusahaan">
                  <h5 class="card-title pt-5">Full Stack Developer</h5>
                  <a class="btn" href="{{route('virtual-job-fair.dalam-periode')}}">Kunjungi website</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12 d-flex justify-content-center">
              <div class="card my-3">
                <div class="card-body">
                  <img class="img-fluid pt-5 mb-5" src="{{asset('img/virtual-job/dicoding.png')}}" alt="logo-perusahaan">
                  <h5 class="card-title pt-5">Full Stack Developer</h5>
                  <a class="btn" href="">Kunjungi website</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12 d-flex justify-content-center">
              <div class="card my-3">
                <div class="card-body">
                  <img class="img-fluid pt-5 mb-5" src="{{asset('img/virtual-job/dicoding.png')}}" alt="logo-perusahaan">
                  <h5 class="card-title pt-5">Full Stack Developer</h5>
                  <a class="btn" href="#">Kunjungi website</a>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </section>


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
    <link rel="stylesheet" href="{{asset('/css/virtual-job-fair/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/virtual-job-fair/style.css?ver_date='.date('YmdHis',filemtime('css/virtual-job-fair/style.css')))}}"/>
    <style>
        body {
            background-image: url("{{asset('/img/ds-landing/background-ds-academy.png')}}");
            background-size: cover;
            background-repeat: no-repeat;
        }
        h2{
            color:white;
        }
    </style>
@endpush

@push('js')
    <script src="{{asset('/js/virtual-job-fair/custom.js')}}"></script>
    <script src="{{asset('/js/virtual-job-fair/countdown.js')}}"></script>
@endpush
