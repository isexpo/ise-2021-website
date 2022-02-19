<div class="px-8">
    <h3 class="text-2xl font-weight-bold">Shorten Link</h3>
    <div class="card rounded-xl mt-4">
        <div class="card-body">
            <div class="flex">
                <button
                    wire:click="$emit('openModal', 'pages.admin.shorten-link.modal.add-edit',{{json_encode(['type'=>'add'])}})"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full self-center">
                    Add
                </button>
            </div>
            <livewire:pages.admin.shorten-link.data-tables.custom-datatable/>
        </div>
    </div>
</div>
@push('js')
    @livewire('livewire-ui-modal')
    @livewireUIScripts
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
@endpush
@push('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush


