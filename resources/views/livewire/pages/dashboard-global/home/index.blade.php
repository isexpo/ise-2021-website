<div>
    <h3 class="text-xl font-weight-bold">Daftar Acara</h3>
    <p>Berikut adalah daftar acara yang bisa anda ikuti</p>
    <div class="mt-8 swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            @forelse($events as $e)
                <div class="card shadow-md rounded-xl swiper-slide" style="height: 100%;">
                    <div class="card-body flex flex-col h-full justify-between">
                        <div>
                            <h4 class="font-bold text-xl" style="color: #FF7C74;">{{$e['title']}}</h4>
                            <div class="flex flex-row md:align-items-center"><i class="far fa-calendar-alt"></i>
                                <p class="mb-0 ml-2 text-gray-500 font-medium">Registrasi
                                    : {{date('d F Y',strtotime($e['start_date']))}}
                                    - {{date('d F Y',strtotime($e['end_date']))}}</p>
                            </div>
                            <p class="text-sm font-weight-normal my-4">{{$e['description']}}</p>
                        </div>
                        <div>
                            @if($e['regis_link'])
                                @if(!$e['already_registered']&&date('Y-m-d')<=date('Y-m-d',strtotime($e['end_date'])))
                                    <a href="{{$e['regis_link']}}" type="button" target="_blank"
                                       style="background: #FF7C74"
                                       class="text-white w-full p-2 font-bold rounded text-center hover:no-underline">Daftar
                                    </a>
                                @elseif(date('Y-m-d')>date('Y-m-d',strtotime($e['end_date'])))
                                    <p class="text-center font-bold">
                                        Pendaftaran ditutup
                                    </p>
                                @else
                                    <p class="text-center font-bold">
                                        @if(array_key_exists('already_registered_message',$e))
                                            {{$e['already_registered_message']}}
                                        @else
                                            Anda sudah mendaftar pada acara ini.
                                        @endif
                                    </p>
                                @endif
                            @endif
                            <a href="{{$e['landing_link']}}" type="button" target="_blank" style="color: #FF7C74"
                               class="w-full p-2 font-bold mt-2 text-center no-underline">{{$e['title']=='Virtual Play'?'Mainkan Sekarang':'Selengkapnya'}}</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Tidak ada acara yang dapat diikuti.</p>
            @endforelse
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination mt-10" style="bottom: auto !important;position: relative !important;"></div>
    </div>

    <h3 class="text-xl font-weight-bold mt-12">Agenda</h3>

    <p>Berikut adalah <span id="event-count"></span> agenda terdekat anda.</p>
    {{--    <div class="card p-8 mt-8">--}}
    {{--        <div id="calendar"></div>--}}
    {{--    </div>--}}
    <div class="grid md:grid-cols-2 gap-4 mt-4">
        @php $x=0; @endphp
        @foreach($event_countdowns as $e)
            @if((strpos($e['who_can_join'],Auth::user()->userable->jenjang)!==false)&&(
    ($e['for_event']=='bionix'&&Auth::user()->userable->bionix_id)
    ||($e['for_event']=='startup_academy'&&Auth::user()->userable->academy_type=='Startup Academy')
    ||($e['for_event']=='data_science_academy'&&Auth::user()->userable->academy_type=='Data Science Academy')
    ||$e['for_event']=='none')&&date('Y-m-d H:i:s',strtotime($e['deadline']))>=\Carbon\Carbon::now())
                <livewire:pages.dashboard-global.home.countdown :data="$e"/>
                @php $x+=1; @endphp
                @if($x>=6)
                    @break
                @endif
            @endif
        @endforeach
    </div>
</div>

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endpush

@push('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#event-count').html('{{$x}}')
            const swiper = new Swiper('.swiper-container', {

                pagination: {
                    el: ".swiper-pagination",
                },
                slidesPerView: 1,
                spaceBetween: 40,
                autoHeight: true,
                loop: @if(sizeof($events)>=3) true @else false @endif,
                autoplay: {
                    delay: 45000
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    1440: {
                        slidesPerView: 3
                    }
                }
            })
        });
    </script>
@endpush
