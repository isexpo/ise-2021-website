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
        <section class="quest" id="quest">
            <h1 class="text-center" id="quest-title">ISE QUEST</h1>
            <div class="container">
                @foreach ($quizzes as $quizNo => $quiz)
                    @switch($quiz->type)
                        @case('Pilgan')
                        <div class="quest-content {{$currentQuiz==$quizNo?'':'d-none'}}">

                            <center><h2
                                    style="width: fit-content;padding-top:8px;border-bottom: 4px solid #CE00B1;padding-bottom: 8px;text-decoration: none;"
                                    class="text-center"> {{$quiz->level->name}}
                                </h2>
                            </center>
                            <center>
                                <a href="{{route('isequest.index')}}"
                                   style="padding:0;margin-top: 5px;" class="btn text-white">Back to all quiz!</a>
                            </center>
                            <div class="container-fluid">
                                <div class="row title-quiz">
                                    <div class="col-5">
                                        <h2 class="text-start">Quiz {{$quizNo+1}}</h2>
                                    </div>
                                    @if($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-success')
                                        <div class="col-7 d-flex align-items-center">
                                            <span class="point fw-bold"> <span style="color:#2ecc71;">+300</span> Points</span>
                                        </div>
                                    @elseif ($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-danger')
                                        <div class="col-7 d-flex align-items-center">
                                            <span class="point fw-bold"> <span
                                                    class="text-danger">+0</span> Points</span>
                                        </div>
                                    @else
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-12">
                                        <div class="container-fluid question" id="question">
                                            <h1>{{$quiz->question}}</h1>
                                            @if($quiz->img_path)
                                                <div
                                                    class="d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{asset('storage/'.$quiz->img_path)}}" class="img-fluid"/>
                                                </div>
                                            @endif
                                            <div class="answers text-center">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-6 text-md-end text-center">
                                                            <input type="radio" name="pilgan-answer" value="A"
                                                                   id="pilgan-a-{{$quizNo}}"/>
                                                            <button class="btn pilgan"
                                                                    onclick="$('#pilgan-a-{{$quizNo}}').prop('checked',true)"
                                                                    title="{{$quiz->opt_a}}"
                                                            >{{$quiz->opt_a}}</button>
                                                        </div>
                                                        <div class="col-lg-6 text-md-start text-center">
                                                            <input type="radio" name="pilgan-answer" value="B"
                                                                   id="pilgan-b-{{$quizNo}}"/>
                                                            <button class="btn pilgan"
                                                                    onclick="$('#pilgan-b-{{$quizNo}}').prop('checked',true)"
                                                                    title="{{$quiz->opt_b}}"
                                                                    id="btn-pilgan-b"
                                                            >{{$quiz->opt_b}}</button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 text-md-end text-center">
                                                            <input type="radio" name="pilgan-answer" value="C"
                                                                   id="pilgan-c-{{$quizNo}}"/>
                                                            <button class="btn pilgan"
                                                                    onclick="$('#pilgan-c-{{$quizNo}}').prop('checked',true)"
                                                                    title="{{$quiz->opt_c}}"
                                                            >{{$quiz->opt_c}}</button>
                                                        </div>
                                                        <div class="col-lg-6 text-md-start text-center">
                                                            <input type="radio" name="pilgan-answer" value="D"
                                                                   id="pilgan-d-{{$quizNo}}"/>
                                                            <button class="btn pilgan"
                                                                    onclick="$('#pilgan-d-{{$quizNo}}').prop('checked',true)"
                                                                    title="{{$quiz->opt_d}}"
                                                            >{{$quiz->opt_d}}</button>
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
                                            <button class="btn" wire:click="$emit('refreshPage')" id="next-btn">Next
                                                Level
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
                        <div class="quest-content {{$currentQuiz==$quizNo?'':'d-none'}} ">
                            <center><h2
                                    style="width: fit-content;padding-top:8px;border-bottom: 4px solid #CE00B1;padding-bottom: 8px;text-decoration: none;"
                                    class="text-center"> {{$quiz->level->name}}
                                </h2>
                            </center>
                            <center>
                                <a href="{{route('isequest.index')}}"
                                   style="padding:0;margin-top: 5px;" class="btn text-white">Back to all quiz!</a>
                            </center>
                            <div class="container-fluid">
                                <div class="row title-quiz">
                                    <div class="col-5">
                                        <h2 class="text-start">Quiz {{$quizNo+1}}</h2>
                                    </div>
                                    @if($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-success')
                                        <div class="col-7 d-flex align-items-center">
                                            <span class="point fw-bold"> <span style="color:#2ecc71;">+300</span> Points</span>
                                        </div>
                                    @elseif ($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-danger')
                                        <div class="col-7 d-flex align-items-center">
                                            <span class="point fw-bold"> <span
                                                    class="text-danger">+0</span> Points</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-12">
                                        <div class="container-fluid question" id="question">
                                            <h1>{{$quiz->question}}</h1>
                                            @if($quiz->img_path)
                                                <div
                                                    class="d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{asset('storage/'.$quiz->img_path)}}" class="img-fluid"/>
                                                </div>
                                            @endif
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
                                            <button class="btn" wire:click="$emit('refreshPage')" id="next-btn">Next
                                                Level
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

                        <div class="quest-content {{$currentQuiz==$quizNo?'':'d-none'}}">
                            <center><h2
                                    style="width: fit-content;padding-top:8px;border-bottom: 4px solid #CE00B1;padding-bottom: 8px;text-decoration: none;"
                                    class="text-center"> {{$quiz->level->name}}
                                </h2>
                            </center>
                            <center>
                                <a href="{{route('isequest.index')}}"
                                   style="padding:0;margin-top: 5px;" class="btn text-white">Back to all quiz!</a>
                            </center>
                            <div class="container-fluid">
                                <div class="row title-quiz">
                                    <div class="col-4">
                                        <h2 class="text-start">Quiz {{$quizNo+1}}</h2>
                                    </div>
                                    @if($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-success')
                                        <div
                                            class="col-8 d-flex align-items-center justify-content-end justify-content-lg-start">
                                            <span class="point fw-bold"> <span style="color:#2ecc71;">+300</span> Points</span>
                                        </div>
                                    @elseif ($quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['btnStatus']=='btn-danger')
                                        <div class="col-7 d-flex align-items-center">
                                            <span class="point fw-bold"> <span
                                                    class="text-danger">+0</span> Points</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-12">
                                        <div class="container-fluid question" id="question">
                                            <h1>{{$quiz->question}}</h1>
                                            @if($quiz->img_path)
                                                <div
                                                    class="d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{asset('storage/'.$quiz->img_path)}}" class="img-fluid"/>
                                                </div>
                                            @endif
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
                                            <button class="btn" wire:click="$emit('refreshPage')" id="next-btn">Next
                                                Level
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
        <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.all.min.js"></script>
        <script src="{{asset('/js/quest/custom.js')}}"></script>
        <script src="{{asset('/js/icon/custom.js')}}"></script>
    @endpush


</div>

