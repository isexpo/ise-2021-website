<div class="p-4">

    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Quest</h5>
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
            <div class="w-full px-3 md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-type">
                    Tipe
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-type" wire:model="tipe_quiz" wire:change="onTypeChange" required>
                    <option value="Pilgan">Pilgan</option>
                    <option value="Isian">Isian</option>
                    <option value="ToF">ToF</option>
                </select>
            </div>
            <div class="w-full px-3 md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-type">
                    Level
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-type" wire:model.defer="quest_level_id" required>
                    @foreach ($level as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-question">
                    Soal
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-question" type="text" required wire:model.defer="question">
            </div>

        </div>

@if ($tipe_quiz == 'Pilgan')
    <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 md:w-1/4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-ops-a">
                        Opsi A
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-ops-a" type="text"  wire:model.defer="opt_a">
                </div>
                <div class="w-full px-3 md:w-1/4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-ops-b">
                        Opsi B
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-ops-b" type="text"  wire:model.defer="opt_b">
                </div>
                <div class="w-full px-3 md:w-1/4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-ops-c">
                        Opsi C
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-ops-c" type="text"  wire:model.defer="opt_c">
                </div>
                <div class="w-full px-3 md:w-1/4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-ops-d">
                        Opsi D
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-ops-d" type="text"  wire:model.defer="opt_d">
                </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-answer">
                    Jawaban
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-tof" wire:model="answer" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
        </div>
@endif
@if($tipe_quiz == 'ToF')
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-tof">
                    Jawaban
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-tof" wire:model="answer" required>
                    <option value="True">True</option>
                    <option value="False">False</option>
                </select>
            </div>
        </div>
@endif
@if ($tipe_quiz == 'Isian')
    <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-isian">
                    Jawaban
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="isian" type="text" required wire:model.defer="answer">
            </div>
        </div>
@endif

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-content">
                    Explanation
                </label>
                <div class="mt-2 bg-white" wire:ignore>
                    <div
                        name="explanation"
                        x-data
                        x-ref="quillEditor"
                        x-init="
         quill = new Quill($refs.quillEditor, {theme: 'snow'});
         quill.on('text-change', function () {
           @this.set('explanation', quill.root.innerHTML);
         });
       "
                        wire:model.lazy="explanation"
                    >
                        {!! $explanation !!}
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
