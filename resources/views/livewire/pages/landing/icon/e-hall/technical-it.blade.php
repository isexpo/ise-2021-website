@section('title','Technical IT')
@section('desc','Permainan quiz yang terdiri dari 20 soal seputar logika, machine learning, dan data.')
<div class="bg">
    <!--navbar section-->
    <livewire:components.e-hall.navbar/>
    <!-- End of Section -->


    <!-- header section start -->
    <section class="header" id="home" style="margin-bottom: 2rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-12 order-5 order-md-1">
                    <h1 class="text-md-start text-center">Technical IT</h1>
                    <p>Permainan quiz yang terdiri dari 20 soal seputar logika, machine learning, dan data.</p>
                    <h3 class="mt-4 hindsbold text-uppercase" style="letter-spacing: 3px;">Peraturan</h3>
                    <ol type="i">
                        <li>Tiap pemain harus memiliki akun pada website ISE! 2021.</li>
                        <li>Jika mengerjakan Technical IT tidak akan ada penambahan poin pada akun peserta di virtual
                            play karena menggunakan sistem reward terpisah.
                        </li>
                        <li>Technical IT hanya dapat dikerjakan sekali.</li>
                        <li>Total soal adalah 20 dan waktu pengerjaan tertera pada kuis.</li>
                        <li>Pemain dengan waktu pengerjaan tercepat dan jawaban terbenar berhak mendapatkan kesempatan
                            untuk memenangkan permainan.
                        </li>
                        <li>Leaderboard yang digunakan untuk menentukan pemenang adalah leaderboard pada platform
                            kahoot. Jika terdapat kecurangan maka panitia berhak membatalkan pemberian hadiah.
                        </li>
                        <li>Batas terakhir technical IT adalah 7 November 2021 pukul 16.00 WIB. Pemenang akan diumumkan
                            di media sosial resmi ISE melalui instagram @is_expo
                        </li>

                    </ol>
                </div>
                <div class="col-md-3 col-12 order-1 order-md-5">
                    <img src="{{asset('/img/icon/img/gambar.svg')}}" alt="" class="img img-fluid">
                </div>
            </div>

        </div>
        <div class="container d-flex align-items-center flex-column mt-4 pt-4">
            <iframe class="border rounded"
                    src="https://kahoot.it/challenge/9b42e233-b439-4231-b3bc-274c45502275_1634375382581"
                    title="Technical IT" style="min-width: 80vw; min-height: 80vh;"></iframe>
        </div>
        {{--        <div class="container text-center mt-5">--}}
        {{--            <a class="text-uppercase btndaftar py-2 px-12" style="text-decoration: none;" href="#">START</a>--}}
        {{--        </div>--}}
    </section>
    <!-- End of Section -->

    <!-- whatsapp section -->
    @include('livewire.pages.landing.icon.whatsapp')
</div>
<!-- End of WA section -->

@push('css')

    <link rel="stylesheet" href="{{asset('/css/startup-landing/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/startup-landing/navbar.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('/css/virtual-play/style.css?ver_date='.date('YmdHis',filemtime('css/virtual-play/style.css')))}}"/>

@endpush

@push('js')
    <script src="{{asset('/js/icon/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/icon/custom.js')}}"></script>
@endpush


