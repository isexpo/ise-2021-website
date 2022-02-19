<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Informasi Tim</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    @if ($type=='startup')
        <div class="px-4 mt-4">
            <div id="data_tim">
                <h5 class="text-md">Data Tim</h5>
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
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Nama Institusi</p>
                        <p>{{$institute_name}}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Ide Startup</p>
                        <p>{{$startup_idea}}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Alasan Mengikuti Academy</p>
                        <p>{{$reason_joining}}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Ekspetasi Mengikuti Akademi</p>
                        <p>{{$expectation_joining_academy}}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Pasca Kegiatan Akademi</p>
                        <p>{{$post_academy}}</p>
                    </div>
                </div>
            </div>
            <div id="anggota_1" class="mt-8">
                <h5>Anggota Tim 1</h5>
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
                    <div>
                        <p class="font-bold mb-0 mt-2">Link Post Twibbon</p>
                        <p class="text-blue-500 truncate"><a href="{{$member1_twibbon}}"
                                                             target="_blank">{{$member1_twibbon}}</a></p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Kartu Identitas</p>
                        <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo1)}}"/>
                    </div>

                </div>
            </div>
            <div id="anggota_2" class="mt-8">
                <h5>Anggota Tim 2</h5>
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
                    <div>
                        <p class="font-bold mb-0 mt-2">Link Post Twibbon</p>
                        <p class="text-blue-500 truncate"><a href="{{$member2_twibbon}}"
                                                             target="_blank">{{$member2_twibbon}}</a></p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Kartu Identitas</p>
                        <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo2)}}"/>
                    </div>
                </div>
            </div>
            @if($icon_data->member2_id)
                <div id="anggota_3" class="mt-8">
                    <h5>Anggota Tim 3</h5>
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
                            <p class="font-bold mb-0 mt-2">Link Post Twibbon</p>
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
    @endif
    @if ($type=='data-science')
        <div class="px-4 mt-4">
            <div id="anggota_1" class="mt-8">
                <h5 class="text-md">Data Detail</h5>
                <hr/>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <p class="font-bold mb-0 mt-2">Nama Peserta</p>
                        <p>{{$member1_name}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Sumber Informasi</p>
                        <p>{{$info_source}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Email</p>
                        <p>{{$member1_email}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">No Telepon</p>
                        <p>{{$no_hp}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Nama Institusi</p>
                        <p>{{$institute_name}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Jurusan</p>
                        <p>{{$major}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Link Profil Hackerrank</p>
                        <p class="text-blue-500 truncate"><a href="{{$hackerrank_profile_link}}"
                                                             target="_blank">{{$hackerrank_profile_link}}</a></p>
                    </div>
                    <div class=" md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Alasan Mengikuti Akademi</p>
                        <p>{{$reason_joining}}</p>
                    </div>
                    <div class=" md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Pasca Kegiatan Akademi</p>
                        <p>{{$post_academy}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Link Post Twibbon</p>
                        <p class="text-blue-500 truncate"><a href="{{$member1_twibbon}}"
                                                             target="_blank">{{$member1_twibbon}}</a></p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Kartu Identitas</p>
                        @if($photo1)
                            <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo1)}}"/>
                        @else
                            <p>Belum unggah</p>
                        @endif
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Curriculum Vitae</p>
                        @if($cv)
                            <a target="_blank" href="{{asset('storage/'.$cv)}}"><label
                                    class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    <i class="fas fa-cloud-download-alt mr-2"></i>Unduh CV
                                </label>
                            </a>
                        @else
                            <p>Belum unggah</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
    <hr class="my-4"/>

    <div class="flex flex-row justify-end">
        <button
            onclick="Livewire.emit('openModal', 'pages.icon.academy.admin.verifikasi-identitas.modal.accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'reject','id'=>$icon_data->id])}})"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2" title="Tolak">
            Tolak Biodata
        </button>
        <button
            onclick="Livewire.emit('openModal', 'pages.icon.academy.admin.verifikasi-identitas.modal.accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'accept','id'=>$icon_data->id])}})"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" title="Terima">
            Terima Biodata
        </button>
    </div>
</div>
