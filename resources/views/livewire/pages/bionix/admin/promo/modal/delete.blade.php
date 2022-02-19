<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Promo</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <p class="text-lg mt-4">Apakah anda ingin menghapus promo <b>{{$this->promo->name}}</b>?</p>
    <form class="w-full max-w-full" wire:submit.prevent="delete">
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
        <div class="flex flex-wrap mb-2 justify-end">
            <button class="text-gray border-2 border-gray-300 font-bold py-2 px-4 rounded-full mr-2"
                    type="button" wire:click="$emit('closeModal')">
                Batal
            </button>
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                Ya
            </button>
        </div>
    </form>
</div>
