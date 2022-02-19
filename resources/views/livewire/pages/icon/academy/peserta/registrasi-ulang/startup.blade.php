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
    <h3 class="text-xl font-weight-bold my-4">Informasi Tim</h3>
    <form wire:submit.prevent="saveData" enctype="multipart/form-data">
        <div class="card p-8 rounded-xl">
            <div
                class="grid sm:mb-10 sm:gap-x-20 sm:gap-y-8 gap-y-5 gap-x-5 md:grid-cols-10">
                <h4 class="text-lg font-bold text-gray-500 col-span-5 md:col-span-2">Tim</h4>
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
                <div id="informasi_tim" class="col-span-10 md:col-span-6">
                    <div>
                        <label for="team_name"
                               class="mb-2 font-bold text-gray-400">Nama Tim</label><br>
                        @if($is_edit)
                            <input wire:model.defer="team_name" type="text" id="team_name" name="team_name"
                                   class="registration-form input-text"
                                   style="color: black;margin-top:0;"
                                   required>
                        @else
                            <p class="font-bold text-lg">{{$team_name}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="institute_name"
                               class="mb-2 font-bold text-gray-400 mt-4">Asal {{Auth::user()->userable->academy_type == "academy_junior"?'Sekolah':'Perguruan Tinggi'}}</label><br>
                        @if($is_edit)
                            <input wire:model.defer="institute_name" type="text" id="institute_name"
                                   name="institute_name"
                                   class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                   style="color: black;margin-top:0;"
                                   required {{$readonly?'disabled':''}}>
                        @else
                            <p class="font-bold text-lg">{{$institute_name}}</p>
                        @endif
                    </div>
                    <div class="">
                        <label for="" class="mb-2 font-bold text-gray-400 mt-4">Jelaskan secara singkat ide startup tim
                            Anda! (maks. 300 kata)</label><br>
                        @if($is_edit)
                            <textarea wire:model.defer="startup_idea" id="startup_idea" name="startup_idea"
                                      class="registration-form input-text" required rows="5"
                                      onkeyup="countWords(this.value,'startup_idea_error')"></textarea>
                            <small class="text-red-400 font-normal" id="startup_idea_error"
                                   style="display: none">Tidak boleh lebih dari 300 kata.</small><br/>
                        @else
                            <p class="font-semibold text-md">{{($startup_idea==''?'Belum terisi':$startup_idea)}}</p>
                        @endif
                    </div>
                    <div class="">
                        <label for="" class="mb-2 font-bold text-gray-400 mt-4">Apa alasan Anda mendaftar Startup
                            Academy? (maks. 300 kata)</label><br>
                        @if($is_edit)
                            <textarea wire:model.defer="reason_joining_academy" id="reason_joining_academy"
                                      name="reason_joining_academy"
                                      class="registration-form input-text" required rows="5"
                                      onkeyup="countWords(this.value,'reason_joining_error')"></textarea>
                            <small class="text-red-400 font-normal" id="reason_joining_error"
                                   style="display: none">Tidak boleh lebih dari 300 kata.</small><br/>
                        @else
                            <p class="font-bold text-md">{{($reason_joining_academy==''?'Belum terisi':$reason_joining_academy)}}</p>
                        @endif
                    </div>
                    <div class="">
                        <label for="" class="mb-2 font-bold text-gray-400 mt-4">Apa yang tim Anda harapkan dari Startup
                            Academy? (maks. 300 kata)</label><br>
                        @if($is_edit)
                            <textarea wire:model.defer="expectation_joining_academy" id="expectation_joining_academy"
                                      name="expectation_joining_academy"
                                      class="registration-form input-text" required rows="5"
                                      onkeyup="countWords(this.value,'expectation_joining_error')"></textarea>
                            <small class="text-red-400 font-normal" id="expectation_joining_error"
                                   style="display: none">Tidak boleh lebih dari 300 kata.</small><br/>
                        @else
                            <p class="font-bold text-md">{{($expectation_joining_academy==''?'Belum terisi':$expectation_joining_academy)}}</p>
                        @endif
                    </div>
                    <div class="">
                        <label for="" class="mb-2 font-bold text-gray-400 mt-4">Apa yang tim Anda akan lakukan pasca
                            mengikuti Startup Academy? (maks. 300 kata)</label><br>
                        @if($is_edit)
                            <textarea wire:model.defer="post_academy_activity" id="post_academy_activity"
                                      name="post_academy_activity"
                                      class="registration-form input-text" required rows="5"
                                      onkeyup="countWords(this.value,'post_academy_error')"></textarea>
                            <small class="text-red-400 font-normal" id="post_academy_error"
                                   style="display: none">Tidak boleh lebih dari 300 kata.</small><br/>
                        @else
                            <p class="font-bold text-md">{{($post_academy_activity==''?'Belum terisi':$post_academy_activity)}}</p>
                        @endif
                    </div>


                </div>

                <div class="col-span-10 md:col-span-2"></div>
                <h4 class="text-lg font-bold text-gray-500 col-span-10 md:col-span-2">Anggota Tim 1 (Ketua)</h4>
                <div class="col-span-10 md:col-span-6 flex items-center">
                    <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
                </div>
                <div class="col-span-10 md:col-span-2"></div>
                <div class="col-span-10 md:col-span-2"></div>
                <div id="anggota_1" class="col-span-10 md:col-span-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <div class="">
                                <label for="name" class="mb-2 font-bold text-gray-400">Nama Lengkap Anggota
                                    1</label><br>
                                @if($is_edit)
                                    <input wire:model.defer="name" type="text" id="name"
                                           name="name"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}>
                                @else
                                    <p class="font-bold text-lg">{{$name}}</p>
                                @endif
                            </div>
                            <div class="">
                                <label for="email" class="mb-2 font-bold text-gray-400 mt-4">Email Anggota
                                    1</label><br>
                                @if($is_edit)
                                    <input wire:model.defer="email" type="email" id="email"
                                           name="email"
                                           class="bg-gray-100 registration-form input-text"
                                           style="color:black;margin-top:0;"
                                           required
                                           disabled>
                                @else
                                    <p class="font-bold text-lg">{{$email}}</p>
                                @endif
                            </div>
                            <div>
                                <label for="whatsapp" class="mb-2 font-bold text-gray-400 mt-4">Nomor WA
                                    Anggota
                                    1</label><br>
                                @if($is_edit)
                                    <input wire:model.defer="whatsapp" type="text" id="whatsapp"
                                           name="whatsapp"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}
                                           onkeydown="checkWhatsapp(this.value,'phone_1_error')"
                                           onkeypress="checkWhatsapp(this.value,'phone_1_error')"
                                           onkeyup="checkWhatsapp(this.value,'phone_1_error')">
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
                                <label for="member_1_twibbon" class="mb-2 font-bold text-gray-400 mt-4">Link Post
                                    Twibbon
                                    Anggota
                                    1</label><br>
                                @if($is_edit)
                                    <input wire:model.defer="member_1_twibbon" type="text" id="member_1_twibbon"
                                           name="member_1_twibbon"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}>
                                @else
                                    <a href="{{$member_1_twibbon}}" target="_blank"
                                       class="font-bold text-md text-blue-500">{{$member_1_twibbon}}</a>
                                @endif
                            </div>
                        </div>
                        <div>
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
                                        class="object-fit mx-auto" alt="Kartu Pelajar" id="card_preview"
                                        style="max-height:50vh">
                                    @if(Auth::user()->userable->academy->profile_verif_status!="Terverifikasi"&&Auth::user()->userable->academy->profile_verif_status!="Tahap Verifikasi"&&$is_edit)
                                        <button
                                            type="button"
                                            onclick="$('#photo1').click()"
                                            class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2">
                                            <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                        </button>
                                        <input type="file"
                                               wire:model.defer="photo1"
                                               class="form-control-file"
                                               name="photo1"
                                               id="photo1"
                                               accept=".jpg,.jpeg,.png"
                                               hidden>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-10 md:col-span-2"></div>
                <h4 class="text-lg font-bold text-gray-500 col-span-10 md:col-span-2">Anggota Tim 2</h4>
                <div class="col-span-10 md:col-span-6 flex items-center">
                    <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
                </div>
                <div class="col-span-10 md:col-span-2"></div>
                <div class="col-span-10 md:col-span-2"></div>
                <div id="anggota_2" class="col-span-10 md:col-span-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <div class="">
                                <label for="member_2_name" class="mb-2 font-bold text-gray-400">Nama Lengkap Anggota
                                    2</label><br>
                                @if($is_edit)
                                    <input wire:model.defer="member_2_name" type="text" id="member_2_name"
                                           name="member_2_name"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}>
                                @else
                                    <p class="font-bold text-lg">{{$member_2_name}}</p>
                                @endif
                            </div>
                            <div class="">
                                <label for="member_2_email" class="mb-2 font-bold text-gray-400 mt-4">Email Anggota
                                    2</label><br>
                                @if($is_edit)
                                    <input wire:model.defer="member_2_email" type="email" id="member_2_email"
                                           name="member_2_email"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}>
                                @else
                                    <p class="font-bold text-lg">{{$member_2_email}}</p>
                                @endif
                            </div>
                            <div class="">
                                <label for="member_2_whatsapp" class="mb-2 font-bold text-gray-400 mt-4">Nomor WA
                                    Anggota
                                    2</label><br>
                                @if($is_edit)
                                    <input wire:model.defer="member_2_whatsapp" type="text" id="member_2_whatsapp"
                                           name="member_2_whatsapp"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}
                                           onkeydown="checkWhatsapp(this.value,'phone_2_error')"
                                           onkeypress="checkWhatsapp(this.value,'phone_2_error')"
                                           onkeyup="checkWhatsapp(this.value,'phone_2_error')">
                                    <small class="text-red-400 font-normal" id="phone_2_error" style="display: none">Penulisan
                                        nomor
                                        handphone
                                        tidak sesuai dengan ketentuan.</small><br/>
                                    <small class="text-gray-400 font-normal">*Nomor
                                        Handphone diawali 08 dan terdiri dari 10-13 karakter.</small>
                                @else
                                    <p class="font-bold text-lg">{{$member_2_whatsapp}}</p>
                                @endif
                            </div>
                            <div>
                                <label for="member_2_twibbon" class="mb-2 font-bold text-gray-400 mt-4">Link Post
                                    Twibbon
                                    Anggota
                                    2</label><br>
                                @if($is_edit)
                                    <input wire:model.defer="member_2_twibbon" type="text" id="member_2_twibbon"
                                           name="member_2_twibbon"
                                           class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                           style="color: black;margin-top:0;"
                                           required {{$readonly?'disabled':''}}>
                                @else
                                    <a href="{{$member_2_twibbon}}" target="_blank"
                                       class="font-bold text-md text-blue-500">{{$member_2_twibbon}}</a>
                                @endif
                            </div>
                        </div>
                        <div>
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
                                        src="{{$photo2?(is_string($photo2)?asset('storage/'.$photo2):$photo2->temporaryUrl()):asset('/img/global/placeholder-image.png')}}"
                                        class="object-fit mx-auto" alt="Kartu Pelajar" id="member_2_card_preview"
                                        style="max-height:50vh">
                                    @if(Auth::user()->userable->academy->profile_verif_status!="Terverifikasi"&&Auth::user()->userable->academy->profile_verif_status!="Tahap Verifikasi"&&$is_edit)
                                        <button
                                            type="button"
                                            onclick="$('#photo2').click()"
                                            class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2">
                                            <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                        </button>
                                        <input type="file"
                                               wire:model.defer="photo2"
                                               class="form-control-file"
                                               name="photo2"
                                               id="photo2"
                                               accept=".jpg,.jpeg,.png"
                                               hidden>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-10 md:col-span-2"></div>
                @if(Auth::user()->userable->academy->member2_id)
                    <h4 class="text-lg font-bold text-gray-500 col-span-10 md:col-span-2 text-left">Anggota Tim 3</h4>
                    <div class="col-span-10 md:col-span-6 flex items-center">
                        <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
                    </div>
                    <div class="col-span-10 md:col-span-2"></div>
                    <div class="col-span-10 md:col-span-2"></div>
                    <div id="anggota_3" class="col-span-10 md:col-span-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <div class="">
                                    <label for="member_3_name" class="mb-2 font-bold text-gray-400">Nama Lengkap Anggota
                                        3</label><br>
                                    @if($is_edit)
                                        <input wire:model.defer="member_3_name" type="text" id="member_3_name"
                                               name="member_3_name"
                                               class="registration-form input-text"
                                               style="color: black;margin-top:0;" required>
                                    @else
                                        <p class="font-bold text-lg">{{$member_3_name}}</p>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="member_3_email" class="mb-2 font-bold text-gray-400 mt-4">Email Anggota
                                        3</label><br>
                                    @if($is_edit)
                                        <input wire:model.defer="member_3_email" type="email" id="member_3_email"
                                               name="member_3_email"
                                               class="registration-form input-text"
                                               style="color: black;margin-top:0;" required>
                                    @else
                                        <p class="font-bold text-lg">{{$member_3_email}}</p>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="member_3_whatsapp" class="mb-2 font-bold text-gray-400 mt-4">Nomor WA
                                        Anggota
                                        3</label><br>
                                    @if($is_edit)
                                        <input wire:model.defer="member_3_whatsapp" type="text" id="member_3_whatsapp"
                                               name="member_3_whatsapp"
                                               class="registration-form input-text"
                                               style="color: black;margin-top:0;" required
                                               onkeydown="checkWhatsapp(this.value,'phone_3_error')"
                                               onkeypress="checkWhatsapp(this.value,'phone_3_error')"
                                               onkeyup="checkWhatsapp(this.value,'phone_3_error')">
                                        <small class="text-red-400 font-normal" id="phone_3_error"
                                               style="display: none">Penulisan
                                            nomor
                                            handphone
                                            tidak sesuai dengan ketentuan.</small><br/>
                                        <small class="text-gray-400 font-normal">*Nomor
                                            Handphone diawali 08 dan terdiri dari 10-13 karakter.</small>
                                    @else
                                        <p class="font-bold text-lg">{{$member_3_whatsapp}}</p>
                                    @endif
                                </div>
                                <div>
                                    <label for="member_3_twibbon" class="mb-2 font-bold text-gray-400 mt-4">Link Post
                                        Twibbon
                                        Anggota
                                        3</label><br>
                                    @if($is_edit)
                                        <input wire:model.defer="member_3_twibbon" type="text" id="member_3_twibbon"
                                               name="member_3_twibbon"
                                               class="{{$readonly?'bg-gray-100':''}} registration-form input-text"
                                               style="color: black;margin-top:0;"
                                               required {{$readonly?'disabled':''}}>
                                    @else
                                        <a href="{{$member_3_twibbon}}" target="_blank"
                                           class="font-bold text-md text-blue-500">{{$member_3_twibbon}}</a>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <div class="" x-data="{ isUploading: false, progress: 0 }"
                                     x-on:livewire-upload-start="isUploading = true"
                                     x-on:livewire-upload-finish="isUploading = false"
                                     x-on:livewire-upload-error="isUploading = false"
                                     x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <div class="flex flex-col items-center justify-center md:p-3 w-full">
                                        <label for="kartu_pelajar"
                                               class="capitalize text-gray-400">KTM/Surat Keterangan Mahasiswa
                                            Aktif</label>
                                        <div x-show="isUploading" class="w-full">
                                            <progress max="100" x-bind:value="progress" class="w-full"></progress>
                                        </div>
                                        <img
                                            src="{{$photo3?(is_string($photo3)?asset('storage/'.$photo3):$photo3->temporaryUrl()):asset('/img/global/placeholder-image.png')}}"
                                            class="object-fit mx-auto" alt="Kartu Pelajar" id="card_preview"
                                            style="max-height:50vh">
                                        @if(Auth::user()->userable->academy->profile_verif_status!="Terverifikasi"&&Auth::user()->userable->academy->profile_verif_status!="Tahap Verifikasi"&&$is_edit)
                                            <button
                                                type="button"
                                                onclick="$('#photo3').click()"
                                                class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2">
                                                <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                            </button>
                                            <input
                                                type="file"
                                                wire:model.defer="photo3"
                                                class="form-control-file"
                                                name="photo3"
                                                id="photo3"
                                                accept=".jpg,.jpeg,.png"
                                                hidden>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
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
@push('js')
    <script>
        var $regexname = /^(^08)\d{8,11}$/;

        function checkWhatsapp(val, id_error) {
            if (!val.match($regexname)) {
                // there is a mismatch, hence show the error message
                $('#' + id_error).removeClass('hidden');
                $('#' + id_error).show();
            } else {
                // else, do not display message
                $('#' + id_error).addClass('hidden');
            }
        }

        function countWords(val, id_error) {
            let words = val.split(" ")
            if (words.length > 300) {
                $('#' + id_error).show();
            } else {
                $('#' + id_error).hide();
            }
        }

    </script>
@endpush
