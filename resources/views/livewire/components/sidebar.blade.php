<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand" style="background: #FFFFFF;">
        <a href="{{route('ise-landing')}}"><img src="{{asset('img/global/logo_tulisan_kanan.png')}}"
                                                class="c-sidebar-brand-full px-4 py-2"/></a>
    </div>
    <ul class="c-sidebar-nav ps ps--active-y" style="background: #FFFFFF; padding-top: 0.8rem;">
        @foreach($menu as $m)
            @if($m['type']=='title')
                <li class="c-sidebar-nav-title mx-8 font-extrabold text-base p-0" style="color: #354B81">{{$m['title']}}</li>
            @elseif($m['type']=='menu')
                <li class="c-sidebar-nav-item @if(Route::current()->getName()==$m['route-name'])c-active @endif">
                    <a class="c-sidebar-nav-link" href="{{route($m['route-name'])}}">
                        <i class="c-sidebar-nav-icon {{$m['icon']}}"></i> {{$m['title']}}
                    </a>
                </li>
            @elseif($m['type']=='dropdown')
                <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                        <i class="c-sidebar-nav-icon {{$m['icon']}}"></i> {{$m['title']}}
                    </a>
                    <ul class="c-sidebar-nav-dropdown-items">
                        @foreach($m['items'] as $submenu)
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link @if(Route::current()->getName()==$submenu['route-name'])c-active @endif"
                                   href="{{route($submenu['route-name'])}}">
                                    <i class="c-sidebar-nav-icon"></i> {{$submenu['title']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @elseif($m['type']=='divider')
                <li class="c-sidebar-nav-item">
                    <hr/>
                </li>
            @endif
        @endforeach
        <li class="c-sidebar-nav-item @if(Route::current()->getName()=='bantuan')c-active @endif">
            <a class="c-sidebar-nav-link" href="{{route('bantuan')}}">
                <i class="far fa-question-circle c-sidebar-nav-icon"></i> Bantuan
            </a>
        </li>
        <li class="c-sidebar-nav-item @if(Route::current()->getName()=='ganti-password')c-active @endif">
            <a class="c-sidebar-nav-link" href="{{route('ganti-password')}}">
                <i class="c-sidebar-nav-icon cil-lock-locked"></i> Ganti Password
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link flex flex-row items-center logout hover:text-white" href="{{route('logout')}}"
               onclick="event.preventDefault();
                $('#logout').submit();">
                <i class="c-sidebar-nav-icon cil-account-logout logout hover:text-white"></i> Logout
            </a>
            <form action="{{ route('logout') }}" method="POST" id="logout"> @csrf
            </form>
        </li>
    </ul>
</div>
