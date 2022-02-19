<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Informasi Soal</h5>
        <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <div class="px-4 mt-4">
        <div id="data_soal">
            <h5 class="text-md font-bold">Data Soal</h5>
            <hr/>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Tipe Soal</p>
                    <p>{{$tipe_quiz}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Level</p>
                    <p>{{$quest_level}}</p>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div>
                    <p class="font-bold mb-0 mt-2">Soal</p>
                    <p>{{$question}}</p>
                </div>
            </div>
        </div>
        @if ($tipe_quiz == 'Pilgan')
            <div id="data_opsi" class="mt-8">
                <h5 class="text-md font-bold">Data Opsi</h5>
                <hr/>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <p class="font-bold mb-0 mt-2">Opsi A</p>
                        <p>{{$opt_a}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Opsi B</p>
                        <p>{{$opt_b}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Opsi C</p>
                        <p>{{$opt_c}}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Opsi D</p>
                        <p>{{$opt_d}}</p>
                    </div>
                </div>
        </div>
        @endif

        <div id="data_jawaban" class="mt-8">
            <h5 class="font-bold">Data Jawaban</h5>
            <hr/>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Jawaban</p>
                    <p>{{$answer}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Penjelasan</p>
                    <p>{!! $explanation !!}</p>
                </div>
            </div>
        </div>
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
