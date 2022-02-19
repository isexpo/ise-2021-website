<div class="px-8">
    <div class="flex flex-row items-start">
        <div class="ml-2"><h3 class="text-2xl font-weight-bold">{{$title}}</h3>
        </div>
    </div>
    <div class="card mt-2 rounded-xl">
        <div class="card-body">
            <livewire:pages.bionix.admin.submission.data-tables.table :params="$type"/>
        </div>
    </div>
</div>
