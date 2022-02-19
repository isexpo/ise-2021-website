<div class="px-8">

    <h3 class="text-2xl font-weight-bold">Share Artikel</h3>
    <div class="card mt-4 rounded-xl">
        <div class="card-body">
            <div class="flex">
                <button wire:click="$emit('openModal', 'pages.icon.e-hall.admin.share.modal.add-edit',{{json_encode(['type'=>'add'])}})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full self-center">
                    Add
                </button>
            </div>
            <livewire:pages.icon.e-hall.admin.share.data-tables.custom-datatable />
            @livewire('livewire-ui-modal')
            @livewireUIScripts
        </div>
    </div>
</div>
@push('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@push('js')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
@endpush


