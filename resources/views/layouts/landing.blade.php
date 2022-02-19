<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title','Welcome to ISE! 2021') - {{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="@yield('desc','ISE! merupakan singkatan dari Information Systems Expo yang merupakan event tahunan yang diselenggarakan oleh Departemen Sistem Informasi Institut Teknologi Sepuluh Nopember Surabaya dalam rangka memperkenalkan Departemen Sistem Informasi ITS kepada masyarakat luas')">
    <meta name="keywords" content="@yield('keywords','ISE, Sistem Informasi ITS, Sistem Informasi, ITS, Olimpiade, Bisnis, TIK, Teknologi, Pameran IT, Konser')">
    <meta name="author" content="WebDev ISE! 2021">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('/css/quest/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/e-hall/footer.css')}}" />


    @livewireStyles
    @stack('css')

</head>

<body style="overflow-x:hidden">
    {{$slot}}
    @if(Route::current()->getName()!='coming-soon')

    <!--footer-->
    <footer class="footer py-2">
        <div class="container text-white" id="footer">
            <div class="row">
                <div class="col-12 col-sm-6 text-md-start text-center text-sm-left">
                    <img src="{{asset(str_contains(Route::current()->getName(),'bionix-landing')?'/img/bionix/logo-ise-2021-putih.svg':'/img/landing/logo-white.svg')}}" alt="logo ise 2021" class="img-fluid" width="120px" height="auto">
                </div>
                <div class="col-12 col-sm-6 text-center text-md-end" id="footer-right">
                    <h1>Temukan Kami di Sosial Media!</h1>
                    <div class="listsocmed">
                        <a href="https://ise-its.com/" target="_blank" title="Website">
                            <i class="fas fa-globe" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/is_expo/" target="_blank" title="Instagram">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/is_expo" target="_blank" title="Twitter">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCPbOX3w8G4_dwOMDNl97PTw" target="_blank" title="YouTube">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                        </a>
                        <a href="https://vt.tiktok.com/ZSaw8WST/" target="_blank" title="Tiktok">
                            <i class="fab fa-tiktok" aria-hidden="true"></i>
                        </a>
                        <a href="https://liff.line.me/1645278921-kWRPP32q?accountId=mfd0663i&openerPlatform=native&openerKey=home%3Arecommend#mst_challenge=KSQv32AA8YZ-u9i8CFefFJ6yj4ZX2kDJU5jfDmKiKq0" target="_blank" title="Line">
                            <i class="fab fa-line" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/information-systems-expo-ise/mycompany/" target="_blank" title="Linkedin">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-6 col-sm-3 text-center text-sm-start">
                    <ul>
                        <p><strong>Our Events</strong></p>
                        <li><a href="{{url('/')}}">ISE!</a></li>
                        <li><a href="{{route('icon-landing.index')}}">ICON</a></li>
                        <li><a href="{{route('bionix-landing')}}">BIONIX</a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-3 text-center text-sm-start">
                    <ul>
                        <p><strong>BIONIX</strong></p>
                        <li><a href="{{route('bionix-landing',['type'=>'student'])}}">BIONIX Student Level</a></li>
                        <li><a href="{{route('bionix-landing',['type'=>'college'])}}">BIONIX College Level</a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-3 text-center text-sm-start">
                    <ul>
                        <p><strong>ICON</strong></p>
                        <li><a href="{{route('startup-landing.index')}}">ICON Startup Academy</a></li>
                        <li><a href="{{route('data-science-landing.index')}}">ICON Data Science Academy</a></li>
                        <li><a href="{{route('grand-talkshow')}}">Grand Talkshow</a></li>
                        <li><a href="{{route('e-hall.index')}}">E-Hall of IS</a></li>
                        <li><a href="{{route('virtual-job-fair.index')}}">Virtual Intern & Job Fair</a></li>
                    </ul>
                </div>
                <div class="col col-sm-3 text-center text-sm-start shop">
                    <ul>
                        <p><strong>SHOP</strong></p>
                        <li><a href="https://www.instagram.com/merchandise.ise/" target="_blank">Merchandise<i class="fas fa-external-link-alt"></i></a></li>
                        <li><a href="https://www.instagram.com/garasise/" target="_blank">Garage Sale<i class="fas fa-external-link-alt"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row text-center my-1">
                <div class="col" id="copyright">
                    <h2>&copy; 2021 ISE</h2>
                </div>
            </div>
        </div>
    </footer>
    @endif
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e60a3b7323.js" crossorigin="anonymous"></script>
    @livewireScripts
    {{-- DON'T FORGET TO ADD GOOGLE ANALYTICS TAG --}}
    @if(!config('app.debug'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8VCFP414CC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-8VCFP414CC');
    </script>
    @endif
    @stack('js')
</body>

</html>
