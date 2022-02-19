<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Informasi Tim</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <div class="px-4 mt-4">
        <div id="data_tim">
            <h5 class="text-md font-bold">Data Tim</h5>
            <hr/>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Nama Tim</p>
                    <p>{{$team_name}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Sumber Informasi</p>
                    <p>{{$info_source}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Nama @if($type=='college') Institusi @else Sekolah @endif</p>
                    <p>{{$school_name}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Asal @if($type=='college') Institusi @else Sekolah @endif</p>
                    <p>{{$school_city->name}} @if($type=='student')(Region {{$school_city->region}})@endif</p>
                </div>
            </div>
        </div>
        <div id="anggota_1" class="mt-8">
            <h5 class="font-bold">Anggota Tim 1</h5>
            <hr/>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Nama</p>
                    <p>{{$member1_name}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Email</p>
                    <p>{{$member1_email}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Nomor Whatsapp</p>
                    <p>{{$member1_whatsapp}}</p>
                </div>
                @if($type=='college')
                    <div>
                        <p class="font-bold mb-0 mt-2">Jurusan</p>
                        <p class="truncate">{{$member1_major}}</p>
                    </div>

                    <div>
                        <p class="font-bold mb-0 mt-2">Tahun Angkatan</p>
                        <p class="truncate">{{$member1_year}}</p>
                    </div>

                    <div>
                        <p class="font-bold mb-0 mt-2">Link Twibbon</p>
                        <p class="text-blue-500 truncate"><a href="{{$member1_twibbon}}"
                                                             target="_blank">{{$member1_twibbon}}</a></p>
                    </div>
                @endif
                <div>
                    <p class="font-bold mb-0 mt-2">Kartu Identitas</p>
                    <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo1)}}"/>
                </div>

            </div>
        </div>
        @if($member2_name)
            <div id="anggota_2" class="mt-8">
                <h5 class="font-bold">Anggota Tim 2</h5>
                <hr/>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <p class="font-bold mb-0 mt-2">Nama</p>
                        <p>{{$member2_name}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Email</p>
                        <p>{{$member2_email}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Nomor Whatsapp</p>
                        <p>{{$member2_whatsapp}}</p>
                    </div>
                    @if($type=='college')
                        <div>
                            <p class="font-bold mb-0 mt-2">Jurusan</p>
                            <p class="truncate">{{$member2_major}}</p>
                        </div>

                        <div>
                            <p class="font-bold mb-0 mt-2">Tahun Angkatan</p>
                            <p class="truncate">{{$member2_year}}</p>
                        </div>

                        <div>
                            <p class="font-bold mb-0 mt-2">Link Twibbon</p>
                            <p class="text-blue-500 truncate"><a href="{{$member2_twibbon}}"
                                                                 target="_blank">{{$member2_twibbon}}</a></p>
                        </div>
                    @endif
                    <div>
                        <p class="font-bold mb-0 mt-2">Kartu Identitas</p>
                        <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo2)}}"/>
                    </div>
                </div>
            </div>
        @endif
        @if($type=='college'&&$member3_name)
            <div id="anggota_3" class="mt-8">
                <h5 class="font-bold">Anggota Tim 3</h5>
                <hr/>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <p class="font-bold mb-0 mt-2">Nama</p>
                        <p>{{$member3_name}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Email</p>
                        <p>{{$member3_email}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Nomor Whatsapp</p>
                        <p>{{$member3_whatsapp}}</p>
                    </div>

                    <div>
                        <p class="font-bold mb-0 mt-2">Jurusan</p>
                        <p class="truncate">{{$member3_major}}</p>
                    </div>

                    <div>
                        <p class="font-bold mb-0 mt-2">Tahun Angkatan</p>
                        <p class="truncate">{{$member3_year}}</p>
                    </div>

                    <div>
                        <p class="font-bold mb-0 mt-2">Link Twibbon</p>
                        <p class="text-blue-500 truncate"><a href="{{$member3_twibbon}}"
                                                             target="_blank">{{$member3_twibbon}}</a></p>
                    </div>

                    <div>
                        <p class="font-bold mb-0 mt-2">Kartu Identitas</p>
                        <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo3)}}"/>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <hr class="my-4"/>

    <div class="flex flex-row justify-end">
        <button
            onclick="Livewire.emit('openModal', 'pages.bionix.admin.verifikasi-identitas.modal.accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'reject','id'=>$bionix_data->id])}})"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2" title="Tolak">
            Tolak
        </button>
        <button
            onclick="Livewire.emit('openModal', 'pages.bionix.admin.verifikasi-identitas.modal.accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'accept','id'=>$bionix_data->id])}})"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" title="Terima">
            Terima
        </button>
    </div>
</div>
