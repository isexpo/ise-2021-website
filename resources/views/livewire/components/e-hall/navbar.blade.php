<nav class="navbar navbar-expand-lg fixed-top" style="background: #20022E !important;">
    <div class="container-fluid text-center">
        <a class="navbar-brand" href="@if(!config('app.debug')) https://ise-its.com/ @else {{route('ise-landing')}} @endif"><img
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
                    <a class="nav-link" aria-current="page" href="{{route('icon-landing.index')}}">ICON Home</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuEvent"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('virtual-play.index')}}">Leaderboard</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuEvent"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
