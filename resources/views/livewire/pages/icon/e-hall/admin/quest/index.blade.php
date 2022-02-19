<div class="px-8">
    <div class="flex flex-row items-start">
        <a href="{{route('e-hall.admin.quest.index')}}">
            <button><i class="fas fa-long-arrow-alt-left text-2xl"></i></button>
        </a>
        <div class="ml-2"><h3 class="text-2xl font-weight-bold">{{$level->name}}</h3>
            <small
                class="text-gray-500 font-medium text-base">Waktu Dibuka
                : {{date('d F Y',strtotime($level->open_time))}} 09:00 WIB</small>

        </div>
    </div>
    <h3 class="text-xl mt-4 font-weight-bold">Pertanyaan</h3>
    <div class="card mt-4 rounded-xl">
        <div class="card-body">
            <div class="flex">
                <button wire:click="$emit('openModal', 'pages.icon.e-hall.admin.quest.modal.add-edit',{{json_encode(['type'=>'add'])}})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full self-center">
                    Add
                </button>
            </div>
            <livewire:pages.icon.e-hall.admin.quest.data-tables.custom-datatable :params="$level->id"/>
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


