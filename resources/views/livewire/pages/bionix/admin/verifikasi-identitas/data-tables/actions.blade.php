<div class="flex space-x-1 justify-around">
    <button
        onclick="Livewire.emit('openModal', 'pages.bionix.admin.verifikasi-identitas.modal.show-details',{{json_encode(['type'=>$type,'id'=>$id])}})"
        class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded" title="Lihat Detail">
        <i class="cil-search"></i>
    </button>
    <button
        onclick="Livewire.emit('openModal', 'pages.bionix.admin.verifikasi-identitas.modal.accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'accept','id'=>$id])}})"
        class="p-1 text-green-600 hover:bg-green-600 hover:text-white rounded" title="Terima">
        <i class="cil-check"></i>
    </button>
    <button
        onclick="Livewire.emit('openModal', 'pages.bionix.admin.verifikasi-identitas.modal.accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'reject','id'=>$id])}})"
        class="p-1 text-red-600 hover:bg-red-600 hover:text-white rounded" title="Tolak">
        <i class="cil-x"></i>
    </button>
</div>
