<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Perusahaan</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i class="cil-x"></i></button>
    </div>
    <hr />
    <form class="w-full max-w-full mt-4" wire:submit.prevent="submit" autocomplete="off">
        @if($errors->any())
            <div class="bg-red-400 border-l-4 border-red-500 p-4 mb-3" role="alert">
                <p class="font-bold text-lg">Validation Error</p>
                @foreach($errors->all() as $error)
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        @endif


        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    Nama Perusahaan
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 mt-3 leading-tight focus:outline-none focus:bg-white"
                    id="" type="text" required wire:model.defer = "name" name="name">
            </div>

        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                Website Perusahaan
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 mt-3 leading-tight focus:outline-none focus:bg-white"
                id="" type="text" required wire:model.defer = "company_url" name="company_url">
        </div>
    </div>

        <div class="flex -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                    Tipe Profil Perusahaan {{$is_media_change&&$is_edit?"(diupdate)":""}}
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="" wire:model="is_desc_video" required>
                    <option value=0>Gambar</option>
                    <option value=1>Video Youtube</option>
                </select>
            </div>
            @if(!$is_desc_video)
            <div class=" w-full px-3 mb-6 md:mb-0 md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="media_path">
                    Unggah Gambar
                </label>
                <label class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File <input type="file"
                        class="form-control-file" id="media_path"
                        accept=".png,.jpg" wire:model = "media_path" hidden name="media_path">
                </label>
                <br />
                <label wire:ignore id="filename1">
                </label>
            </div>
            @endif
        </div>

        @if($is_desc_video)
        <div class="flex flex-wrap -mx-3 mb-6 -mt-3">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    Link Youtube
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 mt-3 leading-tight focus:outline-none focus:bg-white"
                    id="" type="text" required wire:model = "media_path" name="media_path">
            </div>
        </div>

        @endif

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-content">
                    Deskripsi Perusahaan
                </label>
                <div class="mt-2 bg-white" wire:ignore>
                    <div name="desc" x-data x-ref="quillEditor" x-init="
         quill = new Quill($refs.quillEditor, {theme: 'snow'});
         quill.on('text-change', function () {
@this.set('desc', quill.root.innerHTML);
         });
       "  wire:model.lazy="desc">
         {!! $desc !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="flex -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0 md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="logo_path">
                    Logo Perusahaan {{$is_logo_change&&$is_edit?"(diupdate)":""}}
                </label>
                <label class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File <input type="file"
                        class="form-control-file" name="logo_path" id="logo_file"
                        accept=".jpg,.png,.svg" hidden wire:model.defer = "logo_path">
                </label>
                <br />
                <label wire:ignore id="filename">
                </label>
            </div>
        </div>


        <div class="flex flex-wrap mb-2 justify-end">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                Save
            </button>
        </div>
    </form>

<script>
     $('#logo_file').change(function () {
            let fullPath = $('#logo_file').val()
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

     $('#media_path').change(function () {
            let fullPath = $('#media_path').val()
            if (fullPath) {
                let startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                let filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                if (filename) {
                    $('#filename1').html(filename)
                }
            }
     })
</script>
