<div class="px-8">
    <div class="flex flex-row items-start">
        <a href="{{route('academy.admin.tugas.index')}}">
            <button><i class="fas fa-long-arrow-alt-left text-2xl"></i></button>
        </a>
        <div class="ml-2"><h3 class="text-2xl font-weight-bold">{{$title}}</h3>
            <small
                class="text-gray-500 font-medium text-base">Deadline
                : {{date('d F Y H:i:s',strtotime($deadline))}}</small>

        </div>
    </div>
    <h3 class="text-xl mt-4 font-weight-bold">Deskripsi</h3>
    <div class="card mt-2 rounded-xl">
        <div class="card-body">
            {!! $description !!}

        </div>
    </div>
    <h3 class="text-xl mt-4 font-weight-bold">Jawaban Peserta</h3>
    <div class="card mt-2 rounded-xl">
        <div class="card-body">
            @if($tugas_type=='Startup')
                <livewire:pages.icon.academy.admin.tugas.evaluasi.data-tables.startup-datatable :params="$task_id"/>
            @else
                <livewire:pages.icon.academy.admin.tugas.evaluasi.data-tables.data-science-datatable :params="$task_id"/>
            @endif
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


