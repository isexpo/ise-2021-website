<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Informasi Pembayaran</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <div class="px-4 mt-4">
        <div id="data_tim">
            <h5>Data Tim</h5>
            <hr/>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Nama Tim</p>
                    <p>{{$team_name}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Nama Ketua</p>
                    <p>{{$member1_name}}</p>
                </div>
                <div>
                    <p class="font-bold mb- mt-2">Nama Institusi</p>
                    <p>{{$school_name}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Asal Institusi</p>
                    <p>{{$school_city->name}} @if($type=='student')(Region {{$school_city->region}})@endif</p>
                </div>
            </div>
        </div>
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
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Potongan
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
                    <p class="font-bold mb-0 mt-2">Tanggal Pembayaran</p>
                    <p>{{date('d F y H:i:s',strtotime($bionix_data->updated_at))}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Total Bayar</p>
                    <p class=" text-3xl font-bold">Rp {{number_format($bionix_data->payment_price+$bionix_data->unique_code,2,',','.')}}</p>
                </div>
            </div>
        </div>
        <hr class="my-4"/>

        <div class="flex flex-row justify-end">
            <button
                onclick="Livewire.emit('openModal', 'pages.bionix.admin.verifikasi-pembayaran.modal.accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'reject','id'=>$bionix_data->id])}})"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2" title="Tolak">
                Tolak
            </button>
            <button
                onclick="Livewire.emit('openModal', 'pages.bionix.admin.verifikasi-pembayaran.modal.accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'accept','id'=>$bionix_data->id])}})"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" title="Terima">
                Terima
            </button>

        </div>
    </div>
</div>
