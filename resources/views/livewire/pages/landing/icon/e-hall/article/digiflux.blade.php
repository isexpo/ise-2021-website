@section('title','Digiflux')
@section('desc','Digiflux adalah Startup yang menyediakan layanan influencer marketing untuk Brand yang ingin mempromosikan produknya melalui influencer dengan platform yang terintegrasi sehingga seluruh proses pemasaran melalui influencer marketing menjadi lebih Efektif, efesien dan berdampak.')
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
                        <img class="z-0 img-fluid mb-lg-5"
                             src="{{asset('img/icon/e-hall/article/digiflux/founder.png')}}" alt=""
                        >
                    </div>
                    <div
                        class="col-lg-6 order-1 order-lg-5 pb-lg-5 mb-lg-5 d-flex flex-column align-items-center justify-content-end px-lg-3">
                        <iframe src="https://www.youtube.com/embed/WjwYP_ylqb0"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                width="560" height="315" class="d-none d-xl-block"></iframe>
                        <iframe src="https://www.youtube.com/embed/WjwYP_ylqb0"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                width="480" height="280" class="d-none d-sm-block d-xl-none"></iframe>
                        <iframe src="https://www.youtube.com/embed/WjwYP_ylqb0"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                width="240" height="157" class="d-block d-sm-none"></iframe>
                        <h2 class="my-4 text-4xl">Digiflux</h2>
                        <p class="hindreg text-base pb-lg-5 mb-lg-5">Digiflux adalah Startup yang menyediakan layanan
                            influencer marketing untuk Brand yang
                            ingin mempromosikan produknya melalui influencer dengan platform yang terintegrasi
                            sehingga seluruh proses pemasaran melalui influencer marketing menjadi lebih Efektif,
                            efesien
                            dan berdampak.
                            <br/>
                            <i>"We Build Smile!"</i>
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
                <p class="px-lg-5 mx-5">Sedang naik daun, tren Influencer Marketing juga banyak digunakan pelaku Usaha
                    Mikro, Kecil,
                    dan Menengah (UMKM) untuk mempromosikan jualannya. Sayangnya, banyak pelaku UMKM
                    belum berhasil memanfaatkan metode pemasaran ini dengan tepat sasaran dan malah menuai
                    kerugian. Coba selesaikan masalah ini, enam orang Mahasiswa Institut Teknologi Sepuluh
                    Nopember (ITS) dirikan Digiflux, startup yang menghubungkan pelaku UMKM dengan
                    Influencer.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Dalam riset yang dilakukan oleh tim Digiflux kepada sejumlah UMKM, ternyata
                    didapatkan hasil
                    bahwa mempromosikan produk merupakan masalah yang dialami para pelaku UMKM.
                    “Masalah tersebut terjadi karena para pelaku UMKM belum memiliki pengetahuan dan sumber
                    daya yang cukup untuk memilih Influencer yang tepat,” jelas CEO Digiflux, Muhammad Rizaldi.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Selain itu, menurut mahasiswa Departemen Sistem Informasi tersebut, proses
                    transaksi dalam
                    menggunakan jasa influencer memang berbelit dan tidak ada patokan bagi pelaku UMKM untuk
                    mengukur hasil yang didapat. “Oleh karena itu, kami (Digiflux, red) hadir menjadi solusi,”
                    sambungnya.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Sebagai startup yang bergerak dalam bidang pengiklanan, Digiflux memiliki
                    tiga value yang
                    akan menjawab permasalahan penggunanya. Value pertama adalah efisien. Digiflux membantu
                    pengguna memilih Influencer mana yang sesuai dengan persona bisnis UMKM dengan
                    memberikan rekomendasi Influencer berdasarkan brand, target pasar, demografi, lokasi bahkan
                    jenis konten yang biasa mereka unggah.
                </p>
                <p class="mt-5 px-lg-5 mx-5">“Kami juga sedang mengembangkan teknologi kecerdasan buatan untuk menambah
                    efisiensi
                    sistem,” imbuh pria yang akrab disapa Zaldi tersebut. Value kedua adalah efektif, dimana
                    Digiflux akan menyediakan alur promosi menggunakan jasa Influencer yang mudah diikuti
                    dalam platform mereka.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Sedangkan value yang ketiga adalah berdampak. Hal ini sesuai dengan visi
                    Digiflux yang ingin
                    menghubungkan brand kepada pelanggan mereka melalui media sosial dengan mudah, Digiflux
                    ingin memberikan dampak yang baik bagi brand UMKM, Influencer, hingga masyarakat luas
                    untuk lebih mengenal produk lokal Indonesia yang berkualitas.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Memiliki motto reach other, grow together, Zaldi berharap dapat menjangkau
                    lebih banyak
                    UMKM dan Influencer. “Kita ingin menciptakan ekosistem (UMKM dan Influencer, red) yang
                    saling mendukung dan memberi dampak yang lebih luas lagi,” cetusnya.
                </p>
            </div>

            <div class="mt-5">
                <h2 class="hindbold">Berawal dari Tugas Kaderisasi, Kini Raih Berbagai Prestasi</h2>
                <p class="mt-5 px-lg-5 mx-5">Ide awal startup ini muncul dalam kegiatan wajib bagi mahasiswa baru di
                    Departemen Sistem
                    Informasi, departemen asal Zaldi dan beberapa rekan pendiri startup-nya berasal. mereka
                    mengamati unggahan promosi berbayar yang kerap diunggah mahasiswa. “Kami melihat ada
                    potensi di media sosial yang dapat menghasilkan uang,” ujar mahasiswa angkatan 2019
                    tersebut.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Tak berhenti disitu, ide cemerlangnya kemudian ia ikutkan perlombaan
                    Hackathon dan berhasil
                    menyabet juara. Zaldi juga menerima umpan balik yang positif dan semakin menyadari bahwa
                    rumusan masalah yang ia angkat dirasakan pengguna secara nyata. “Jadi kita seriusin dan
                    dijalankan dengan komitmen bersama,” tukasnya.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Menurut mahasiswa asal Kalimantan tersebut, membangun startup sebagai
                    mahasiswa
                    merupakan hal yang amat menantang. Untuk itu, ia dan rekan-rekannya membuat perjanjian
                    untuk menjaga komitmen dan menyamakan tujuan.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Menurut mahasiswa asal Kalimantan tersebut, membangun startup sebagai
                    mahasiswa
                    merupakan hal yang amat menantang. Untuk itu, ia dan rekan-rekannya membuat perjanjian
                    untuk menjaga komitmen dan menyamakan tujuan.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Meskipun begitu, tantangan tersebut tentunya sebanding dengan dampak yang
                    mereka
                    rasakan. Selama proses membangun Startup ini mereka merasakan perubahan yang besar
                    khusunya dari setiap pribadi founder. “Kurva pembelajaran kami meningkat tajam dengan
                    membangun startup ini.” papar Zaldi.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Berdiri sejak April 2020, Digiflux telah membuktikan eksistensinya dan
                    meraih berbagai prestasi
                    dan nominasi bergengsi. Mulai dari juara pada NextDev Telkomsel Idea Competition 2020, 10
                    Startup terbaik dalam NextDev Telkomsel Talent Scouting Borderless Economic Track, Top 10
                    Founder+ Incubation Program 2021, hingga mendapat inkubasi The Greater Hub Incubation
                    Programme Batch X 2021 dan pendanaan dari Akselerasi Startup Mahasiswa Indonesia (ASMI)
                    2021.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Selain rentetan prestasi, startup ini juga telah berhasil menghimpun lebih
                    dari 300 influencer
                    mikro dan makro di seluruh Indonesia, serta telah menjalankan puluhan project dari berbagai
                    UMKM dan Startup. “Ini merupakan pencapaian paling berharga bagi kami, karena dapat
                    memberi dampak ke teman-teman UMKM maupun para Influencer,” ungkap Zaldi.
                </p>
                <p class="mt-5 px-lg-5 mx-5">Tak langung berpuas diri, Zaldi menyatakan bahwa Digiflux masih memiliki
                    harapan besar.
                    Sesuai dengan motto Digiflux yakni reach other, grow together, Ia menargetkan startup
                    besutannya dapat menjangkau lebih banyak UMKM dan Influencer untuk mengenalkan produk
                    lokal Indonesia yang berkualitas.
                </p>
                <p class="mt-5 px-lg-5 mx-5">“Kami ingin menciptakan ekosistem dimana UMKM dan Influencer saling
                    mendukung dan
                    memberi dampak yang lebih luas lagi,” pungkas Mahasiswa Fakultas Teknologi Elektro dan
                    Informatika Cerdas (FTEIC) ini menutup pembicaraan.
                </p>
            </div>
            <div class="mt-5 pt-5">
                <h2 class="hindbold">Galeri</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/digiflux/pic4.jpeg')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/digiflux/pic7.jpeg')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/digiflux/pic8.jpeg')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/digiflux/pic9.jpeg')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <img src="{{asset('img/icon/e-hall/article/digiflux/pic1.png')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/digiflux/pic10.jpeg')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/digiflux/pic5.png')}}" class="img-fluid"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/icon/e-hall/article/digiflux/pic6.png')}}" class="img-fluid"/>
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
