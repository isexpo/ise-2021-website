<div>
    <!--navbar section-->
    <div class="nav-container">
        <nav class="navbar navbar-light navbar-custom fixed-top navbar-expand-lg container-fluid mb-5">
            <div class="logo"><a class="navbar-brand" href="{{config('app.url')}}"><img
                        src="{{asset('img/bionix/logo-ise-2021.svg')}}"
                        alt="logo ISE! 2021"/></a></div>
            <div class="collapse navbar-collapse w-100 order-3 dual-collapse2 list" id="collapse_target">
                <ul class="border-0 nav navbar-nav nav-tabs ms-auto" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link @if($type==null) active @endif" href="{{route('bionix-landing')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('bionix-landing',['type'=>'student'])}}"
                           class="nav-link @if($type=='student') active @endif">Student Level</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('bionix-landing',['type'=>'college'])}}"
                           class="nav-link @if($type=='college') active @endif">College
                            Level</a>
                    </li>
                </ul>
                @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="usernav"><i class="far fa-user"></i> {{Auth::user()->name}} <i
                                class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{route('dashboard.index')}}">Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('logout')}}"
                                   onclick="event.preventDefault();
                $('#logout').submit();">Keluar</a>
                                <form action="{{ route('logout') }}" method="POST" id="logout"> @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <a class="nav-link login" href="{{route('login')}}">Login</a>
                @endif
            </div>
            <button class="navbar-toggle menu-btn mr-5" data-bs-toggle="collapse" data-bs-target="#collapse_target">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    @livewire($page)

    <div class="whatsapp" id="whatsapp" title="Contact us!">
          <div class="whatsapp-desktop">
            <button class="btn-close" id="close-wa" type="button"></button>
            <p class="text-center" style="color: whitesmoke;">Punya Pertanyaan atau Butuh Bantuan?<br> Hubungi Contact Person BIONIX</p>
            <a href="https://wa.me/6285624939354" target="_blank" class="btn text-center"><i class="fab fa-whatsapp" style="font-size: 20px;"></i> 0856 2493 9354</a>
          </div>
          <div class="whatsapp-icon">
            <i class="fab fa-whatsapp" style="color: whitesmoke;font-size: 30px;"></i>
          </div>
          <div class="whatsapp-responsive">
            <a href="https://wa.me/6285624939354" target="_blank">
              <i class="fab fa-whatsapp" style="color: whitesmoke;font-size: 30px;"></i>
            </a>
          </div>
        </div>

</div>
@push('css')
    <link rel="stylesheet" href="{{asset('/css/landing/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/bionix/style.css?ver_date='.date('YmdHis',filemtime('css/bionix/style.css')))}}"/>
    <link rel="stylesheet" href="{{asset('/css/bionix/normalize.min.css')}}"/>
    <style>
        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns= 'http://www.w3.org/2000/svg' viewBox= '0 0 16 16' fill= '%23000' %3e%3cpath fill-rule= 'evenodd' d= 'M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 3 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z' /%3e%3c/svg%3e");
            transform: rotate(
                -180deg
            );
        }

        .accordion-button::after {
            flex-shrink: 0;
            width: 1.25rem;
            height: 1.25rem;
            margin-left: auto;
            content: "";
            background-image: url("data:image/svg+xml,%3csvg xmlns= 'http://www.w3.org/2000/svg' viewBox= '0 0 16 16' fill= '%23000' %3e%3cpath fill-rule= 'evenodd' d= 'M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z' /%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 1.25rem;
            transition: transform .2s ease-in-out;
        }
    </style>
@endpush

@push('js')
    <script src="{{asset('/js/landing/swiper-bundle.min.js')}}"></script>
    <!-- <script src="{{asset('/js/ds-landing/jquery.min.js')}}"></script> -->
    <script src="{{asset('/js/bionix/custom.js')}}"></script>
@endpush
