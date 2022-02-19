<div class="px-8">
    {{-- TODO (Putri) Daftar Peserta
    Modifikasi dari daftar peserta BIONIX

    URL : /dashboard/admin/academy/daftar-peserta

    --}}
    {{-- Do your work, then step back. --}}
    <h1 class="text-2xl font-weight-bold">Daftar Peserta</h1>

    <h3 class="text-xl mt-4 font-weight-bold">Icon Academy Startup</h3>
    <div class="card rounded-xl">
        <div class="card-body">
            <div class="">
                <livewire:pages.icon.academy.admin.daftar-peserta.data-tables.custom-datatable model="App\Models\Icon\IconAcademyStartup"  radioName="radio-startup"/>
            </div>
        </div>
    </div>

    <h1 class="text-2xl font-weight-bold">Daftar Peserta</h1>

    <h3 class="text-xl mt-4 font-weight-bold">Icon Academy Data Science</h3>
    <div class="card rounded-xl">
        <div class="card-body">
            <div class="">
                <livewire:pages.icon.academy.admin.daftar-peserta.data-tables.custom-datatable model="App\Models\Icon\IconAcademyDataScience" radioName="radio-ds"/>
            </div>
        </div>
    </div>
</div>
@push('js')
    @livewire('livewire-ui-modal')
    @livewireUIScripts
@endpush
