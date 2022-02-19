<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Evaluasi</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <form class="w-full max-w-full mt-4" wire:submit.prevent="save" autocomplete="off">
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
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-content">
                    Apakah Diterima
                </label>
                <div class="mt-2 bg-white" wire:ignore>
                    <div
                        name="is_accepted"
                        x-data
                        x-ref="quillEditor"
                        x-init="
         quill = new Quill($refs.quillEditor, {theme: 'snow'});
         quill.on('text-change', function () {
           @this.set('is_accepted', quill.root.innerHTML);
         });
       "
                        wire:model.lazy="is_accepted"
                    >
                        {!! $is_accepted !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap mb-2 justify-end">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full disabled:opacity-50" type="submit" wire:loading.attr="disabled" wire:target="evaluation_file">
                Save
            </button>
        </div>
    </form>
    {{-- <script>
        $('#upload-file').change(function(){
            let fullPath = $('#upload-file').val()
            if (fullPath) {
                let startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                let filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                if(filename){
                    $('#filename').html(filename)
                }
            }
        })
    </script> --}}
</div>
