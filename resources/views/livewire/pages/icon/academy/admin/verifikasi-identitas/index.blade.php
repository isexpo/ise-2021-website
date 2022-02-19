<div class="px-8">
    {{-- TODO (Putri) Verifikasi identitas
    Modifikasi dari verifikasi identitas BIONIX

    URL : /dashboard/admin/academy/verifikasi/identitas

    --}}
    {{-- The Master doesn't talk, he acts. --}}
    <h1 class="text-2xl font-weight-bold">Verifikasi Identitas</h1>

    <h3 class="text-xl font-weight-bold mt-4">Icon Academy Startup</h3>
    <div class="card rounded-xl">
        <div class="card-body">
            <div class="">
                <livewire:pages.icon.academy.admin.verifikasi-identitas.data-tables.custom-datatable model="App\Models\Icon\IconAcademyStartup" />
            </div>
        </div>
    </div>
    <h3 class="text-xl font-weight-bold mt-4">Icon Academy Data Science</h3>
    <div class="card rounded-xl">
        <div class="card-body">
            <div class="">
                <livewire:pages.icon.academy.admin.verifikasi-identitas.data-tables.custom-datatable model="App\Models\Icon\IconAcademyDataScience" />
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
