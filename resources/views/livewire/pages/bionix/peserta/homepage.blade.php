<div class="mx-8">
    {{--    Header Card--}}
    <h1 class="text-3xl font-weight-bold">Halo, Selamat Datang di Dashboard BIONIX!</h1>
    <div class="grid md:grid-cols-2 gap-4">
        <div>
            <h3 class="text-xl font-weight-bold mt-8">Info</h3>
            <div class="grid md:grid-cols-2 gap-4">
                {{--        Nama Tim --}}
                <div class="card shadow-md rounded-xl">
                    <div class="card-body d-flex">
                        <div class="py-1 mr-4">
                            <i class="fas fa-users text-3xl" style="color: #675783;"></i>
                        </div>
                        <div>
                            <div class="text-gray-400">Nama Tim</div>
                            <div class="text-value-lg">{{Auth::user()->userable->bionix->team_name}}</div>
                        </div>
                    </div>
                </div>
                {{--        Region --}}
                <div class="card shadow-md rounded-xl">
                    <div class="card-body d-flex">
                        <div class="py-1 mr-4">
                            <i class="fas fa-map-marker-alt text-3xl" style="color: #70B3D0;"></i>
                        </div>
                        <div>
                            <div
                                class="text-gray-400">{{(Auth::user()->userable->bionix_type == "bionix_junior"?'Region':'Asal Daerah')}}</div>
                            <div
                                class="text-value-lg">{{Auth::user()->userable->bionix_type == "bionix_junior"?'Region '.Auth::user()->userable->bionix->city->region:Auth::user()->userable->bionix->city->name}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h3 class="md:mt-8 text-xl font-weight-bold">Status</h3>
            <div class="grid md:grid-cols-2 gap-4">
                {{--        Status Kartu Pelajar --}}
                <div class="card shadow-md rounded-xl">
                    <div class="card-body d-flex">
                        <div class="py-1 mr-4">
                            <i class="fas fa-clipboard-list text-3xl" style="color:{{(Auth::user()->userable->bionix->profile_verif_status == 'Terverifikasi'?'#00CE15':'red')}}"></i>
                        </div>
                        <div>
                            <div class="text-gray-400">Status Biodata Tim</div>
                            <div class="text-value-lg">{{Auth::user()->userable->bionix->profile_verif_status}}</div>
                        </div>
                    </div>
                </div>

                {{--        Status Pembayaran --}}
                <div class="card shadow-md rounded-xl">
                    <div class="card-body d-flex">
                        <div class="py-1 mr-4">
                            <i class="fas fa-money-bill text-3xl" style="color:{{(Auth::user()->userable->bionix->payment_verif_status == 'Terverifikasi'?'#00CE15':'red')}}"></i>
                        </div>
                        <div>
                            <div class="text-gray-400">Status Pembayaran</div>
                            <div class="text-value-lg">{{Auth::user()->userable->bionix->payment_verif_status}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="text-xl font-weight-bold">Pengumuman</h3>
    <div class="grid md:grid-cols-2 gap-4 mt-8">
        @forelse($announcement as $a)
            <div class="card shadow-md rounded-xl">
                <div class="card-body">
                    <h6 class="font-bold {{($a->type=='Normal'?'text-black':'text-red-500')}}">{{$a->type}}</h6>
                    <h4 class="font-bold text-xl" style="color: #FF7C74;">{{$a->title}}</h4>
                    <div class="flex flex-row align-items-center"><i class="far fa-calendar-alt"></i><p class="mb-0 ml-2 text-gray-500 font-medium">{{date('d F Y',strtotime($a->start))}}</p></div>
                    <p class="text-sm font-weight-normal mt-4">{!! $a->content !!}</p>
                </div>
            </div>
        @empty
            <p>Tidak ada pengumuman</p>
        @endforelse
    </div>
</div>
