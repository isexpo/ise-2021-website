@section('title','Stratek')
@section('desc','Stratek merupakan startup jasa berbasis IT, yang
                            mengedepankan aspek kepuasan pelanggan, kerja tepat dan berintegritas. Berfokus pada
                            Pengembangan Software, ERP, Pengembangan Game, dan Digital Marketing.')
<div>
    <div class="bg-article">
        <!--navbar section-->

        <livewire:components.e-hall.navbar/>

        @if(Auth::check()&&Auth::user()->userType=='member')
            <nav class="navbar navbarsl navbar-custom fixed-top navbar-expand-lg container-fluid" id="navbar2">
                <div class="me-lg-5 nav-link my-1" id="daftar">{{Auth::user()->userable->hois_point}} Points</div>
            </nav>
    @endif
    <!-- End of Section -->

        <!-- header section start -->
        <section class="header h-screen d-flex" id="home" style="min-height: 100vh;">
            <div class="container-fluid position-relative mx-0 px-0">
                <div class="row mx-5" style="height: 100%;">
                    <div
                        class="col-lg-6 d-flex flex-column align-items-center justify-content-end order-5 order-lg-1">
                        <img class="z-0 img-fluid mb-lg-5 img-icon"
                             src="{{asset('img/icon/e-hall/article/stratek/founder.png')}}" alt=""
                        >
                    </div>
                    <div
                        class="col-lg-6 order-1 order-lg-5 pb-lg-5 mb-lg-5 d-flex flex-column align-items-center justify-content-end px-lg-3">
                        <iframe src="https://www.youtube.com/embed/O1M0s_TY4Zk"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                width="560" height="315" class="d-none d-xl-block"></iframe>
                        <iframe src="https://www.youtube.com/embed/O1M0s_TY4Zk"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                width="480" height="280" class="d-none d-sm-block d-xl-none"></iframe>
                        <iframe src="https://www.youtube.com/embed/O1M0s_TY4Zk"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                width="240" height="157" class="d-block d-sm-none"></iframe>
                        <h2 class="my-4 text-4xl">Stratek</h2>
                        <p class="hindreg text-base pb-lg-5 mb-lg-5">Stratek merupakan startup jasa berbasis IT, yang
                            mengedepankan aspek kepuasan pelanggan, kerja tepat dan berintegritas. Berfokus pada
                            Pengembangan Software, ERP, Pengembangan Game, dan Digital Marketing.
                        </p>
                    </div>
                </div>
                <img class="position-absolute bottom-0 img-ripple"
                     src="{{asset('/img/icon/e-hall/article/vector.png')}}"
                     alt="">
            </div>
        </section>
        <!-- End of Section -->
    </div>

    <!-- Artikel Section -->
    <section class="bg-article2 min-h-screen mt-0 text-center" style="color:#380152;">
        <div class="container" style="padding-top: 5rem !important; font-size: 25px;">
            <div class="pb-5">
                <p class="px-lg-5 mx-5"><strong>Stratek merupakan</strong> startup jasa berbasis IT, yang mengedepankan
                    aspek kepuasan
                    pelanggan, kerja tepat dan berintegritas. Berfokus pada Pengembangan Software, ERP, Pengembangan
                    Game, dan Digital Marketing.

                </p>
                <p class="mt-5 px-lg-5 mx-5"><strong>Didirikan oleh</strong> mahasiswa Sistem Informasi ITS yaitu Aliif
                    Gadri dan Rio
                    Ikhsan bersama dua orang mahasiswa ITS lainnya, Osama Rizqi dan Ilham Najmuddin dengan tujuan awal
                    dari Stratek yaitu menjadi solusi terbaik dalam mengatasi permasalahan mahasiswa di bidang IT dengan
                    harga yang affordable untuk event/organisasi dengan kualitas terbaik. <strong>Kini</strong> Stratek
                    menyediakan jasa
                    yang terbaik dengan harga terjangkau dalam pengembangan teknologi IT untuk membantu bisnis - bisnis
                    mencapai tujuannya dan juga membantu human resources menyelesaikan permasalahannya.

                </p>
                <p class="mt-5 px-lg-5 mx-5"><strong>Melalui jasa yang ditawarkannya</strong>, Departemen Sistem
                    Informasi
                    ITS
                    sangat bangga terhadap Stratek karena telah menjadi katalis terhadap perkembangan bisnis dan
                    ekonomi di
                    Indonesia.
                </p>
            </div>

            <div class="mt-5">
                <h2 class="hindbold">Program yang diusung</h2>
                <p class="mt-5 fw-bold">StratekConnect
                </p>
                <p class="px-lg-5 mx-5">Membangun sistem informasi untuk perusahaan manufaktur atau jasa lainnya untuk
                    meningkatkan sistem perusahaannya menjadi digital, akurat, dan prediktif.
                </p>
                <p class="mt-5 fw-bold">StratekCommerce
                </p>
                <p class="px-lg-5 mx-5">Menyediakan layanan pembuatan website, aplikasi, dan platform toko online untuk
                    mendukung bisnis komunitas.
                </p>
                <p class="mt-5 fw-bold">StratekBoost
                </p>
                <p class="px-lg-5 mx-5">Menyediakan layanan Branding dan Pemasaran untuk bisnis komunitas.</p>
                <p class="mt-5 fw-bold">StratekVirtual
                </p>
                <p class="px-lg-5 mx-5">Pengembangan Game, Tur Virtual, dan Site Plan yang inovatif dan menarik.
                </p>
                <p class="mt-5 fw-bold">StratekAnalyze
                </p>
                <p class="px-lg-5 mx-5">Fokus pada proses analisis data bisnis masyarakat dan juga pemetaan spasial (GIS
                    Mapping).
                </p>
            </div>
            <div class="mt-5 pt-5">
                <h2 class="hindbold">Galeri</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/stratek/pic1.png')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/stratek/pic2.png')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/stratek/pic3.png')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/stratek/pic4.png')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/stratek/pic5.png')}}" class="img-fluid"/>
                    </div>

                </div>
            </div>
        </div>
        <!-- Quiz -->
        <div class="container quest" id="quest" style="margin-bottom: 0;padding-top: 0">
            @foreach ($quizzes as $quizNo => $quiz)
                @switch($quiz->type)
                    @case('Pilgan')
                    <div class="quest-content {{$currentQuiz==$quizNo?'':'d-none'}}"
                         style="margin-bottom: 0;background:none;">
                        <div class="container-fluid">
                            <div class="row title-quiz">
                                <div class="col-12">
                                    <h2 class="text-start text-dark text-center">Quiz {{$quizNo+1}}</h2>
                                </div>
                                @if(Auth::check())
                                    @if($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-success')
                                        <div class="col-12 d-flex align-items-center flex-column">
                                            <span class="point fw-bold text-dark"> <span style="color:#2ecc71;">+300</span> Points</span>
                                        </div>
                                    @elseif ($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-danger')
                                        <div class="col-12 d-flex align-items-center flex-column">
                                            <span class="point fw-bold text-dark"> <span
                                                    class="text-danger">+0</span> Points</span>
                                        </div>
                                    @else
                                    @endif
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <div class="container-fluid question" id="question">
                                        <h1>{{$quiz->question}}</h1>
                                        <div class="answers text-center">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col text-md-end text-center">
                                                        <input type="radio" name="pilgan-answer" value="A"
                                                               id="pilgan-a-{{$quizNo}}"/>
                                                        <button class="btn pilgan"
                                                                onclick="$('#pilgan-a-{{$quizNo}}').prop('checked',true)"
                                                        >{{$quiz->opt_a}}</button>
                                                    </div>
                                                    <div class="col text-md-start text-center">
                                                        <input type="radio" name="pilgan-answer" value="B"
                                                               id="pilgan-b-{{$quizNo}}"/>
                                                        <button class="btn pilgan"
                                                                onclick="$('#pilgan-b-{{$quizNo}}').prop('checked',true)"
                                                        >{{$quiz->opt_b}}</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-md-end text-center">
                                                        <input type="radio" name="pilgan-answer" value="C"
                                                               id="pilgan-c-{{$quizNo}}"/>
                                                        <button class="btn pilgan"
                                                                onclick="$('#pilgan-c-{{$quizNo}}').prop('checked',true)"
                                                        >{{$quiz->opt_c}}</button>
                                                    </div>
                                                    <div class="col text-md-start text-center">
                                                        <input type="radio" name="pilgan-answer" value="D"
                                                               id="pilgan-d-{{$quizNo}}"/>
                                                        <button class="btn pilgan"
                                                                onclick="$('#pilgan-d-{{$quizNo}}').prop('checked',true)">{{$quiz->opt_d}}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if(Auth::check()&&Auth::user()->userType=='member')
                                            @if ($quizStatus[$currentQuiz]['is_done'])
                                                <hr style="height: 2px">
                                                <div class="explanation">
                                                    <div class="d-block answer"><small
                                                            class="bg-success text-white py-1">{{$quiz->answer}}</small>
                                                    </div>
                                                    <div class="mt-3 px-2 text">{!!$quiz->explanation!!}</div>
                                                </div>
                                            @else
                                                <div class="submit text-md-end text-center">
                                                    <input type="submit" wire:click="$emit('submit')" onclick="
                                                        let answer = $('input[name=pilgan-answer]:checked').val();
                                                        @this.answer= answer" class="btn"/>
                                                </div>
                                            @endif
                                        @else
                                            <div class="d-flex flex-column align-items-center">
                                                <p class="pb-0">Silahkan masuk menggunakan akun ISE anda terlebih
                                                    dahulu</p>
                                                <a class="btn text-white" style="background: linear-gradient(90deg, #e700c8 0%, #961adf 100.11%);
    border: none;" href="{{route('login')}}">Login</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 question-page">
                                    <div class="row">
                                        @foreach ($quizzes as $quizNo => $quiz)
                                            <button wire:click="moveQuestion({{$quizNo-$currentQuiz}})"
                                                    class="btn {{$quizStatus[$quizNo]['btnStatus']}} {{$currentQuiz==$quizNo?'btn-active':''}}">{{$quizNo+1}}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row pagination">
                                @if($loop->first)
                                    <div class="col text-md-start text-center">
                                        <button disabled class="btn" wire:click="moveQuestion(-1)"
                                                id="previous-btn">Previous page
                                        </button>
                                    </div>
                                @else
                                    <div class="col text-md-start text-center">
                                        <button class="btn" wire:click="moveQuestion(-1)" id="previous-btn">Previous
                                            page
                                        </button>
                                    </div>
                                @endif

                                @if($loop->last)
                                    <div class="col text-md-end text-center">
                                        <button disabled class="btn" wire:click="moveQuestion(1)" id="next-btn">Next
                                            page
                                        </button>
                                    </div>
                                @else
                                    <div class="col text-md-end text-center">
                                        <button class="btn" wire:click="moveQuestion(1)" id="next-btn">Next page
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @break
                    @case('Isian')
                    <div class="quest-content {{$currentQuiz==$quizNo?'':'d-none'}} "
                         style="margin-bottom: 0;background:none;">
                        <div class="container-fluid">
                            <div class="row title-quiz">
                                <div class="col-12">
                                    <h2 class="text-start text-dark text-center">Quiz {{$quizNo+1}}</h2>
                                </div>
                                @if(Auth::check())
                                    @if($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-success')
                                        <div class="col-12 d-flex align-items-center flex-column">
                                            <span class="point fw-bold text-dark"> <span style="color:#2ecc71;">+300</span> Points</span>
                                        </div>
                                    @elseif ($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-danger')
                                        <div class="col-12 d-flex align-items-center flex-column">
                                            <span class="point fw-bold text-dark"> <span
                                                    class="text-danger">+0</span> Points</span>
                                        </div>
                                    @else
                                    @endif
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <div class="container-fluid question" id="question">
                                        <h1>{{$quiz->question}}</h1>
                                        <div class="answers text-center">
                                            <div class="form-group mb-3 ">
                                                <input type="text" class="form-control" wire:model="answer"
                                                       id="input-text" placeholder="Fill in the blank...">
                                                @if(Auth::check()&&Auth::user()->userType=='member')
                                                    @if (!$quizStatus[$currentQuiz]['is_done'])

                                                        <div class="submit mt-4 text-md-end text-center">
                                                            <input type="submit" class="btn"
                                                                   wire:click="$emit('submit')" id="submit-text"/>
                                                        </div>
                                                    @endif
                                                @else
                                                    <div class="d-flex flex-column align-items-center mt-4">
                                                        <p class="pb-0">Silahkan masuk menggunakan akun ISE anda
                                                            terlebih dahulu</p>
                                                        <a class="btn text-white" style="padding:.5em 2.5em;height:auto;background: linear-gradient(90deg, #e700c8 0%, #961adf 100.11%);
    border: none;" href="{{route('login')}}">Login</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        @if($quizStatus[$currentQuiz]['is_done'])
                                            <hr style="height: 2px">
                                            <div class="explanation">
                                                <div class="d-block answer"><small
                                                        class="bg-success text-white py-1">{{$quiz->answer}}</small>
                                                </div>
                                                <div class="mt-3 px-2 text">{!!$quiz->explanation!!}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 question-page">
                                    <div class="row">
                                        @foreach ($quizzes as $quizNo => $quiz)
                                            <button wire:click="moveQuestion({{$quizNo-$currentQuiz}})"
                                                    class="btn {{$quizStatus[$quizNo]['btnStatus']}} {{$currentQuiz==$quizNo?'btn-active':''}}">{{$quizNo+1}}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row pagination">
                                @if($loop->first)
                                    <div class="col text-md-start text-center">
                                        <button disabled class="btn" wire:click="moveQuestion(-1)"
                                                id="previous-btn">Previous page
                                        </button>
                                    </div>
                                @else
                                    <div class="col text-md-start text-center">
                                        <button class="btn" wire:click="moveQuestion(-1)" id="previous-btn">Previous
                                            page
                                        </button>
                                    </div>
                                @endif



                                @if($loop->last)
                                    <div class="col text-md-end text-center">
                                        <button disabled class="btn" wire:click="moveQuestion(1)" id="next-btn">Next
                                            page
                                        </button>
                                    </div>
                                @else
                                    <div class="col text-md-end text-center">
                                        <button class="btn" wire:click="moveQuestion(1)" id="next-btn">Next page
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>


                    @break
                    @case('ToF')

                    <div class="quest-content {{$currentQuiz==$quizNo?'':'d-none'}}"
                         style="margin-bottom: 0;background:none;">
                        <div class="container-fluid">
                            <div class="row title-quiz">
                                <div class="col-12">
                                    <h2 class="text-start text-dark text-center">Quiz {{$quizNo+1}}</h2>
                                </div>
                                @if(Auth::check())
                                    @if($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-success')
                                        <div class="col-12 d-flex align-items-center flex-column">
                                            <span class="point fw-bold text-dark"> <span style="color:#2ecc71;">+300</span> Points</span>
                                        </div>
                                    @elseif ($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-danger')
                                        <div class="col-12 d-flex align-items-center flex-column">
                                            <span class="point fw-bold text-dark"> <span
                                                    class="text-danger">+0</span> Points</span>
                                        </div>
                                    @else
                                    @endif
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <div class="container-fluid question" id="question">
                                        <h1>{{$quiz->question}}</h1>
                                        <div class="answers text-center d-flex justify-content-center">
                                            <input type="radio" name="tof-answer" value="true"
                                                   id="tof-true-{{$quizNo}}"/>
                                            <button
                                                onclick="$('#tof-true-{{$quizNo}}').prop('checked',true)"
                                                class="btn btn-success">
                                                True
                                            </button>

                                            <input type="radio" name="tof-answer" value="false"
                                                   id="tof-false-{{$quizNo}}"/>
                                            <button
                                                onclick="$('#tof-false-{{$quizNo}}').prop('checked',true)"
                                                class="btn btn-danger">
                                                False
                                            </button>
                                        </div>
                                        @if(Auth::check()&&Auth::user()->userType=='member')
                                            @if ($quizStatus[$currentQuiz]['is_done'])
                                                <hr style="height: 2px">
                                                <div class="explanation">
                                                    <div class="d-block answer"><small
                                                            class="bg-success text-white py-1">{{$quiz->answer}}</small>
                                                    </div>
                                                    <div class="mt-3 px-2 text">{!!$quiz->explanation!!}</div>
                                                </div>
                                            @else
                                                <div class="submit text-md-end text-center">
                                                    <input type="submit" wire:click="$emit('submit')" onclick="
                                                        let answer = $('input[name=tof-answer]:checked').val();
                                                        @this.answer= answer" class="btn"/>
                                                </div>
                                            @endif
                                        @else
                                            <div class="d-flex flex-column align-items-center">
                                                <p class="pb-0">Silahkan masuk menggunakan akun ISE anda
                                                    terlebih dahulu</p>
                                                <a class="btn text-white" style="background: linear-gradient(90deg, #e700c8 0%, #961adf 100.11%);
    border: none;" href="{{route('login')}}">Login</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 question-page">
                                    <div class="row">
                                        @foreach ($quizzes as $quizNo => $quiz)
                                            <button wire:click="moveQuestion({{$quizNo-$currentQuiz}})"
                                                    class="btn {{$quizStatus[$quizNo]['btnStatus']}} {{$currentQuiz==$quizNo?'btn-active':''}}">{{$quizNo+1}}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row pagination">
                                @if($loop->first)
                                    <div class="col text-md-start text-center">
                                        <button disabled class="btn" wire:click="moveQuestion(-1)"
                                                id="previous-btn">Previous page
                                        </button>
                                    </div>
                                @else
                                    <div class="col text-md-start text-center">
                                        <button class="btn" wire:click="moveQuestion(-1)" id="previous-btn">Previous
                                            page
                                        </button>
                                    </div>
                                @endif



                                @if($loop->last)
                                    <div class="col text-md-end text-center">
                                        <button disabled class="btn" wire:click="moveQuestion(1)" id="next-btn">Next
                                            page
                                        </button>
                                    </div>

                                @else
                                    <div class="col text-md-end text-center">
                                        <button class="btn" wire:click="moveQuestion(1)" id="next-btn">Next page
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @break

                    @default

                @endswitch
            @endforeach
        </div>
    </section>
    <!-- End of section -->

    <!-- whatsapp section -->
@include('livewire.pages.landing.icon.whatsapp')
<!-- End of WA section -->

    @push('css')
        <link rel="stylesheet" href="{{asset('/css/startup-landing/navbar.css')}}"/>
        <link rel="stylesheet" href="{{asset('/css/icon/swiper-bundle.min.css')}}"/>
        <link rel="stylesheet"
              href="{{asset('/css/e-hall/style.css?ver_date='.date('YmdHis',filemtime('css/e-hall/style.css')))}}"/>
        <link rel="stylesheet"
              href="{{asset('/css/virtual-play/style.css?ver_date='.date('YmdHis',filemtime('css/virtual-play/style.css')))}}"/>
        <link rel="stylesheet" href="{{asset('/css/quest/style.css?ver_date='.date('YmdHis',filemtime('css/e-hall/style.css')))}}"/>
        <link rel="stylesheet" href="{{asset('/css/e-hall/article.css?ver_date='.date('YmdHis',filemtime('css/e-hall/style.css')))}}"/>
        <style>
            body {
                overflow-x: hidden;
            }
        </style>
    @endpush

    @push('js')
        <script src="{{asset('/js/icon/swiper-bundle.min.js')}}"></script>
        <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{asset('/js/quest/custom.js')}}"></script>
        <script src="{{asset('/js/icon/custom.js')}}"></script>
    @endpush
</div>
