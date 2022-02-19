@section('title','Share E-Hall of IS')
@section('desc','Permainan berupa challenge untuk menyebarkan informasi seputar e–Hall of IS 2021 melalui media sosial pemain.')
<div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>
    <div>
        <div class="bg" style="min-height: 100vh">
            <!--navbar section-->
            <livewire:components.e-hall.navbar/>
            <!-- End of Section -->


            @if(Auth::check()&&Auth::user()->userType=='member')
                <nav class="navbar navbarsl navbar-custom fixed-top navbar-expand-lg container-fluid" id="navbar2">
                    <div class="me-lg-5 nav-link my-1" id="daftar">{{Auth::user()->userable->hois_point}} Points</div>
                </nav>
            @endif
        <!-- End of Section -->


            <!-- header section start -->
            <section class="header" id="home">
                <div class="container">
                    <div class="row text-center">
                        <h1>Share
                            <br>
                            E-Hall of IS</h1>
                    </div>
                </div>
            </section>
            <!-- End of Section -->


            <!-- Tutorial Section -->
            <section class="container">
                <h4 class="text-white fw-bold text-center my-5 pt-5">Tutorial Share</h4>
                <div class="content-share container p-4" style="min-height: 480px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('/img/icon/e-hall/share-hois.jpg')}}" class="img-fluid"/>
                        </div>
                        <div class="col-md-8 text-white fs-5 d-flex flex-column justify-content-center">
                            <p>Share Pengalaman Kamu Bermain E-Hall of IS</p>
                            <ol class="mt-5 mt-md-0">
                                <li>Foto momen kamu saat bermain ISE Quest.</li>
                                <li>Bagikan hasil foto tersebut ke story instagram dengan caption ajakan untuk bermain
                                    di
                                    Virtual Play E-Hall of IS sekreatif dan semenarik mungkin.
                                </li>
                                <li>Screenshot bukti membagikan di story instagram.</li>
                                <li>Upload bukti membagikan melalui tombol upload dibawah ini.</li>
                                <li>Pastikan untuk mengupload bukti yang benar. Jika sudah tekan submit.</li>
                                <li>Poin akan bertambah secara otomatis setelah panitia memverifikasi gambar.</li>
                                <li>Apabila ditemukan ditemukan kecurangan maka poin akan dihapus oleh panitia.</li>
                            </ol>

                            <p class="mt-5">Yuk Bagikan Virtual Intern & Jobfair ke Temanmu</p>
                            <ol class="mt-5 mt-md-0">
                                <li>Unduh poster di bawah dan jangan lupa copy juga captionnya.</li>
                                <li>
                                    Bagikan ke grup yang kamu ikuti, bisa melalui Line, WhatsApp, ataupun feed Instagram.
                                </li>
                                <li>Pilih platform tempat kamu membagikan poster dan caption.</li>
                                <li>Upload bukti membagikan melalui tombol upload dibawah ini.</li>
                                <li>Pastikan untuk mengupload bukti yang benar. Jika sudah tekan submit.</li>
                                <li>Poin akan bertambah secara otomatis setelah panitia memverifikasi gambar.</li>
                                <li>Apabila ditemukan ditemukan kecurangan maka poin akan dihapus oleh panitia.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container mt-5">
                <h4 class="text-white fw-bold text-center mt-5">Platform</h4>
                <div class="d-flex flex-row align-items-start justify-content-center py-3">
                    <div class="mx-4">
                        <input type="radio" name="platform" value="Instagram" id="platform-ig" class="d-none" checked
                        />
                        <button
                            class="btn text-white btn-platform d-flex flex-row align-items-start justify-content-center"
                            onclick="$('#platform-ig').prop('checked',true)">
                            <h2 class="icon m-0 p-0"><i class="fab fa-instagram"></i></h2>
                        </button>
                    </div>
                    <div class="mx-4">
                        <input type="radio" name="platform" value="Line" id="platform-line" class="d-none"
                        />
                        <button
                            class="btn text-white btn-platform d-flex flex-row align-items-start justify-content-center"
                            onclick="$('#platform-line').prop('checked',true)
                                    ">
                            <h2 class="icon m-0 p-0"><i class="fab fa-line"></i></h2>
                        </button>
                    </div>
                    <div class="mx-4">
                        <input type="radio" name="platform" value="Whatsapp" id="platform-wa" class="d-none"
                        />
                        <button
                            class="btn text-white btn-platform d-flex flex-row align-items-start justify-content-center"
                            onclick="$('#platform-wa').prop('checked',true)">
                            <h2 class="icon m-0 p-0"><i class="fab fa-whatsapp"></i></h2>
                        </button>
                    </div>
                </div>
            </section>

            <!-- Content Section -->
            <section class="container mt-5">
                <div class="content-share container py-5 px-md-5 mt-4" style="min-height: 480px;">
                    <div class="row mx-4">
                        <div class="col-lg-4 d-flex flex-column align-items-center justify-content-start ps-4 pe-2">
                            <img src="{{asset('storage/'.$content->img_path)}}" class="img-fluid"/>
                        </div>
                        <div class="col-lg-8 text-white px-4">
                            <h5 class="fw-bold mt-4 mt-lg-0">Caption : </h5>
                            <div class="mt-4 text-justify" id="caption">
                                {!! $content->caption !!}
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-center my-5">
                        <a href="{{asset('storage/'.$content->img_path)}}" target="_blank"
                           class="btn btn-gradient text-uppercase" download>Unduh Gambar</a>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-center my-5">
                        <button type="button" id="btn-copy"
                           class="btn btn-gradient text-uppercase">Copy Caption</button>
                    </div>
                    <hr class="m-5" style="border:1px solid #ECBAF9 !important;"/>
                    <h4 class="text-white fw-bold text-center mb-5">Upload Form</h4>

                    <div class="px-md-5">
                        <div class="content-form py-5 px-md-5 px-3">
                            <div class="d-flex flex-column align-items-center justify-content-center mb-5">

                                @if(Auth::check()&&Auth::user()->userType=='member')

                                    <div class="d-flex flex-column align-items-center justify-content-center p-md-3"
                                         style="width: 100%">
                                        @if($errors->any())
                                            <div class="alert alert-dismissible fade show" style="width: 100%;    color: #ff4d4f;
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
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close" wire:click="closeModal()"></button>
                                            </div>
                                        @endif
                                        @if($message)
                                            <div class="alert alert-dismissible fade show" style="width: 100%;color: #0be881;
                                                    background-color: #17312a;
                                                    background-image: none;
                                                    border-color: #0d8951;"
                                                 role="alert">
                                                @if($messageType=='success')
                                                    <h4>Sukses</h4>
                                                @endif
                                                <p class="text-sm">{{$message}}</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close" wire:click="closeModal()"></button>
                                            </div>

                                        @endif
                                        <progress max="100" wire:loading></progress>
                                        <img
                                            src="{{$screenshot?$screenshot->temporaryUrl():asset('/img/global/placeholder-image.png')}}"
                                            class="img-fluid" alt="Screenshot"
                                            style="max-height:50vh">
                                        <input type="file"
                                               wire:model.defer="screenshot"
                                               class="form-control-file"
                                               name="ss_proof"
                                               id="ss_proof"
                                               accept=".jpg,.jpeg,.png"
                                               hidden>
                                    </div>
                                    <button class="btn btn-gradient text-uppercase my-3" type="button"
                                            onclick="$('#ss_proof').click()">
                                        <i
                                            class="fas fa-upload me-2"></i>
                                        Unggah screenshot kamu di sini
                                    </button>
                                    @if($screenshot)
                                        <button class="btn btn-gradient text-uppercase" type="button"
                                                wire:click="submit"
                                                onclick="let platform= $('input[name=platform]:checked').val();
                                                        @this.platform = platform">
                                            Kirim
                                        </button>
                                    @endif
                                @else
                                    <div class="d-flex flex-column align-items-center text-white">
                                        <h4 class="fw-bold">Silahkan masuk menggunakan akun ISE anda
                                            terlebih dahulu</h4>
                                        <a class="btn btn-gradient text-uppercase mt-2" style="background: linear-gradient(90deg, #e700c8 0%, #961adf 100.11%);
    border: none;" href="{{route('login')}}">Login</a>
                                    </div>
                                @endif
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

    <link rel="stylesheet" href="{{asset('/css/startup-landing/navbar.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('/css/virtual-play/style.css?ver_date='.date('YmdHis',filemtime('css/e-hall/style.css')))}}"/>
    <link rel="stylesheet"
          href="{{asset('/css/share-hois/style.css?ver_date='.date('YmdHis',filemtime('css/share-hois/style.css')))}}"/>
    <style>
        .btn-close {
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat
        }

        .icon {
            font-size: 2.5rem;
        }
    </style>

@endpush

@push('js')
    <script src="{{asset('/js/icon/custom.js')}}"></script>
    <script>
        $('#btn-copy').on('click',function(){
            var r = document.createRange();
            r.selectNode(document.getElementById('caption'));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(r);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            alert('Caption berhasil disalin');
        })
    </script>
@endpush



