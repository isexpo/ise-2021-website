<div class="px-8 pb-8">
    {{-- TODO (Putri) Beranda
    Modifikasi dari beranda admin BIONIX

    URL : /dashboard/admin/academy/

    --}}
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <h1 class="text-3xl font-weight-bold">Halo, Selamat Datang di Dashboard ICON!</h1>
    <h3 class="mt-4 text-2xl font-weight-bold">Icon Academy Startup</h3>
    <hr/>
    <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 mt-4">
        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <h6 class="text-md font-weight-bold">Tanggal Awal</h6>
                <x-datepicker wire:model.lazy="tanggal_awal_startup"
                              class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                              id="grid-start-date-senior" readonly/>
            </div>
            <div>
                <h6 class="text-md font-weight-bold">Tanggal Akhir</h6>
                <x-datepicker wire:model.lazy="tanggal_akhir_startup"
                              class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                              id="grid-end-date-senior" readonly/>
            </div>

        </div>
        <div style="height:32rem;">
            <livewire:livewire-line-chart
                key="{{ $lineChartStartup->reactiveKey() }}"
                :line-chart-model="$lineChartStartup"
            />
        </div>
    </div>
    <div class="grid grid-cols-2 gap-5 mt-4">
        <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 md:col-span-1" style="height: 32rem;">
            <livewire:livewire-pie-chart
                :pie-chart-model="$pieChartVerifikasiIconAcademyStartupModel"
            />
        </div>
    </div>

    <h3 class="mt-12 text-2xl font-weight-bold">Icon Academy Data Science</h3>
    <hr/>
    <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 mt-4">
        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <h6 class="text-md font-weight-bold">Tanggal Awal</h6>
                <x-datepicker wire:model.lazy="tanggal_awal_ds"
                              class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                              id="grid-start-date-senior" readonly/>
            </div>
            <div>
                <h6 class="text-md font-weight-bold">Tanggal Akhir</h6>
                <x-datepicker wire:model.lazy="tanggal_akhir_ds"
                              class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                              id="grid-end-date-senior" readonly/>
            </div>

        </div>
        <div style="height:32rem;">
            <livewire:livewire-line-chart
                key="{{ $lineChartDs->reactiveKey() }}"
                :line-chart-model="$lineChartDs"
            />
        </div>
    </div>
    <div class="grid grid-cols-2 gap-5 mt-4">

        <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 md:col-span-1" style="height: 32rem;">
            <livewire:livewire-pie-chart
                :pie-chart-model="$pieChartVerifikasiIconAcademyDataScienceModel"
            />
        </div>
    </div>
</div>

@push('js')
    @livewireChartsScripts
@endpush
