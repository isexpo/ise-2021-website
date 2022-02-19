<div class="flex space-x-1 justify-around">
    <button
        onclick="Livewire.emit('openModal', 'pages.icon.e-hall.admin.home.modal.detail',{{json_encode(['type'=>$type,'id'=>$id])}})"
        class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded" title="Lihat Detail">
        <i class="cil-search"></i>
    </button>
</div>
