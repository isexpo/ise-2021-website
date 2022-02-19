<div class="px-8">
    <h3 class="text-2xl font-weight-bold">Quest</h3>
    <h5 class="text-lg mt-4 font-weight-bold">List Level</h5>
    <div class="card mt-4 rounded-xl">
        <div class="card-body">
            <div class="flex">
                <button
                    wire:click="$emit('openModal', 'pages.icon.e-hall.admin.quest.level.modal.add-edit',{{json_encode(['type'=>'add'])}})"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full self-center">
                    Add
                </button>
            </div>
            <livewire:pages.icon.e-hall.admin.quest.level.data-tables.custom-datatable/>
            @livewire('livewire-ui-modal')
            @livewireUIScripts
        </div>
    </div>
</div>
