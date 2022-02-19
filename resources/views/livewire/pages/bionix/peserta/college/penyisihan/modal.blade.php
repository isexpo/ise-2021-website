<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Upload File Penyisihan</h5>
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
            <div class="w-full px-3 mb-6 md:mb-0" wire:ignore>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-start-date">
                    Apakah anda bersedia membayar uang pendaftaran sebesar Rp99.000 per tim apabila lolos menuju tahap
                    semifinal?
                </label>
                <select wire:model.defer="want_to_pay"
                        class="my-2 bg-white p-1 flex border border-gray-200 rounded w-full">
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
            <div class="w-full px-3 mb-6 md:mb-0 mt-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-start-date">
                    File Jawaban (.zip,.rar, atau .pdf)
                </label>
                <div class="border rounded d-flex items-center">
                    <button
                        wire:target="filePenyisihan" wire:loading.attr="disabled"
                        onclick="$('#filePenyisihan').click()"
                        type="button"
                        class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-0">
                        <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                    </button>
                    <p id="file-name" wire:ignore class="ml-2"></p>
                </div>
                <input type="file"
                       onchange="uploadListener()"
                       wire:model="filePenyisihan"
                       class="form-control-file"
                       name="filePenyisihan"
                       id="filePenyisihan"
                       accept=".pdf"
                       hidden/>
                <label wire:target="filePenyisihan" wire:loading class="font-xs">File sedang
                    diproses, harap tunggu</label>
            </div>
        </div>
        <div class="flex flex-wrap mb-2 justify-end">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="submit"
                    wire:loading.attr="disabled" wire:target="filePenyisihan">
                Simpan
            </button>
        </div>
    </form>
</div>

