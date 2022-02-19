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
                <a class="navbar-brand"
                   href="@if(!config('app.debug')) https://ise-its.com/ @else {{route('ise-landing')}} @endif"><img
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


        <div class="supreme-container">
            <!-- header student level section start -->
            <section class="header d-flex align-items-center" id="header" style="min-height: 90vh">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4 text-center text-lg-end">
                            <img src="{{asset('img/virtual-job/header-img.png')}}" alt="Virtual Job Fair Logo"
                                 id="header-img" class="img-fluid">
                        </div>
                        <div class="col-12 col-lg-8 text-left ps-5 mt-5 mt-md-0">
                            <img src="{{asset('img/virtual-job/line-header-icon.svg')}}" alt="" style="width: 5vw;">
                            <img src="{{asset('img/virtual-job/icon.png')}}" alt="" style="width: 10em;">
                            <h1 style="text-transform:uppercase;">Virtual Intern &<br> Job Fair</h1>
                            <p>ICON Virtual Intern & Jobfair menawarkan lowongan magang dan pekerjaan di bidang
                                keprofesian Teknologi Informasi dan Sistem Informasi.
                            </p>
                            <a href="#company" id="lebih-lanjut" class="btn">Lebih lanjut <i
                                    class="fa fa-chevron-right ps-3"
                                    style="color: #FF726B;font-size: 24px;"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- company section start -->
            <section class="company my-2 mt-5" id="company">
                <div class="container">
                    <div class="row filter-row">
                        <p>
                            <button class="btn btn-primary ms-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#filter" width="250px" id="filter-btn">
                                <img src="{{asset('img/virtual-job/filter.png')}}" alt="filter-icon"> Filter
                            </button>
                        </p>
                        <div class="collapse" id="filter" wire:ignore>
                            <div class="container-fluid">
                                <div class="row">
                                    <h5 class="pt-4">Job Type</h5>
                                    <div class="input-grou d-flex flex-md-row flex-column">
                                        <label class="checkbox mx-4">
                                            <input type="checkbox" checked="checked" name="type[]" value="Full-Time"
                                                   wire:model.lazy="filters.0">
                                            <span class="checkmark"></span>
                                            Full Time
                                        </label>
                                        <label class="checkbox mx-4">
                                            <input type="checkbox" checked="checked" name="type[]" value="Part-Time"
                                                   wire:model.lazy="filters.1">
                                            <span class="checkmark"></span>
                                            Part Time
                                        </label>
                                        <label class="checkbox mx-4">
                                            <input type="checkbox" checked="checked" name="type[]" value="Internship"
                                                   wire:model.lazy="filters.2">
                                            <span class="checkmark"></span>
                                            Internship
                                        </label>
                                        <label class="checkbox mx-4">
                                            <input type="checkbox" wire:model="filterBookmark">
                                            <span class="bookmarked"></span>
                                            Bookmarked
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div wire:loading.delay wire:loading.target="lowongans" class="w-100 py-4">
                        <h2 class="text-center text-white">Harap Tunggu</h2>
                    </div>

                    <div class="row text-center">
                        @foreach ($lowongans as $lowongan)
                            <div class="col-xl-3 col-md-6 col-lg-4 col-12 d-flex justify-content-center py-4">
                                <div class="card" style="height: 100% !important;">
                                    <button class="company-card-btn h-100" data-bs-toggle="modal"
                                            data-bs-target="#company-desc" wire:click="detail({{ $lowongan->id }})">
                                        <div class="card-body d-flex flex-column justify-content-around h-100">
                                            <div>
                                                <center><img class="img-fluid pt-5 mb-5"
                                                             src="{{ asset('storage/'.$lowongan->perusahaan->logo_path) }}"
                                                             alt="logo-perusahaan"
                                                             style="max-width: 248px; max-height: 248px;"></center>
                                                <div><h3
                                                        class="fw-bold card-title text-white">{{ $lowongan->name }}</h3>
                                                    <a disabled class="btn"
                                                       style="font-size: 16px;">{{$lowongan->type}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- end of company-->
        </div>
        <!-- end of supreme container-->

        <!-- modal company section start -->
        <div class="modal fade @if($isModalShown) show @endif" id="company-desc" tabindex="-1" data-bs-backdrop="static"
             data-bs-keyboard="false" @if($isModalShown)  style="display: block;" aria-modal="true"
             role="dialog" @endif>
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="border:0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                wire:click="closeModal"></button>
                    </div>

                    <div class="modal-body">
                        @if($lowongan_detail)
                            <div class="container">
                                <div class="row d-flex justify-content-center mb-md-5 mb-2">
                                    <div class="col-lg-4 col-12 text-lg-start text-center my-2">
                                        <img class="img-fluid"
                                             src="{{ asset('storage/'.$lowongan_detail->perusahaan->logo_path) }}"
                                             alt="logo-perusahaan">
                                    </div>
                                    <div
                                        class="col-lg-8 col-12 text-lg-start text-center my-2 d-flex flex-column justify-content-center align-items-center align-items-lg-start">
                                        <div class="d-flex flex-row align-items-center">
                                            <h1 id="job-title m-0">{{$lowongan_detail->name}}</h1>
                                            <button wire:click="markAsBookmark" class="btn ms-1 p-0"
                                                    style="    margin-top: 10px;align-self: flex-start;">
                                                <h3
                                                    class="@if($isBookmarked) fas @else far @endif fa-bookmark text-white"></h3>
                                            </button>
                                        </div>
                                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab"
                                             role="tablist"
                                             aria-orientation="vertical">
                                            <button class="nav-link active my-2 text-capitalize fs-6"
                                                    type="button"
                                                    style="width: auto;padding: 0 8px !important; font-size: 1rem !important;"
                                            >{{$lowongan_detail->type}}
                                            </button>
                                        </div>
                                        <a class="btn" target="_blank"
                                           href="{{$lowongan_detail->perusahaan->company_url}}"
                                           id="website-modal-btn">Kunjungi website</a>
                                    </div>
                                </div>
                                @if($step==1)
                                    <div id="description">
                                        <div class="row">
                                            <ul class="nav nav-pills mb-3 justify-content-around" id="pills-tab"
                                                role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab"
                                                            data-bs-toggle="pill"
                                                            data-bs-target="#tab-profil" type="button" role="tab">Profil
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab"
                                                            data-bs-toggle="pill"
                                                            data-bs-target="#tab-syarat" type="button" role="tab">
                                                        Lowongan
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <div class="tab-content" id="tabContent">
                                                <div class="tab-pane fade show active text-center py-4" id="tab-profil"
                                                     role="tabpanel" style="border:0">
                                                    @if($lowongan_detail->perusahaan->is_desc_video==1)
                                                        <div class="video-player mx-auto my-3 ratio ratio-16x9">
                                                            <iframe src="{{$lowongan_detail->perusahaan->media_path}}"
                                                                    title="YouTube video player" frameborder="0"
                                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                    allowfullscreen></iframe>
                                                        </div>
                                                    @else
                                                        <img
                                                            src="{{asset('storage/'.$lowongan_detail->perusahaan->media_path)}}"
                                                            class="img-fluid" style="max-width: 50% !important;"/>
                                                    @endif
                                                    <div class="profile-text lh-sm mt-4">
                                                        {!! $lowongan_detail->perusahaan->desc !!}
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade py-4" id="tab-syarat" role="tabpanel"
                                                     style="border:0">
                                                    <div class="d-flex flex-column align-items-start m-2">
                                                        <div id="v-pills-tabContent">
                                                            <h3>Deskripsi</h3>
                                                            {!! $lowongan_detail->desc !!}
                                                            <h3 class="mt-4">Syarat</h3>
                                                            {!! $lowongan_detail->requirement !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(Auth::check()&&Auth::user()->userType=='member'&&Auth::user()->hasVerifiedEmail())
                                    <div id="berkas-section" class="container"
                                         @if($step!=2) style="display: none" @endif>
                                        <div class="row my-4">
                                            <div class="apply-desc p-3">
                                                <h3 class="py-2 fw-bold">Deskripsi</h3>
                                                {!! $lowongan_detail->desc !!}
                                            </div>
                                        </div>
                                        <div class="row my-4">
                                            <div class="apply-syarat p-3">
                                                <h3 class="py-2 fw-bold">Syarat dan Ketentuan</h3>
                                                <p>{!! $lowongan_detail->requirement !!}</p>
                                            </div>
                                        </div>
                                        <div class="row apply-doc my-4">
                                            <div class="container-fluid p-3">
                                                <h3 class="py-2 fw-bold">Dokumen Pendaftaran</h3>
                                                @if($errors->any())
                                                    <div class="alert" style="width: 100%;    color: #ff4d4f;
                                                    background-color: #301923;
                                                    background-image: none;
                                                    border-color: #8c0e2e;"
                                                         role="alert">
                                                        <h4>Terjadi Masalah</h4>
                                                        <ul class="font-normal">
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <div class="row my-2">
                                                    <div
                                                        class="d-flex flex-row justify-content-between align-items-center col-12">
                                                        <label class="form-check-label" for="cv_file">
                                                            CV
                                                        </label>
                                                        <div
                                                            class="d-flex flex-column justify-content-end align-items-end">
                                                            <input class="d-none"
                                                                   id="cv_file"
                                                                   type="file" accept=".pdf"
                                                                   wire:model.defer="cv_file"
                                                                   onchange="uploadListener('cv')">
                                                            <button onclick="$('#cv_file').click()" type="button"
                                                                    class="btn" style="color: #127c4b;"><i
                                                                    class="fas fa-upload"></i> Upload
                                                            </button>
                                                            <span wire:ignore style="white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 15ch;" id="cv_name"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                @if($lowongan_detail->need_portfolio ==1)
                                                    <div class="row my-2">
                                                        <div
                                                            class="d-flex flex-row justify-content-between align-items-center col-12">
                                                            <label class="form-check-label" for="portfolio_file">
                                                                Portfolio
                                                            </label>
                                                            <div
                                                                class="d-flex flex-column justify-content-end align-items-end">
                                                                <input class="d-none"
                                                                       id="portfolio_file"
                                                                       type="file" accept=".pdf"
                                                                       wire:model.defer="portfolio_file"
                                                                       onchange="uploadListener('portfolio')">
                                                                <button onclick="$('#portfolio_file').click()"
                                                                        type="button"
                                                                        class="btn" style="color: #127c4b;"><i
                                                                        class="fas fa-upload"></i> Upload
                                                                </button>
                                                                <span wire:ignore style="white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 15ch;" id="portfolio_name"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if($lowongan_detail->need_personal_letter ==1)
                                                    <div class="row my-2">
                                                        <div
                                                            class="d-flex flex-row justify-content-between align-items-center col-12">
                                                            <label class="form-check-label" for="personal_letter_file">
                                                                Personal Letter
                                                            </label>
                                                            <div
                                                                class="d-flex flex-column justify-content-end align-items-end">
                                                                <input class="d-none"
                                                                       id="personal_letter_file"
                                                                       type="file" accept=".pdf"
                                                                       wire:model.defer="personal_letter_file"
                                                                       onchange="uploadListener('personal_letter')">
                                                                <button onclick="$('#personal_letter_file').click()"
                                                                        type="button" class="btn"
                                                                        style="color: #127c4b;"><i
                                                                        class="fas fa-upload"></i> Upload
                                                                </button>
                                                                <span wire:ignore style="white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 15ch;" id="personal_letter_name"></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endif

                                                <span style="font-size: 0.8rem">*Apabila anda ingin menggunakan berkas yang sudah tersimpan di profil, maka anda tidak perlu mengunggah berkas di halaman ini lagi.</span>
                                                <br/>
                                                <span style="font-size: 0.8rem">**Berkas yang diunggah pada halaman ini hanya berlaku untuk lowongan yang dilamar saat ini juga.</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if($step==3)
                                    <div class="container" id="privacy-policy">
                                        <div class="row privacyPolicy-page" style="background: white; color: black">
                                            <h3 class="py-3">Privacy and Policy</h3>
                                            <div class="container" style="max-height: 80vh;overflow-y:auto;">
                                                @include('livewire.pages.landing.icon.virtual-job-fair.privacy-policy')
                                            </div>
                                        </div>
                                        @if($errors->any())
                                            <div class="alert mt-4" style="width: 100%;    color: #ff4d4f;
                                                    background-color: #301923;
                                                    background-image: none;
                                                    border-color: #8c0e2e;"
                                                 role="alert">
                                                <h4>Terjadi Masalah</h4>
                                                <ul class="font-normal">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-check pt-3">
                                            <input class="form-check-input" type="checkbox" id="setuju-cek"
                                                   wire:model.defer="agreement" required>
                                            <label class="form-check-label" for="setuju-cek">
                                                Saya menyetujui kebijakan privasi di atas
                                            </label>
                                        </div>
                                    </div>
                                @endif
                                @if($step==4)
                                    <div class="row my-4">
                                        <div class="apply-syarat p-3">
                                            <h3 class="py-2 fw-bold">Lamaran berhasil disimpan</h3>
                                            <p>Berkas anda sudah kami simpan. Silahkan cek email secara berkala untuk
                                                mendapatkan kabar terbaru terkait lamaran anda.</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div
                        class="modal-footer d-flex flex-row align-items-center @if($step==1) justify-content-center @else justify-content-between @endif"
                        style="border:0">
                        <div wire:loading.remove class="w-100">
                            @if($step!=4)
                                @if($step!=1)
                                    <button type="button" class="btn back-btn w-100 w-md-auto" style="padding:6px 4rem;"
                                            wire:click="addStep(-1)">Kembali
                                    </button>
                                @endif
                                @if(Auth::check()&&Auth::user()->userType=='member'&&Auth::user()->hasVerifiedEmail())
                                    @if(Auth::user()->userable->jenjang=='Siswa SMA')
                                        <p class="text-white text-center">Anda tidak dapat mengikuti event ini.</p>
                                    @elseif(!Auth::user()->userable->jobfair)
                                        <center>
                                            <a href="{{route('icon.peserta.jobfair.registrasi')}}">
                                                <button type="button"
                                                        class="btn apply-btn">Silahkan lengkapi data diri anda terlebih
                                                    dahulu.
                                                </button>
                                            </a>
                                        </center>
                                    @elseif($need_to_be_completed)
                                        <center>
                                            <a href="{{route('icon.peserta.jobfair.biodata')}}" class="w-100">
                                                <button type="button"
                                                        class="btn apply-btn">Silahkan lengkapi data diri anda terlebih
                                                    dahulu.
                                                </button>
                                            </a>
                                        </center>
                                    @elseif($is_applied)
                                        <p class="text-white text-center">Anda sudah melamar pada lowongan ini.</p>
                                    @else
                                        <button type="button" class="btn apply-btn w-100 w-md-auto"
                                                wire:click="addStep(1)">@if($step==3) Simpan @else Lanjut @endif
                                        </button>
                                    @endif
                                @else
                                    <center>
                                        <a href="{{route('login')}}">
                                            <button type="button"
                                                    class="btn apply-btn">@if(!Auth::check()||Auth::user()->userType!='member')
                                                    Silahkan login untuk
                                                    melanjutkan @elseif(!Auth::user()->hasVerifiedEmail())
                                                    Silahkan lakukan verifikasi email terlebih dahulu @endif
                                            </button>
                                        </a>
                                    </center>
                                @endif
                            @endif
                        </div>
                        <div wire:loading class="w-100">
                            <p class="text-center text-white">Harap Tunggu</p>
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
                                    Apa itu ICON Virtual Intern and Job Fair?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>
                                        Pameran virtual lowwongan magang dan pekerjaan yang terfokus pada bidang IT
                                        khususnya Sistem Informasi yang diselenggarakan melalui website resmi ISE! 2021
                                        dan terbuka untuk masyarakat umum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="fasilitas-sl">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Kapan pelaksanaan ICON Virtual Intern and Job Fair?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Waktu pelaksanaan dimulai tanggal 31 Oktober sampai 7 November 2021 maksimum
                                        pukul 23:59 WIB.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" id="AccordionItemThree">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Bagaimana cara mendaftar dan mengikuti Virtual Job And Intern Fair
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>
                                        Kamu perlu memiliki akun ISE terlebih dahulu, silahkan melakukan registrasi akun
                                        dengan menekan button login di pojok kanan atas halaman ini.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseFour">
                                    Setelah membuat akun, kenapa saya tidak juga mendapat email aktivasi dari ISE?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Mohon mengaktifkan sync email dan mengecek bagian spam
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseFive">
                                    Siapa saja yang bisa mengikuti ICON Virtual Internship dan Job Fair?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Siapapun dapat memiliki kesempatan untuk apply internship dan Job Fair selama
                                        memenuhi kualifikasi yang dijelaskan di masing masing pekerjaan.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseSix">
                                    Apa yang perlu saya siapkan untuk mengikuti ICON Virtual Internship And Job Fair?

                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Persiapkan dirimu sebaik mungkin dan jangan lupa menyiapkan cv, portofolio,
                                        ataupun berkas lain yang dibutuhkan ketika melamar penawaran pekerjaan.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                    Bagaimana cara saya mengetahui,memilih perusahaan, dan posisi yang saya inginkan?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Semua tawaran dapat dilihat seluruhnya di halaman utama Job Fair melalui <a
                                            href="https://icon.ise-its.com/jobfair">icon.ise-its.com/jobfair</a>. Anda
                                        juga dapat melakukan bookmark atau menandai lamaran yang menarik menurut anda.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                    Bagaimana saya melihat daftar lamaran yang sudah saya apply?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Anda dapat melihatnya di halaman dashboard akun kalian, silahkan login dan menuju
                                        dashboard masing masing.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                    Apakah saya boleh melamar pekerjaan yang ditawarkan lebih dari satu kali?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Anda diperbolehkan melamar lebih dari satu kali. Pastikan requirement yang
                                        dibutuhkan oleh perusahaan telah terpenuhi.

                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Bagaimana proses seleksi dilakukan?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Panitia ICON akan memeriksa seluruh berkas yang dikirimkan oleh applicant.
                                        Setelah sesuai dengan berkas yang di persyaratkan, maka berkas applicant akan
                                        diserahkan kepada perusahaan terkait dan proses seleksi dan rekrutmen sepenuhnya
                                        diambil alih oleh perusahaan mitra.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEleven" aria-expanded="false"
                                        aria-controls="collapseEleven">
                                    Setelah ICON Virtual Internship And Job Fair berakhir, apa yang perlu saya lakukan?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>Anda perlu menunggu dan mengecek email secara berkala untuk informasi selanjutnya
                                        dari perusahaan
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
    <link rel="stylesheet"
          href="{{asset('/css/virtual-job-fair/style.css?ver_date='.date('YmdHis',filemtime('css/virtual-job-fair/style.css')))}}"/>
    <style>
        body {
            background-image: url("{{asset('/img/ds-landing/background-ds-academy.png')}}");
            background-size: cover;
            background-repeat: no-repeat;
        }

        h2 {
            color: white;
        }

        #v-pills-tabContent p, #v-pills-tabContent h3, #v-pills-tabContent p span, #v-pills-tabContent ol, #v-pills-tabContent ul,
        .profile-text p, .profile-text p span,
        .apply-syarat h3, .apply-syarat p, .apply-syarat p span,
        .apply-desc h3, .apply-desc p, .apply-desc p span,
        .apply-doc h3, .apply-doc p, .apply-doc span, .apply-doc label {
            color: #212529 !important;
        }
    </style>
@endpush

@push('js')
    <script src="{{asset('/js/virtual-job-fair/custom.js')}}"></script>
    <script wire:ignore>
        var step = 1;

        function nextStep() {
            step++
            if (step === 1) {
                $('#description').show();
            } else if (step === 2) {
                $('#description').hide();
                $('#berkas-section').show();
            }
        }

        function uploadListener(sec) {
            let fullPath = $(`#${sec}_file`).val()
            if (fullPath) {
                let startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                let filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                if (filename) {
                    $(`#${sec}_name`).html(filename)
                }
            }
        }

        @if($this->openAtLoad)
        $(window).on('load', function () {
            $('#company-desc').modal('show')
        })
        @endif
        Livewire.on('closeModal', () => {
            $('#company-desc').modal('hide')
        })
    </script>
@endpush
