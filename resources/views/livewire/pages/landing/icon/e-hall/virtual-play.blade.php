@section('title','Virtual Play')
@section('desc','Pameran e–Hall of IS diselenggarakan secara digital, menggunakan platform website ISE 2021, dan disajikan dalam bentuk video profil, artikel, dan permainan berupa quiz dan challenge.')
<div>
    {{-- Success is as dangerous as failure. --}}
    <div>
        <div class="bg">
            <!--navbar section-->
            <livewire:components.e-hall.navbar/>
            <!-- End of Section -->


            <nav class="navbar navbarsl navbar-custom fixed-top navbar-expand-lg container-fluid" id="navbar2">

                <ul class="nav ms-xl-3 ml-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#Leader">Leaderboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#game-list">Games</a>
                    </li>
                </ul>
                @if(Auth::check()&&Auth::user()->userType=='member')
                    <div class="me-lg-5 nav-link my-1" id="daftar">{{Auth::user()->userable->hois_point}} Points</div>
                @endif

            </nav>
            <!-- End of Section -->


            <!-- header section start -->
            <section class="header" id="home">
                <div class="container">
                    <div class="row text-center">
                        <h1>Virtual
                            <br>
                            Play</h1>
                    </div>
                </div>
            </section>
            <!-- End of Section -->

            <!--Leaderboard Section-->
            <section id="Leader">
                <div class="container">
                    <div class="d-flex row  text-center p-0 m-0 align-items-end">
                        <div class="col p-0">
                            <h3 class="pb-5">{{sizeof($leaderboard)>2?$leaderboard[2]->userData->name:'?'}}</h3>
                            <div class="box box1">
                                <h1>3</h1>
                                <h3 class="martop1">{{sizeof($leaderboard)>2?$leaderboard[2]->hois_point:'0'}}</h3>
                                <h4 class="regu">POINTS</h4>
                            </div>
                        </div>
                        <div class="col  p-0">
                            <h3 class="pb-5">{{sizeof($leaderboard)>0?$leaderboard[0]->userData->name:'?'}}</h3>
                            <div class="box box2">
                                <h1>1</h1>
                                <h3 class="martop2">{{sizeof($leaderboard)>0?$leaderboard[0]->hois_point:'?'}}</h3>
                                <h4 class="regu">POINTS</h4>
                            </div>

                        </div>
                        <div class="col p-0">
                            <h3 class="pb-5">{{sizeof($leaderboard)>1?$leaderboard[1]->userData->name:'?'}}</h3>
                            <div class="box box3">
                                <h1>2</h1>
                                <h3 class="martop3">{{sizeof($leaderboard)>1?$leaderboard[1]->hois_point:'?'}}</h3>
                                <h4 class="regu">POINTS</h4>
                            </div>
                        </div>
                        @if($current_rank>3)
                            <div class="col p-0">
                                <h3 class="pb-5">You</h3>
                                <div class="box box4">
                                    <h1>{{$current_rank}}</h1>
                                    <h3 class="martop4">{{Auth::user()->userable->hois_point}}</h3>
                                    <h4 class="regu">POINTS</h4>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="line mt-5  text-center">
                    <h4 class="regu"><img src="{{asset('img/startup-landing/Line 39.png')}}" alt=""> Leaderboard ISE
                        Quest <img src="{{asset('img/startup-landing/Line 39.png')}}" alt=""></h4>
                </div>
            </section>
            <!-- End of Section -->


            <!-- Card Section -->
            <section id="game-list">
                <div class="container">
                    <h1 class="text-center text-white">Games</h1>
                    <h5 class="fw-normal text-center text-white">Gain more points and prizes with playing our
                        games.</h5>
                    <div class="mt-4 row justify-content-center">
                        <div class="col-12 col-lg-3 py-lg-0 py-5">
                            <div class="card ise-quest" style="height: 100%;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title">ISE Quest</h5>
                                    <p class="card-text">Permainan multi level dengan pemberian soal berupa quiz /
                                        challenge seputar ISE, Pameran e-Hall of IS, dan teknologi pada setiap
                                        Levelnya.</p>
                                    <div class="text-center">
                                        <a href="{{route('isequest.index')}}" class=" px-4 btn btn-primary">Go</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 py-lg-0 py-5">
                            <div class="card technical-it" style="height: 100%;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title">Technical IT</h5>
                                    <p class="card-text">Permainan quiz yang terdiri dari 20 soal seputar logika,
                                        machine learning, dan data.</p>
                                    <div class="text-center text-white">
                                        @if(date('Y-m-d')<date('Y-m-d',strtotime('2021-10-18')))
                                            <p>Coming Soon </br>Open at 18 October 2021 </p>
                                        @else
                                            <a href="{{route('technical-it.index')}}"
                                               class=" px-4 btn btn-primary">Go</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card hall-is" style="height: 100%;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title">Share E-Hall of IS</h5>
                                    <p class="card-text">Permainan berupa challenge untuk menyebarkan informasi seputar
                                        e–Hall of IS 2021 melalui media sosial pemain.</p>
                                    <div class="text-center text-white">
                                        <a href="{{route('share-hois.index')}}"
                                           class=" px-4 btn btn-primary">Go</a>
                                    </div>
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
          href="{{asset('/css/virtual-play/style.css?ver_date='.date('YmdHis',filemtime('css/virtual-play/style.css')))}}"/>


@endpush

@push('js')
    <script src="{{asset('/js/icon/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/icon/custom.js')}}"></script>
@endpush


