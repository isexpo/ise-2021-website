<div class="px-8">

    <h1 class="text-2xl font-weight-bold">Leaderboard</h1>

    <h3 class="text-xl font-weight-bold mt-4">Icon E-Hall</h3>
    <div class="card rounded-xl">
        <div class="card-body">
            <div class="">
                <livewire:pages.icon.e-hall.admin.home.data-tables.custom-datatable model="App\Models\IconHoisQuestMember" />
            </div>
        </div>
    </div>
</div>
@push('js')
    @livewire('livewire-ui-modal')
    @livewireUIScripts
@endpush
