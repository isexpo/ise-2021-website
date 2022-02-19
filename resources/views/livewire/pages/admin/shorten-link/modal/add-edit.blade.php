<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Shorten Link</h5>
        <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <form class="mt-4 w-full max-w-full" wire:submit.prevent="submit" autocomplete="off">
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
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="link_pendek">
                    Link Pendek
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="link_pendek" type="text" required wire:model.defer="link_pendek">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="link_tujuan">
                    Link Tujuan
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="link_tujuan" type="text" required wire:model.defer="link_tujuan">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="deskripsi">
                    Deskripsi
                </label>
                <div class="mt-2 bg-white" wire:ignore>
                    <div
                        name="deskripsi"
                        x-data
                        x-ref="quillEditor"
                        x-init="
         quill = new Quill($refs.quillEditor, {theme: 'snow'});
         quill.on('text-change', function () {
           @this.set('deskripsi', quill.root.innerHTML);
         });
       "
                        wire:model.lazy="deskripsi"
                    >
                        {!! $deskripsi !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap mb-2 justify-end">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                Save
            </button>
        </div>
    </form>
</div>


