<div>
    <h1 class="text-3xl font-weight-bold">Halo, Selamat Datang di Dashboard ICON Virtual Intern & Job Fair!</h1>
    <h3 class="text-xl font-weight-bold my-4">Edit Biodata</h3>
    <form wire:submit.prevent="saveData" enctype="multipart/form-data">
        <div class="card p-8 rounded-xl">
            <div class="grid sm:mb-10 sm:gap-x-20 sm:gap-y-8 gap-y-5 gap-x-5 md:grid-cols-10">
                <h4 class="text-lg font-bold text-gray-500 col-span-5 md:col-span-2">Biodata</h4>
                <div class="md:hidden col-span-5">
                    @if($is_edit)
                            <button type="submit"
                                class="justify-self-end block text-blue-500">Simpan
                            </button>
                    @else
                            <button
                                type="button"
                                class="justify-self-end block text-blue-500"
                                wire:click="toEditMode()"><i class="fas fa-edit"></i> Edit
                            </button>
                    @endif
                </div>
                <div class="col-span-10 md:col-span-6 flex items-center">
                    <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
                </div>
                <div class="col-span-10 md:col-span-2 md:block hidden">
                    @if($is_edit)
                            <button type="submit"
                                class="text-blue-500 justify-self-end">Simpan
                            </button>
                    @else

                            <button type="button"
                                    class="text-blue-500 justify-self-end"
                                    wire:click="toEditMode()"><i class="fas fa-edit"></i> Edit
                            </button>

                    @endif
                </div>
                <div class="col-span-10 md:col-span-2"></div>
                <div class="col-span-10 md:col-span-6">
                    <div class="grid gap-4 grid-cols-1">
                        <div>
                            <label for="name"
                                   class="mb-2 font-bold text-gray-400">Nama Peserta</label><br>
                            @if($is_edit)
                                <input wire:model.defer="name" type="text" id="name" name="name"
                                       class="registration-form input-text"
                                       style="color: black;margin-top:0;"
                                       required>
                            @else
                                <p class="font-bold text-lg">{{$name}}</p>
                            @endif
                        </div>
                        <div>
                            <label for="Email"
                                   class="mb-2 font-bold text-gray-400">Email Peserta</label><br>
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
                        <div>
                            <label for="birth_place"
                                   class="mb-2 font-bold text-gray-400">Tempat Lahir</label><br>
                            @if($is_edit)
                                <input wire:model.defer="birth_place" type="text" id="birth_place" name="birth_place"
                                       class="registration-form input-text"
                                       style="color: black;margin-top:0;"
                                       required>
                            @else
                                <p class="font-bold text-lg">{{$birth_place}}</p>
                            @endif
                        </div>
                        <div>
                            <label for="birth_date"
                                   class="mb-2 font-bold text-gray-400">Tanggal Lahir</label><br>
                            @if($is_edit)
                                <x-birth-datepicker wire:model.lazy="birth_date"
                                              class="registration-form input-text"
                                              id="birth_date" readonly/>
                            @else
                                <p class="font-bold text-lg">{{$birth_date}}</p>
                            @endif
                        </div>
                        <div>
                            <label for="address"
                                   class="mb-2 font-bold text-gray-400">Alamat Domisili</label><br>
                            @if($is_edit)
                                <textarea wire:model.defer="address" id="address" name="address"
                                          class="registration-form input-text" required>
                        </textarea>
                            @else
                                <p class="font-bold text-lg">{{$address}}</p>
                            @endif
                        </div>
                        <div>
                            <label for="identity_address"
                                   class="mb-2 font-bold text-gray-400">Alamat Sesuai KTP</label><br>
                            @if($is_edit)
                                <textarea wire:model.defer="identity_address" id="identity_address" name="identity_address"
                                          class="registration-form input-text" required>
                        </textarea>
                            @else
                                <p class="font-bold text-lg">{{$identity_address}}</p>
                            @endif
                        </div>

                        <div>
                            <label for="last_education"
                                   class="mb-2 font-bold text-gray-400">Pendidikan Terakhir</label><br>
                            @if($is_edit)
                                <input wire:model.defer="last_education" type="text" id="last_education"
                                       name="last_education"
                                       class="registration-form input-text"
                                       style="color: black;margin-top:0;"
                                       required>
                            @else
                                <p class="font-bold text-lg">{{$last_education}}</p>
                            @endif
                        </div>

                        <div>
                            <label for="curr_education"
                                   class="mb-2 font-bold text-gray-400">Pendidikan Saat Ini</label><br>
                            @if($is_edit)
                                <input wire:model.defer="curr_education" type="text" id="curr_education" name="curr_education"
                                       class="registration-form input-text"
                                       style="color: black;margin-top:0;"
                                       required>
                            @else
                                <p class="font-bold text-lg">{{$curr_education}}</p>
                            @endif
                        </div>

                        <div>
                            <label for="institute_name"
                                   class="mb-2 font-bold text-gray-400">Instansi Pendidikan Saat Ini</label><br>
                            @if($is_edit)
                                <input wire:model.defer="institute_name" type="text" id="institute_name" name="institute_name"
                                       class="registration-form input-text"
                                       style="color: black;margin-top:0;"
                                       required>
                            @else
                                <p class="font-bold text-lg">{{$institute_name}}</p>
                            @endif
                        </div>

                        <div>
                            <label for="major"
                                   class="mb-2 font-bold text-gray-400">Jurusan</label><br>
                            @if($is_edit)
                                <input wire:model.defer="major" type="text" id="major" name="major"
                                       class="registration-form input-text"
                                       style="color: black;margin-top:0;"
                                       required>
                            @else
                                <p class="font-bold text-lg">{{$major}}</p>
                            @endif
                        </div>

                        <div>
                            <label for="semester"
                                   class="mb-2 font-bold text-gray-400">Semester saat ini (Kosongi bila sudah lulus)</label><br>
                            @if($is_edit)
                                <input wire:model.defer="semester" type="number" min="0" id="semester" name="semester"
                                       class="registration-form input-text"
                                       style="color: black;margin-top:0;">
                            @else
                                <p class="font-bold text-lg">{{$semester?$semester:'-'}}</p>
                            @endif
                        </div>
                        <div>
                            <label for="social_media"
                                   class="mb-2 font-bold text-gray-400">Media Sosial</label><br>
                            @if($is_edit)
                                <input wire:model.defer="social_media" type="text" id="social_media" name="social_media"
                                       class="registration-form input-text"
                                       style="color: black;margin-top:0;"
                                       required>
                            @else
                                <p class="font-bold text-lg">{{$social_media}}</p>
                            @endif
                        </div>
                        <div class="">
                            <div>
                                <label for="cv_path" class="mb-2 font-bold text-gray-400">Curriculum Vitae
                                    (CV)
                                </label>
                                <br>
                                @if($is_edit)
                                    <p id="cv-name" wire:ignore></p>
                                    <button
                                        wire:target="cv_path" wire:loading.attr="disabled"
                                        onclick="$('#cv_path').click()"
                                        type="button"
                                        class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                    </button>
                                    <input type="file"
                                           onchange="uploadListener()"
                                           wire:model="cv_path"
                                           class="form-control-file"
                                           name="cv_path"
                                           id="cv_path"
                                           accept=".pdf"
                                           hidden>
                                    <label wire:target="cv_path" wire:loading class="font-xs">File sedang
                                        diproses, harap tunggu</label>
                                @else
                                    @if($cv_path && is_string($cv_path))
                                        <a target="_blank" href="{{asset('storage/'.$cv_path)}}">
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
                        <div>
                            <div class="">
                                <label for="portfolio" class="mb-2 font-bold text-gray-400">Portfolio
                                </label>
                                <br>
                                @if($is_edit)
                                    <p id="portfolio-name" wire:ignore></p>
                                    <button
                                        wire:target="portfolio" wire:loading.attr="disabled"
                                        onclick="$('#portfolio').click()"
                                        type="button"
                                        class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                    </button>
                                    <input type="file"
                                           onchange="uploadListener2()"
                                           wire:model="portfolio"
                                           class="form-control-file"
                                           name="portfolio"
                                           id="portfolio"
                                           accept=".pdf"
                                           hidden>
                                    <label wire:target="portfolio" wire:loading class="font-xs">File sedang
                                        diproses, harap tunggu</label>
                                @else
                                    @if($portfolio && is_string($portfolio))
                                        <a target="_blank" href="{{asset('storage/'.$portfolio)}}">
                                            <button
                                                type="button"
                                                class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                                <i class="fas fa-cloud-download-alt mr-2"></i>Unduh Portfolio Anda
                                            </button>
                                        </a>
                                    @else
                                        <p class="font-bold text-md">-</p>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

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
            let fullPath = $('#cv_path').val()
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

        function uploadListener2() {
            let fullPath = $('#portfolio').val()
            if (fullPath) {
                let startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                let filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                if (filename) {
                    $('#portfolio-name').html(filename)
                }
            }
        }

    </script>
@endpush
