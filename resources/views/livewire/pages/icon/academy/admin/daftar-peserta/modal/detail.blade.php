<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Informasi @if($type=='startup') Tim @else Peserta @endif</h5>
        <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>


    <div class="px-4 mt-4">
        @if($type=='startup')
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
                        <p class="font-bold mb-0 mt-2">Alasan Mengikuti Akademi</p>
                        <p>{{$reason_joining_academy}}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Ekspetasi Mengikuti Akademi</p>
                        <p>{{$expectation_joining_academy}}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Pasca Kegiatan Akademi</p>
                        <p>{{$post_academy_activity}}</p>
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
                        @if($photo1)
                            <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo1)}}"/>
                        @else
                            <p>Belum unggah</p>
                        @endif
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
                        @if($photo2)
                            <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo2)}}"/>
                        @else
                            <p>Belum unggah</p>
                        @endif
                    </div>
                </div>
            </div>
            @if ($member3_name==null)

            @else
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
                            @if($photo3)
                                <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo3)}}"/>
                            @else
                                <p>Belum unggah</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endif

        @if ($type=='data-science')
            <div id="anggota_1" class="mt-8">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <p class="font-bold mb-0 mt-2">Nama Peserta</p>
                        <p>{{$ds_name}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Sumber Informasi</p>
                        <p>{{$info_source}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Email</p>
                        <p>{{$ds_email}}</p>
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
                        <p class="font-bold mb-0 mt-2">Link Post Twibbon</p>
                        <p class="text-blue-500 truncate"><a href="{{$member1_twibbon}}"
                                                             target="_blank">{{$member1_twibbon}}</a></p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Link Profil Hackerrank</p>
                        <p class="text-blue-500 truncate"><a href="{{$hackerrank_profile_link}}"
                                                             target="_blank">{{$hackerrank_profile_link}}</a></p>
                    </div>
                    <div class=" md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Alasan Mengikuti Akademi</p>
                        <p>{{$reason_joining_academy}}</p>
                    </div>
                    <div class=" md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Pasca Kegiatan Akademi</p>
                        <p>{{$post_academy_activity}}</p>
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
                                    <i class="fas fa-cloud-download-alt mr-2"></i>Unduh Jawaban Anda
                                </label>
                            </a>
                        @else
                            <p>Belum unggah</p>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
    <hr class="my-4"/>

    <div class="flex flex-row justify-end">
        <button
            type="button" wire:click="$emit('closeModal')"
            class="text-gray border-2 border-gray-300 font-bold py-2 px-4 rounded-full mr-2" title="Tutup">
            Tutup
        </button>
    </div>
</div>
