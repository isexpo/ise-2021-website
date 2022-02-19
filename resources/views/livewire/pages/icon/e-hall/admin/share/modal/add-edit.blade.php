<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Share Artikel</h5>
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
            <div class="w-full px-3 mb-6 md:mb-0 md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-start-date">
                    Tanggal Mulai
                </label>
                <x-datepicker wire:model.lazy="tanggal_mulai"
                              class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                              id="grid-start-date" readonly/>
            </div>
            <div class="w-full px-3 mb-6 md:mb-0 md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-end-date">
                    Tanggal Selesai
                </label>
                <x-datepicker wire:model.lazy="tanggal_selesai"
                              class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                              id="grid-end-date" readonly/>
            </div>
        </div>


        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-content">
                    Caption Artikel
                </label>
                <div class="mt-2 bg-white" wire:ignore>
                    <div
                        name="caption"
                        x-data
                        x-ref="quillEditor"
                        x-init="
         quill = new Quill($refs.quillEditor, {theme: 'snow'});
         quill.on('text-change', function () {
           @this.set('caption', quill.root.innerHTML);
         });
       "
                        wire:model.lazy="caption"
                    >
                        {!! $caption !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="upload-file">
                    Unggah File Gambar @if($img_path) @endif
                </label>
                <label
                    class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah Gambar <input type="file"
                                                                                   wire:model.defer="img_path"
                                                                                   class="form-control-file"
                                                                                   name="img_path"
                                                                                   id="upload-file"
                                                                                   accept=".png,.jpg,.jpeg"
                                                                                   hidden>
                </label>
                <br/>
                <label wire:ignore id="filename"></label>
            </div>
        </div>

        <div class="flex flex-wrap mb-2 justify-end">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                Save
            </button>
        </div>
    </form>
    <script>

        $('#upload-file').change(function () {
            let fullPath = $('#upload-file').val()
            if (fullPath) {
                let startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                let filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                if (filename) {
                    $('#filename').html(filename)
                }
            }
        })
    </script>
</div>
