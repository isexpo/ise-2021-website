<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Hapus Anggota</h5>
        <button type="button" title="Tutup" wire:click="$emit('closeModal')" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <p class="text-lg mt-4">Apakah anda ingin menghapus anggota {{$anggota_no}}?</p>
    <div class="flex flex-wrap mb-2 justify-end">
        <button class="text-gray border-2 border-gray-300 font-bold py-2 px-4 rounded-full mr-2"
                type="button" wire:click="$emit('closeModal')">
            Batal
        </button>
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" wire:click="deleteMember()">
            Ya
        </button>
    </div>
</div>
