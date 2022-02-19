<div>
    <div class="p-4 bg-white rounded-xl shadow-md" x-data="{open:false}">
        <button class="w-full flex flex-col items-start" @click="open=!open">
            <div class="flex flex-row items-center w-full justify-content-between">
                <h2
                    class="font-bold text-xl text-gray-600 capitalize">{{$task->title}}</h2>
                <i class="fas fa-chevron-down" x-show="!open"></i>
                <i class="fas fa-chevron-up" x-show="open"></i>
            </div>
            <div><i class="far fa-calendar-alt text-md mb-4 mr-2"></i><small
                    class="text-gray-500 font-medium text-base">Deadline
                    : {{date('d F Y H:i:s',strtotime($task->deadline))}}</small>
            </div>
        </button>
        <div x-show="open">
            <hr class="my-2"/>
            <h2
                class="font-bold text-lg mt-4 text-gray-600 capitalize">Soal</h2>
            {!! $task->description !!}
            <br>
            <div class="justify-center md:flex-row flex flex-col justify-content-end">
                @if($task->question_file_path)
                    <a href="{{asset('storage/'.$task->question_file_path)}}" target="_blank">
                        <button
                            class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2">
                            <i class="fas fa-cloud-download-alt mr-2"></i>Unduh File Soal
                        </button>
                    </a>
                @endif
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
                @if ($task->deadline > \Carbon\Carbon::now()&&Auth::user()->userable->academy->profile_verif_status=='Terverifikasi')
                    <button onclick="$('#fileTask').click()"
                            class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mx-2">
                        <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                    </button>
                    <input type="file"
                           wire:model.defer="fileTask"
                           class="form-control-file"
                           name="fileTask"
                           id="fileTask"
                           accept=".pdf,.zip,.rar"
                           hidden>
                @endif

            </div>
            <div class="flex flex-col items-end">
                <span wire:loading wire:target="fileTask" class="mx-2">Sedang mengunggah fle jawaban anda.</span>
            </div>
            @if($submission)
                @if($submission->evaluation_comment)
                    <hr class="my-2"/>

                    <h2
                        class="font-bold text-lg text-gray-600 capitalize">Evaluasi</h2>
                    {!! $submission->evaluation_comment !!}
                    <br>
                    @if($submission->evaluation_file_path)
                        <div class="justify-center md:flex-row flex flex-col justify-content-end">
                            <a href="{{asset('storage/'.$submission->evaluation_file_path)}}" target="_blank">
                                <button
                                    class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mx-2 ">
                                    <i class="fas fa-cloud-download-alt mr-2"></i>Unduh File Evaluasi
                                </button>
                            </a>
                        </div>
                    @endif
                @endif
            @endif
        </div>
    </div>
</div>
