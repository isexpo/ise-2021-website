<div class="px-8">

    <div
        class="bg-{{$alert_color}}-100 border-t-4 border-{{$alert_color}}-500 rounded-b text-{{$alert_color}}-900 px-4 py-3 shadow-md"
        role="alert">
        <div class="flex">
            <div class="py-1">
                <svg class="fill-current h-6 w-6 text-{{$alert_color}}-500 mr-4"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                </svg>
            </div>
            <div>
                <p class="font-bold">{{$alert_header}}</p>
                <p class="text-sm">{!! $alert_content !!}</p>
                @if(Auth::user()->userable->academy->profile_verif_status!='Terverifikasi'&&Auth::user()->userable->academy->profile_verif_status!='Tahap Verifikasi')
                    <form wire:submit.prevent="applyVerification()">
                        <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Ajukan
                            Verifikasi {{Auth::user()->userable->academy->profile_verif_status == 'Ditolak'?'Ulang':''}}
                        </button>
                    </form>
                @elseif(Auth::user()->userable->academy->profile_verif_status=='Tahap Verifikasi')
                    <button
                        wire:click="batalSubmit()"
                        type="button"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Batalkan Pengajuan
                    </button>
                @endif
            </div>
        </div>
    </div>
    <h3 class="text-xl font-weight-bold my-4">Registrasi Ulang</h3>
    <form wire:submit.prevent="saveData" enctype="multipart/form-data">
        <div class="card p-8 rounded-xl">
            <div
                class="grid sm:mb-10 sm:gap-x-20 sm:gap-y-8 gap-y-5 gap-x-5 md:grid-cols-10">
                <h4 class="text-lg font-bold text-gray-500 col-span-5 md:col-span-2">Peserta</h4>
                <div class="md:hidden col-span-5">
                    @if($is_edit)
                        @if(Auth::user()->userable->academy->profile_verif_status!="Terverifikasi"&&Auth::user()->userable->academy->profile_verif_status!="Tahap Verifikasi")
                            <button
                                class="justify-self-end block text-blue-500">Simpan
                            </button>
                        @endif

                    @else
                        @if(Auth::user()->userable->academy->profile_verif_status!="Terverifikasi"&&Auth::user()->userable->academy->profile_verif_status!="Tahap Verifikasi")
                            <button
                                type="button"
                                class="justify-self-end block text-blue-500"
                                wire:click="toEditMode()"><i class="fas fa-edit"></i> Edit
                            </button>
                        @endif
                    @endif
                </div>
                <div class="col-span-10 md:col-span-6 flex items-center">
                    <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
                </div>
                <div class="col-span-10 md:col-span-2 md:block hidden">
                    @if($is_edit)
                        @if(Auth::user()->userable->academy->profile_verif_status!="Terverifikasi"&&Auth::user()->userable->academy->profile_verif_status!="Tahap Verifikasi")
                            <button
                                class="text-blue-500 justify-self-end">Simpan
                            </button>
                        @endif
                    @else
                        @if(Auth::user()->userable->academy->profile_verif_status!="Terverifikasi"&&Auth::user()->userable->academy->profile_verif_status!="Tahap Verifikasi")
                            <button type="button"
                                    class="text-blue-500 justify-self-end"
                                    wire:click="toEditMode()"><i class="fas fa-edit"></i> Edit
                            </button>
                        @endif
                    @endif
                </div>
                <div class="col-span-10 md:col-span-2"></div>
                <div class="col-span-10 md:col-span-6">
                    <div class="grid md:grid-cols-2 gap-4 grid-cols-1">
                        <div>
                            <div>
                                <label for="team_name"
                                       class="mb-2 font-bold text-gray-400">Nama Peserta</label><br>
                                @if($is_edit)
                                    <input wire:model.defer="name" type="text" id="name" name="name"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}>
                                @else
                                    <p class="font-bold text-lg">{{$name}}</p>
                                @endif
                            </div>
                            <div>
                                <label for="Email"
                                       class="mb-2 font-bold text-gray-400 mt-4">Email Peserta</label><br>
                                @if($is_edit)
                                    <input wire:model.defer="email" type="text" id="email" name="email"
                                           class="bg-gray-100 registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required disabled>
                                    <small class="text-gray-400 font-normal">*Email peserta tidak bisa dirubah.</small>
                                @else
                                    <p class="font-bold text-lg">{{$email}}</p>
                                @endif
                            </div>
                            <div class="">
                                <label for="whatsapp" class="mb-2 font-bold text-gray-400 mt-4">Nomor WA
                                </label><br>
                                @if($is_edit)
                                    <input wire:model.defer="whatsapp" type="text" id="whatsapp"
                                           name="whatsapp"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}>
                                    <small class="text-red-400 font-normal" id="phone_1_error" style="display: none">Penulisan
                                        nomor
                                        handphone
                                        tidak sesuai dengan ketentuan.</small><br/>
                                    <small class="text-gray-400 font-normal">*Nomor
                                        Handphone diawali 08 dan terdiri dari 10-13 karakter.</small>
                                @else
                                    <p class="font-bold text-lg">{{$whatsapp}}</p>
                                @endif
                            </div>
                            <div>
                                <label for="twibbon_link" class="mb-2 font-bold text-gray-400 mt-4">Link Post
                                    Twibbon
                                </label><br>
                                @if($is_edit)
                                    <input wire:model.defer="twibbon_link" type="text" id="twibbon_link"
                                           name="twibbon_link"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}>
                                @else
                                    <a href="{{$twibbon_link}}" target="_blank"
                                       class="font-bold text-md text-blue-500">{{$twibbon_link}}</a>
                                @endif
                            </div>
                            <div class="">
                                <label for="hackerrank" class="mb-2 font-bold text-gray-400 mt-4">Link Profil Hackerrank
                                </label><br>
                                @if($is_edit)
                                    <input wire:model.defer="hackerrank_link" type="text" id="hackerrank"
                                           name="hackerrank"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}>
                                @else
                                    @if($hackerrank_link)
                                        <a href="{{$hackerrank_link}}" target="_blank"
                                           class="font-bold text-md text-blue-500">{{$hackerrank_link}}</a>
                                    @else
                                        <p class="font-bold text-md">-</p>
                                    @endif
                                @endif
                            </div>
                            <div class="">
                                <label for="curriculum_vitae" class="mb-2 font-bold text-gray-400 mt-4">Curriculum Vitae
                                    (CV)
                                </label>
                                <br>
                                @if($is_edit)
                                    <p id="cv-name" wire:ignore></p>
                                    <button
                                        wire:target="curriculum_vitae" wire:loading.attr="disabled"
                                        onclick="$('#curriculum_vitae').click()"
                                        type="button"
                                        class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                    </button>
                                    <input type="file"
                                           onchange="uploadListener()"
                                           wire:model="curriculum_vitae"
                                           class="form-control-file"
                                           name="curriculum_vitae"
                                           id="curriculum_vitae"
                                           accept=".pdf"
                                           hidden>
                                    <label wire:target="curriculum_vitae" wire:loading class="font-xs">File sedang
                                        diproses, harap tunggu</label>
                                @else
                                    @if($curriculum_vitae && is_string($curriculum_vitae))
                                        <a target="_blank" href="{{asset('storage/'.$curriculum_vitae)}}">
                                            <button
                                                type="button"
                                                class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                                <i class="fas fa-cloud-download-alt mr-2"></i>Unduh CV Anda
                                            </button>
                                        </a>
                                    @else
                                        <p class="font-bold text-md">-</p>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="" x-data="{ isUploading: false, progress: 0 }"
                                 x-on:livewire-upload-start="isUploading = true"
                                 x-on:livewire-upload-finish="isUploading = false"
                                 x-on:livewire-upload-error="isUploading = false"
                                 x-on:livewire-upload-progress="progress = $event.detail.progress">
                                <div class="flex flex-col items-center justify-center md:p-3 w-full">
                                    <label for="kartu_pelajar"
                                           class="capitalize text-gray-400">KTM/Surat Keterangan Mahasiswa Aktif</label>
                                    <div x-show="isUploading" class="w-full">
                                        <progress max="100" x-bind:value="progress" class="w-full"></progress>
                                    </div>
                                    <img
                                        src="{{$photo1?(is_string($photo1)?asset('storage/'.$photo1):$photo1->temporaryUrl()):asset('/img/global/placeholder-image.png')}}"
                                        class="object-fit mx-auto" alt="Kartu Pelajar" id="member_1_card_preview"
                                        style="max-height:50vh">
                                    @if(Auth::user()->userable->academy->profile_verif_status!="Terverifikasi"&&Auth::user()->userable->academy->profile_verif_status!="Tahap Verifikasi"&&$is_edit)
                                        <button
                                            type="button"
                                            onclick="$('#member_1_card').click()"
                                            class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-3">
                                            <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                        </button>
                                        <input type="file"
                                               wire:model.defer="photo1"
                                               class="form-control-file"
                                               name="member_1_card"
                                               id="member_1_card"
                                               accept=".jpg,.jpeg,.png"
                                               hidden>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </form>
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
                        <li>{{ $error }}</li>
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
                    <p class="font-bold">{{$messageType=='green'?'Sukses':'Terjadi Masalah'}}</p>
                    <p class="text-sm">{{$message}}</p>
                </div>
                <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start"><i
                        class="cil-x"></i></button>
            </div>
        </div>
    @endif
</div>
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <style>
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
            position: absolute;
            top: 1px;
            right: 1px;
            width: 20px;
            bottom: 1px;
        }

        .select2 {
            border: 0.75px solid #6b7280;
        }

        .select2-container--default .select2-selection--single {
            border: 0;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #000;
            line-height: 28px;
            font-weight: normal;
            padding-left: 0px;
        }
    </style>
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        function uploadListener() {
            let fullPath = $('#curriculum_vitae').val()
            if (fullPath) {
                let startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                let filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                if (filename) {
                    $('#cv-name').html(filename)
                }
            }
        }

        $(document).ready(function () {
            $('.js-example-basic-single').select2({
                width: 'resolve'
            })

            $('.select2').addClass('registration-form input-text')

            $('.js-example-basic-single').on('change', function (e) {
            @this.set('school_city', e.target.value)
            });

            var $regexname = /^(^08)\d{8,11}$/;
            $('#whatsapp').on('keypress keydown keyup', function () {
                if (!$(this).val().match($regexname)) {
                    // there is a mismatch, hence show the error message
                    $('#phone_1_error').removeClass('hidden');
                    $('#phone_1_error').show();
                } else {
                    // else, do not display message
                    $('#phone_1_error').addClass('hidden');
                }
            });
        });


    </script>
@endpush
