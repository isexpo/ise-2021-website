<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Informasi Tim</h5>
        <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
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
                    @if($photo1)
                        <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo1)}}"/>
                    @else
                        <p>Belum unggah</p>
                    @endif
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
                        @if($photo2)
                            <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo2)}}"/>
                        @else
                            <p>Belum unggah</p>
                        @endif
                    </div>
                </div>
            </div>
        @endif
        @if($member3_name)
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
                        @if($photo3)
                            <img class="object-scale-down w-50" src="{{asset('/storage/'.$photo3)}}"/>
                        @else
                            <p>Belum unggah</p>
                        @endif
                    </div>
                </div>
            </div>
        @endif
        @if($bionix_data->payment_verif_status=="Tahap Verifikasi"||$bionix_data->payment_verif_status=="Terverifikasi"||$bionix_data->payment_verif_status=="Ditolak")
            <div id="promo" class="mt-8">
                <h5>Promo yang Digunakan</h5>
                <hr/>
                <table class="min-w-full divide-y divide-gray-200 mt-2">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                            Promo
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Potongan
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($bionix_data->promo as $promo)
                        <tr>
                            <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{$promo->promo->name}}
                                ({{$promo->promo->promo_code}})
                            </td>
                            <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Rp {{number_format($promo->promo->nominal,2,',','.')}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2"><p class="text-center">Tidak ada promo yang digunakan</p></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div id="invoice" class="mt-8">
                <h5>Invoice</h5>
                <hr class="mb-2"/>
                @if($bionix_data->invoice)
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div>
                            <p class="font-bold mb-0">Nomor Invoice</p>
                            <p>{{$bionix_data->invoice->invoice_no}}</p>
                        </div>
                        <div>
                            <p class="font-bold mb-0">Tanggal Pembayaran</p>
                            <p>{{date('d F y H:i:s',strtotime($bionix_data->invoice->date))}}</p>
                        </div>
                        <div>
                            <p class="font-bold mb-0">Total Bayar</p>
                            <p>Rp {{number_format($bionix_data->invoice->nominal,2,',','.')}}</p>
                        </div>
                    </div>
                @else
                    <p class="text-center">Tidak ada invoice yang digunakan</p>
                @endif
            </div>
            <div id="detail_pembayaran" class="mt-8">
                <h5>Pembayaran</h5>
                <hr/>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="font-bold mb-0 mt-2">Bukti Bayar</p>
                        <img class="object-scale-down w-50" src="{{asset('/storage/'.$payment_proof)}}"/>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Total Bayar</p>
                        <p class=" text-3xl font-bold">
                            Rp {{number_format($bionix_data->payment_price+$bionix_data->unique_code,2,',','.')}}</p>
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
