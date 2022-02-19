<div class="px-8">

    <h1 class="text-2xl font-weight-bold">Daftar Peserta</h1>

    <div class="card rounded-xl">
        <div class="card-body">
            <div class="">
                <livewire:pages.icon.talkshow.admin.daftar-peserta.data-tables.custom-datatable />
            </div>
        </div>
    </div>
</div>
@push('js')
    @livewire('livewire-ui-modal')
    @livewireUIScripts
@endpush
