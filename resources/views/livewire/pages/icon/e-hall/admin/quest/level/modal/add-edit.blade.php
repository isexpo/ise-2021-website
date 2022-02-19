<div class="p-4">

    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Quest</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <form class="w-full max-w-full mt-4" wire:submit.prevent="submit" autocomplete="off">
        @if($errors->any())
            <div class="bg-red-400 border-l-4 border-red-500 p-4 mb-3" role="alert">
                <p class="font-bold text-lg">Validation Error</p>
                @foreach ($errors->all() as $error)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        @endif

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    Nama Level
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-name" type="text" required wire:model.defer="name">
            </div>
            <div class="w-full px-3 md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="deadline">
                    Waktu Dibuka
                </label>
                <x-datepicker wire:model.lazy="open_date"
                              class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                              id="grid-end-date" readonly/>
                <span class="text-gray-500">Level akan dibuka setiap jam 09.00 WIB</span>
            </div>
        </div>
        <div class="flex flex-wrap mb-2 justify-end">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full"
                    type="submit">
                Save
            </button>
        </div>
    </form>
    <script>
        $('#deadline').change(() => {
        @this.deadline
            = $('#deadline').val()
        })
    </script>
</div>
