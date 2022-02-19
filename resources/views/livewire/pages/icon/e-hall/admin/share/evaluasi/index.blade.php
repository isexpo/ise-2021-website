<div class="px-8">
    <div class="flex flex-row items-start">
        <a href="{{route('e-hall.admin.share.index')}}">
            <button><i class="fas fa-long-arrow-alt-left text-2xl"></i></button>
        </a>
             <div class="ml-2"><h3 class="text-2xl font-weight-bold">Share Hall of IS</h3>
            <small
                class="text-gray-500 font-medium text-base">{{date('d F Y',strtotime($start))}} - {{date('d F Y',strtotime($end))}}</small> </div>
    </div>
    <h3 class="text-xl mt-4 font-weight-bold">Caption</h3>
    <div class="card mt-2 rounded-xl">
        <div class="card-body">
            {!! $caption !!}

        </div>
    </div>
    <h3 class="text-xl mt-4 font-weight-bold">Jawaban Peserta</h3>
    <div class="card mt-2 rounded-xl">
        <div class="card-body">
            <livewire:pages.icon.e-hall.admin.share.evaluasi.data-tables.custom-datatable :params="$article_id"/>
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


