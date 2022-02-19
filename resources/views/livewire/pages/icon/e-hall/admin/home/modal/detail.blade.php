<div class="p-4">

    <div class="px-4 mt-4">
        @if ($type=='e-hall')
            <div id="anggota_1" class="mt-8">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <p class="font-bold mb-0 mt-2">Nama Peserta</p>
                        <p>{{$ho_name}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Point</p>
                        <p>{{$ho_point}}</p>
                    </div>
                </div>

            </div>
        @endif
    </div>
    <hr class="my-4"/>

    <div class="flex flex-row justify-end">
        <button
            type="button" wire:click="$emit('closeModal')"
            class="text-gray border-2 border-gray-300 font-bold py-2 px-4 rounded-full mr-2" title="Tutup">
            Tutup
        </button>
    </div>
</div>
