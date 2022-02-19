
<div class="px-8">
    <h1 class="text-2xl font-weight-bold">Daftar Peserta</h1>

    <h3 class="text-xl mt-4 font-weight-bold">Bionix Student</h3>
    <div class="card rounded-xl">
        <div class="card-body">
            <div class="">
                <livewire:pages.bionix.admin.daftar-peserta.data-tables.custom-datatable model="App\Models\Bionix\TeamJuniorData"/>
            </div>
        </div>
    </div>
    <h3 class="text-xl mt-8 font-weight-bold">Bionix College</h3>
    <div class="card rounded-xl">
        <div class="card-body">
            <div class="">
                <livewire:pages.bionix.admin.daftar-peserta.data-tables.custom-datatable model="App\Models\Bionix\TeamSeniorData"/>
            </div>
        </div>
    </div>
</div>

@push('js')
    @livewire('livewire-ui-modal')
    @livewireUIScripts
@endpush
