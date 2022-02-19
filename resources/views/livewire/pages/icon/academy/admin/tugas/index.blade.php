<div class="px-8">
    {{-- TODO (Putri) Tugas
    Modifikasi dari CRUD pengumuman BIONIX (kurang lebih hampir sama kayak pengumuman)

    URL : /dashboard/admin/academy/tugas

    --}}
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <h3 class="text-2xl font-weight-bold">Tugas</h3>
    <div class="card mt-4 rounded-xl">
        <div class="card-body">
            <div class="flex">
                <button wire:click="$emit('openModal', 'pages.icon.academy.admin.tugas.modal.add-edit',{{json_encode(['type'=>'add'])}})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full self-center">
                    Add
                </button>
            </div>
            <livewire:pages.icon.academy.admin.tugas.data-tables.custom-datatable />
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


