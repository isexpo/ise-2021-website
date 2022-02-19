<div class="p-4">

    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Evaluasi Jawaban</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <div class="px-4 mt-4">

        <div class="grid grid-cols-1">
            <div>
                <p class="font-bold mb-0 mt-2">Komentar Evaluasi</p>
                @if($evaluation_comment)
                    {!! $evaluation_comment !!}
                @else
                    <p>-</p>
                @endif
            </div>
            <div>
                <p class="font-bold mb-0 mt-2">File Evaluasi</p>
                @if($evaluation_file_path)
                    <button wire:click="download"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <i class="fas fa-cloud-download-alt"></i> Unduh
                    </button>
                @else
                    <p>-</p>
                @endif
            </div>
        </div>
    </div>
</div>
