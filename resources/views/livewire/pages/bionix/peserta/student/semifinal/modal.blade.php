<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Upload File Semifinal</h5>
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
        <div class="flex flex-wrap flex-column -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="link-video">
                    Link Video
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="link-video" type="text" required wire:model.defer="videoLink">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0 mt-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-start-date">
                    File Jawaban (.zip,.rar, atau .pdf)
                </label>
                <div class="border rounded d-flex items-center">
                    <button
                        wire:target="fileSemifinal" wire:loading.attr="disabled"
                        onclick="$('#fileSemifinal').click()"
                        type="button"
                        class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-0">
                        <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                    </button>
                    <p id="file-name" wire:ignore class="ml-2"></p>
                </div>
                <input type="file"
                       onchange="uploadListener()"
                       wire:model="fileSemifinal"
                       class="form-control-file"
                       name="fileSemifinal"
                       id="fileSemifinal"
                       accept=".pdf"
                       hidden/>
                <label class="font-xs">Apabila anda hanya ingin mengubah link Video, maka anda tidak perlu mengunggah
                    file lagi.</label>
                <label wire:target="fileSemifinal" wire:loading class="font-xs">File sedang
                    diproses, harap tunggu</label>
            </div>
        </div>

        <div class="flex flex-wrap mb-2 justify-end items-center">
            @if($errorMessage)
                <label class="text-red-600 font-sm mr-8 mb-0">{{$errorMessage}}</label>
            @endif
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="submit"
                    wire:loading.remove wire:target="fileSemifinal">
                Simpan
            </button>
        </div>
    </form>
</div>

