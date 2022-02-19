@section('title','ISE Quest')
<div>
    <div class="bg" style="background-position: center;">
        <!--navbar section-->
        <livewire:components.e-hall.navbar/>
        <!-- End of Section -->

        @if(Auth::check()&&Auth::user()->userType=='member')
            <nav class="navbar navbarsl navbar-custom fixed-top navbar-expand-lg container-fluid" id="navbar2">

                <div class="me-lg-5 nav-link my-1" id="daftar">{{Auth::user()->userable->hois_point}} Points</div>
            </nav>
        @endif

    <!--select-level section start -->
        <section class="select-level" id="select-level">
            <h1 class="text-center" id="select-title">ISE QUEST</h1>
            <div class="container">
                <div class="select-container">

                    <div class="accordion accordion-flush p-md-5" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-heading-rule">
                                <button class="accordion-button rounded collapsed" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapserule" aria-expanded="true"
                                        aria-controls="collapserule">
                                    <strong class="px-4 ">Peraturan</strong>
                                </button>
                            </h2>
                            <div id="collapserule" class="accordion-collapse collapse"
                                 aria-labelledby="headingrule">
                                <div class="accordion-body ps-5 pe-0 py-0">
                                    <div
                                        class="select-quiz rounded align-items-end d-flex justify-content-between ps-5 py-3 my-3">
                                        <p>
                                            <ol type="i" class="text-dark">
                                                <li>Tiap pemain harus memiliki akun pada website ISE! 2021</li>
                                                <li>Poin yang didapatkan dari ISE Quest akan masuk ke dalam poin peserta
                                                    di virtual play
                                                </li>
                                                <li>Tiap quiz berbobot 300 poin dan baru didapatkan jika pemain
                                                    memenangkan quiz.
                                                </li>
                                                <li>Pemain dihitung mengerjakan games jika pemain sudah mensubmit sebuah
                                                    jawaban. Jika pemain membuka quiz saja dan tidak melakukan submit
                                                    maka tidak mendapatkan poin apapun.
                                                </li>
                                                <li>Tiap quiz hanya dapat dikerjakan satu kali.</li>
                                                <li>Selama website masih dibuka pemain dapat melakukan permainan.</li>
                                                <li>Batas terakhir ISE Quest adalah 7 November 2021 pukul 16.00 WIB.
                                                    Pemenang akan diumumkan di media sosial resmi ISE melalui instagram
                                                    @is_expo
                                                </li>
                                            </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($levels as $level)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading{{$level->id}}">
                                    @if(\Carbon\Carbon::now() > date('Y-m-d H:i:s',strtotime($level->open_time.' 09:00:00')))
                                        <button class="accordion-button rounded collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{$level->id}}" aria-expanded="true"
                                                aria-controls="collapse{{$level->id}}">
                                            <strong class="px-4 ">{{$level->name}}</strong>
                                        </button>
                                    @else
                                        <button class="level-button rounded">
                                            <div
                                                class="d-flex align-item-center justify-content-lg-between justify-content-start">
                                                <div>
                                                    <strong class="px-4">{{$level->name}}</strong>
                                                </div>
                                                <div>
                                                    <i class="fas fa-circle"></i>
                                                    <small class="">Quiz dibuka
                                                        pada {{date('d F Y',strtotime($level->open_time))}} 09:00
                                                        WIB</small>
                                                </div>
                                                <div>
                                                    <i class="fas fa-lock lock"></i>
                                                </div>

                                            </div>
                                        </button>
                                    @endif
                                </h2>
                                <div id="collapse{{$level->id}}" class="accordion-collapse collapse"
                                     aria-labelledby="heading{{$level->id}}">
                                    <div class="accordion-body ps-5 pe-0 py-0">
                                        @foreach ($level->quizzes as $quizNo=>$quiz)
                                            <div
                                                class="select-quiz rounded align-items-end d-flex justify-content-between ps-5 py-3 my-3">
                                                <h5 class="">Quiz {{$quizNo+1}}</h5>
                                                @if(Auth::check()&&\Auth::user()->userType=='member'&&\Auth::user()->userable->quizAnswers->where('quiz_id' ,  $quiz->id)->first())
                                                    <button wire:click="kuisGo({{$quiz->id}})"
                                                            class="btn btn-go ms-auto me-3 px-4 py-1"><i
                                                            class="fas fa-check"></i></button>
                                                @else
                                                    <button wire:click="kuisGo({{$quiz->id}})"
                                                            class="btn btn-go ms-auto me-3 px-4 py-1">Go
                                                    </button>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
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


    <link rel="stylesheet" href="{{asset('/css/icon/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/startup-landing/navbar.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('/css/e-hall/style.css?ver_date='.date('YmdHis',filemtime('css/e-hall/style.css')))}}"/>
    <link rel="stylesheet"
          href="{{asset('/css/quest/style.css?ver_date='.date('YmdHis',filemtime('css/e-hall/style.css')))}}"/>


@endpush

@push('js')
    <script src="{{asset('/js/icon/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/icon/custom.js')}}"></script>
@endpush

