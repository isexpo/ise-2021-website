<div class="p-4">
    {{-- TODO (Putri) Tugas
    Modifikasi dari CRUD pengumuman BIONIX (kurang lebih hampir sama kayak pengumuman)

    URL : /dashboard/admin/academy/tugas

    --}}
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Tugas</h5>
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
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    Nama Tugas
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-name" type="text" required wire:model.defer="nama_tugas">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0 md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                       for="grid-deadline-date">
                    Deadline
                </label>
                {{--                <x-datepicker wire:model.lazy="deadline"--}}
                {{--                              class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"--}}
                {{--                              id="grid-deadline-date" readonly/>--}}
                <input type="datetime-local" id="deadline"
                       class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       value="{{$deadline?date('Y-m-d',strtotime($deadline)).'T'.date('H:i',strtotime($deadline)):date('Y-m-d').'T'.date('H:i')}}"/>
            </div>
            <div class="w-full px-3 md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-type">
                    Tipe
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-type" wire:model.defer="tipe_tugas" required>
                    <option value="Startup">Startup</option>
                    <option value="Data Science">Data Science</option>

                </select>
            </div>

        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-content">
                    Deskripsi Tugas
                </label>
                <div class="mt-2 bg-white" wire:ignore>
                    <div
                        name="deskripsi_tugas"
                        x-data
                        x-ref="quillEditor"
                        x-init="
         quill = new Quill($refs.quillEditor, {theme: 'snow'});
         quill.on('text-change', function () {
           @this.set('deskripsi_tugas', quill.root.innerHTML);
         });
       "
                        wire:model.lazy="deskripsi_tugas"
                    >
                        {!! $deskripsi_tugas !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="upload-file">
                    Unggah File Soal @if($question_file) @endif
                </label>
                <label
                    class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File <input type="file"
                                                                                   wire:model.defer="question_file"
                                                                                   class="form-control-file"
                                                                                   name="question_file"
                                                                                   id="upload-file"
                                                                                   accept=".zip,.rar,.pdf"
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
        $('#deadline').change(() => {
        @this.deadline
            = $('#deadline').val()
        })

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
