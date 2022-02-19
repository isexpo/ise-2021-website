<div class="px-8 pb-8">
    <h1 class="text-3xl font-weight-bold">Halo, Selamat Datang di Dashboard BIONIX!</h1>
    <h3 class="mt-4 text-2xl font-weight-bold">Bionix Student</h3>
    <hr/>
    <div class="grid md:grid-cols-3 grid-cols-1 gap-5 mt-4">
        <div class="shadow rounded p-4 border bg-white flex-1 col-span-3" style="height: 32rem;">
            <livewire:livewire-column-chart
                :column-chart-model="$columnChartRegionBionixModel"
            />
        </div>
        <div class="shadow rounded p-4 border bg-white flex-1 col-span-3">
            <div class="grid md:grid-cols-3 gap-4">
                <div>
                    <h6 class="text-md font-weight-bold">Tanggal Awal</h6>
                    <x-datepicker wire:model.lazy="tanggal_awal_junior"
                                  class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                  id="grid-start-date-junior" readonly/>
                </div>
                <div>
                    <h6 class="text-md font-weight-bold">Tanggal Akhir</h6>
                    <x-datepicker wire:model.lazy="tanggal_akhir_junior"
                                  class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                  id="grid-end-date-junior" readonly/>
                </div>

            </div>
            <div style="height:32rem;">
                <livewire:livewire-line-chart
                    key="{{ $lineChartJunior->reactiveKey() }}"
                    :line-chart-model="$lineChartJunior"
                />
            </div>
        </div>
        <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 md:col-span-1" style="height: 32rem;">
            <livewire:livewire-pie-chart
                :pie-chart-model="$pieChartPembayaranBionixModel"
            />
        </div>
        <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 md:col-span-1" style="height: 32rem;">
            <livewire:livewire-pie-chart
                :pie-chart-model="$pieChartVerifikasiBionixModel"
            />
        </div>
        <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 md:col-span-1" style="height: 32rem;">
            <livewire:livewire-pie-chart
                :pie-chart-model="$pieChartInformasiBionixModel"
            />
        </div>
    </div>

    <h3 class="mt-12 text-2xl font-weight-bold">Bionix College</h3>
    <hr/>
    <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 mt-4">
        <div class="grid md:grid-cols-3 gap-4">
            <div>
                <h6 class="text-md font-weight-bold">Tanggal Awal</h6>
                <x-datepicker wire:model.lazy="tanggal_awal_senior"
                              class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                              id="grid-start-date-senior" readonly/>
            </div>
            <div>
                <h6 class="text-md font-weight-bold">Tanggal Akhir</h6>
                <x-datepicker wire:model.lazy="tanggal_akhir_senior"
                              class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                              id="grid-end-date-senior" readonly/>
            </div>

        </div>
        <div style="height:32rem;">
            <livewire:livewire-line-chart
                key="{{ $lineChartSenior->reactiveKey() }}"
                :line-chart-model="$lineChartSenior"
            />
        </div>
    </div>
    <div class="grid grid-cols-3 gap-5 mt-4">
        <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 md:col-span-1" style="height: 32rem;">
            <livewire:livewire-pie-chart
                :pie-chart-model="$pieChartPembayaranBionixSeniorModel"
            />
        </div>
        <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 md:col-span-1" style="height: 32rem;">
            <livewire:livewire-pie-chart
                :pie-chart-model="$pieChartVerifikasiBionixSeniorModel"
            />
        </div>
        <div class="shadow rounded p-4 border bg-white flex-1 col-span-3 md:col-span-1" style="height: 32rem;">
            <livewire:livewire-pie-chart
                :pie-chart-model="$pieChartInformasiSeniorBionixModel"
            />
        </div>
    </div>
</div>
@push('js')
    @livewireChartsScripts
@endpush
