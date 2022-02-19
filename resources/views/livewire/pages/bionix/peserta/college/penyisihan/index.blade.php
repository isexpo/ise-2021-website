<div class="px-8">
    <h3 class="text-xl font-weight-bold my-4">Penyisihan</h3>
    <div class="grid grid-cols-1 gap-6 mt-4 mb-4">
        <div>
            <div class="p-4 bg-white rounded-xl shadow-md">
                <div class="w-full flex flex-col items-start">
                    <div class="flex flex-row items-center w-full justify-content-between">
                        <h2
                            class="font-bold text-xl text-gray-600 capitalize">Penyisihan</h2>
                    </div>
                    <div><i class="far fa-calendar-alt text-md mb-4 mr-2"></i><small
                            class="text-gray-500 font-medium text-base">Deadline
                            : 16 September 2021 23:59:59</small>
                    </div>
                </div>
                <div>
                    <hr class="my-2"/>
                    <h2
                        class="font-bold text-lg mt-4 text-gray-600 capitalize">Petunjuk Pengerjaan</h2>
                    <ol class="list-decimal ml-4">
                        <li>Untuk soal dan petunjuk teknis pengerjaan dapat diakses di <a
                                href="https://ise-its.com/penyisihan-college" target="_blank" class="text-blue-500">https://ise-its.com/penyisihan-college</a>
                        </li>
                        <li>Unggah jawaban anda pada tombol unggah di bawah. Apabila anda pernah mengunggah jawaban
                            sebelumnya, maka jawaban lama anda akan digantikan oleh jawaban yang baru diunggah.
                        </li>
                    </ol>
                    <br>
                    <div class="justify-center md:flex-row flex flex-col justify-content-end">
                        @if($submission)
                            @if($submission->file_path)
                                <a href="{{asset('storage/'.$submission->file_path)}}" target="_blank">
                                    <button
                                        class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mx-2 ">
                                        <i class="fas fa-cloud-download-alt mr-2"></i>Unduh Jawaban Anda
                                    </button>
                                </a>
                            @endif
                        @endif
                        @if ($deadline > \Carbon\Carbon::now())
                            @livewire('livewire-ui-modal')
                            @livewireUIScripts
                            <button wire:click="$emit('openModal', 'pages.bionix.peserta.college.penyisihan.modal',{{ json_encode(["submission" => ($submission?$submission->id:null)]) }})"
                                    class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mx-2">
                                <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                            </button>
                            {{--                            <input type="file"--}}
                            {{--                                   wire:model.defer="filePenyisihan"--}}
                            {{--                                   class="form-control-file"--}}
                            {{--                                   name="filePenyisihan"--}}
                            {{--                                   id="filePenyisihan"--}}
                            {{--                                   accept=".pdf,.zip,.rar"--}}
                            {{--                                   hidden>--}}
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div wire:loading.delay wire:target="filePenyisihan"
         class="fixed bottom-12 right-12 bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md"
         role="alert" style="color:rgba(30, 58, 138, var(--tw-text-opacity))">
        <div class="flex">
            <div class="py-1">
                <svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                </svg>
            </div>
            <div>
                <p class="font-bold">Sedang mengunggah</p>
                <p class="text-sm">Harap tunggu sesaat.</p>
            </div>
        </div>
    </div>
    @if($errors->any())
        <div
            class="fixed bottom-12 right-12 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Terjadi masalah</p>
                    <p class="text-sm">@foreach ($errors->all() as $error)
                        <li>{{$error }}</li>
                        @endforeach</p>
                </div>
                <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start"><i
                        class="cil-x"></i></button>
            </div>
        </div>
    @endif
    @if($message)
        <div
            class="fixed bottom-12 right-12 bg-{{$messageType}}-100 border-t-4 border-{{$messageType}}-500 rounded-b text-{{$messageType}}-900 px-4 py-3 shadow-md"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-{{$messageType}}-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold">{{$messageType=='green'?'Sukses':($messageType=='blue'?'Informasi':'Terjadi Masalah')}}</p>
                    <p class="text-sm">{{$message}}</p>
                </div>
                <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start"><i
                        class="cil-x"></i></button>
            </div>
        </div>
    @endif
</div>
@push('js')
    <script>
        function uploadListener() {
            let fullPath = $('#filePenyisihan').val()
            if (fullPath) {
                let startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                let filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                if (filename) {
                    $('#file-name').html(filename)
                }
            }
        }
    </script>
@endpush
