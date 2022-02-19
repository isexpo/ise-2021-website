<div class="px-8">
    <div class="flex flex-row items-start">
        <a href="{{route('jobfair.admin.lowongan')}}">
            <button><i class="fas fa-long-arrow-alt-left text-2xl"></i></button>
        </a>
        <div class="ml-2"><h3 class="text-2xl font-weight-bold">{{$name}}</h3>
        </div>
    </div>
    <h3 class="text-xl mt-4 font-weight-bold">Deskripsi</h3>
    <div class="card mt-2 rounded-xl">
        <div class="card-body">
            {!! $requirement !!}

        </div>
    </div>
    <h3 class="text-xl mt-4 font-weight-bold">Peserta</h3>
    <div class="card mt-2 rounded-xl">
        <div class="card-body">
                <livewire:pages.icon.jobfair.admin.lowongan.peserta.data-tables.custom-datatable :params="$lowongan_id"/>
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


