<div class="px-8">
    <h1 class="text-2xl font-weight-bold">Verifikasi pembayaran</h1>

    <h3 class="text-xl font-weight-bold mt-4">BIONIX Student</h3>
    <div class="card rounded-xl">
        <div class="card-body">
            <div class="">
                <livewire:pages.bionix.admin.verifikasi-pembayaran.data-tables.custom-datatable model="App\Models\Bionix\TeamJuniorData" />
            </div>
        </div>
    </div>

    <h3 class="text-xl font-weight-bold mt-8">BIONIX College</h3>
    <div class="card rounded-xl">
        <div class="card-body">
            <div class="">
                <livewire:pages.bionix.admin.verifikasi-pembayaran.data-tables.custom-datatable model="App\Models\Bionix\TeamSeniorData" />
            </div>
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
