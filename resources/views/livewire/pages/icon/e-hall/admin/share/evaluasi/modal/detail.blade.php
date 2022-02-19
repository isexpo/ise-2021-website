<div class="p-4">

    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Detail Submit</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <div class="px-4 mt-4">

        <div class="px-4 mt-4">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Nama</p>
                    <p>{{$share->member->userData->name}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Platform</p>
                    <p>{{$share->platform}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Bukti Screenshot</p>
                    <img class="object-scale-down w-75" src="{{asset('/storage/'.$share->ss_path)}}"/>
                </div>
            </div>
        </div>
        <hr class="my-4"/>

        <div class="flex flex-row justify-end">
            <button
                onclick="Livewire.emit('openModal', 'pages.icon.e-hall.admin.share.evaluasi.modal.accept-reject',{{json_encode(['type'=>'reject','id'=>$share->id])}})"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2" title="Tolak">
                Tolak
            </button>
            <button
                onclick="Livewire.emit('openModal', 'pages.icon.e-hall.admin.share.evaluasi.modal.accept-reject',{{json_encode(['type'=>'accept','id'=>$share->id])}})"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" title="Terima">
                Terima
            </button>
        </div>
    </div>
</div>
