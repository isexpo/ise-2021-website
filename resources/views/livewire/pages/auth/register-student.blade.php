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
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 font-bold text-lg"
     style="background: linear-gradient(116.52deg, #014167 -2.17%, #B45C5B 95.97%);">
    <div class="max-w-5xl w-full space-y-8 mb-10"
         style="background: #fdfdfd; box-shadow: 0px 5px 50px 5px rgba(0, 0, 0, 0.25);">
        <div class="sm:h-96 h-72 pt-6 pl-5 bg-cover bg-no-repeat bg-right"
             style="background-image: url({{asset("img/auth/background-regis.svg")}})">
            <img src="{{asset("img/global/logo.svg")}}">
        </div>
        <div>
            <h1 class="text-5xl text-center font-bold capitalize mx-5" style="font-family: 'guestFont'">Registration Form BIONIX Student</h1>
        </div>
        <div class="mx-12" style="border: 1px solid rgba(0, 0, 0, 0); background: rgba(0, 0, 0, 0.21);">
        </div>
        <div class="grid-cols-1 grid sm:grid-cols-3 text-center mx-10 gap-y-5">
            <div class="grid-cols-2 flex flex-row gap-x-2 justify-center items-center group cursor-pointer"
                 wire:click="move(1)">
                <div
                    class="number-wizard group-hover:border-transparent group-hover:text-white group-hover:bg-indigo-500 {{$step==1?"text-white bg-indigo-500 border-transparent" : "border-indigo-500 text-gray-400 bg-white"}}">
                    1
                </div>
                <div class="number-wizard__content text-indigo-500 group-hover:text-indigo-500">Informasi Tim</div>
            </div>
            <div class="grid-cols-2 flex flex-row gap-x-2 justify-center items-center group cursor-pointer"
                 wire:click="move(2)">
                <div
                    class="number-wizard group-hover:border-transparent group-hover:text-white group-hover:bg-indigo-500 {{$step==2?"text-white bg-indigo-500 border-transparent" : "border-indigo-500 text-gray-400 bg-white"}}">
                    2
                </div>
                <div class="number-wizard__content text-gray-400 group-hover:text-indigo-500">Anggota Tim</div>
            </div>
        </div>


        <form class="mb-10 space-y-6" wire:submit.prevent="akunSubmit" method="POST" autocomplete="off">
            @csrf
            @if($errors->any())
                <div class="mx-5 md:mx-24 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                     role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(!empty($errorMessage))
                <div class="mx-5 md:mx-24 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                     role="alert">
                    <ul>
                        <li>{{ $errorMessage }}</li>
                    </ul>
                </div>
            @endif
            <input type="hidden" name="peserta_type" value="junior"/>
            <div class="grid sm:px-24 sm:gap-x-20 sm:gap-y-10 gap-y-6 grid-cols-1 px-5 gap-x-5">
                <div id="informasi-tim"
                     class="{{$step == 1 ? '' : 'hidden'}} grid sm:mb-10 sm:gap-x-20 sm:gap-y-10 gap-y-6 grid-cols-1 gap-x-5">
                    <div class="">
                        <label for="team_name" class="mb-10">Nama Tim</label><br>
                        <input wire:model.defer="team_name" type="text" id="team_name" name="team_name"
                               class="registration-form input-text" required>
                    </div>
                    <div class="">
                        <label for="school_name" class="mb-10">Asal Sekolah</label><br>
                        <input wire:model.defer="school_name" type="text" id="school_name" name="school_name"
                               class="registration-form input-text" required>
                    </div>
                    <div wire:ignore class="">
                        <label for="school_city" class="mb-10">Asal Provinsi/Kota/Kabupaten Sekolah</label><br>
                        <select class="js-example-basic-single registration-form input-text" name="school_city"
                                required>
                            <?php $curr_reg = 0;?>
                            @foreach ($cities as $city )
                            @if($curr_reg!=$city->region)
                            @if($curr_reg!=0)
                            </optgroup>
                            @endif
                            <optgroup label="Region {{$city->region}}">
                                <?php $curr_reg = $city->region;?>
                                @endif
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label for="region" class="mb-10">Region</label>
                        <div class="mt-5">
                            <p id="region-sec" class="font-normal">Anda Berada di <span
                                    class="text-indigo-500">{{$region}}</span></p>
                        </div>
                    </div>
                    <div class="">
                        <label for="info_source" class="mb-10">Kamu tau informasi tentang BIONIX Student Level
                            dari mana?</label><br>
                        <select wire:model.defer="info_source" name="info_source" id="info_source"
                                class="registration-form input-text" required>
                            <option value="Media Sosial ISE! 2021">Media Sosial ISE! 2021</option>
                            <option value="Media Sosial selain ISE! 2021 (info lomba, dll)">Media Sosial selain ISE!
                                2021 (info lomba, dll)
                            </option>
                            <option value="Roadshow ISE! 2021">Roadshow ISE! 2021</option>
                            <option value="Grup WA/Line/dll">Grup WA/Line/dll</option>
                            <option value="Sekolah (guru, dll)">Sekolah (guru, dll)</option>
                            <option value="Teman/keluarga">Teman/keluarga</option>
                        </select>
                    </div>
                </div>
                <div id="anggota-tim"
                     class="{{$step == 2 ? '' : 'hidden'}} grid sm:mb-10 sm:gap-x-20 sm:gap-y-10 gap-y-6 grid-cols-1 gap-x-5">
                    <div class="">
                        <h2 class="text-2xl inline-block border-b-4 border-indigo-500">Anggota 1</h2>
                        <br/>
                        <small class="text-gray-400 font-normal">*Email anggota 1 tidak bisa diubah</small>
                    </div>
                    <div class="">
                        <label for="member_1_name" class="mb-10">Nama Lengkap Anggota 1</label><br>
                        <input wire:model.defer="member_1_name" type="text" id="member_1_name" name="member_1_name"
                               class="registration-form input-text" required>
                    </div>
                    <div class="">
                        <label for="member_1_email" class="mb-10">Email Anggota 1</label><br>
                        <input wire:model.defer="member_1_email" type="email" id="member_1_email" name="member_1_email"
                               class="registration-form input-text bg-gray-200" required disabled>
                    </div>
                    <div class="">
                        <label for="member_1_whatsapp" class="mb-10">Nomor WA Anggota 1</label><br>
                        <input wire:model.defer="member_1_whatsapp" type="text" id="member_1_whatsapp"
                               name="member_1_whatsapp"
                               class="registration-form input-text" required>
                        <small class="text-red-400 font-normal" id="phone_1_error" style="display: none">Penulisan nomor
                            handphone
                            tidak sesuai dengan ketentuan.</small><br/>
                        <small class="text-gray-400 font-normal">*Nomor
                            Handphone diawali 08 dan terdiri dari 10-13 karakter.</small>
                    </div>
                    <div class="">
                        <label for="member_1_class" class="mb-10">Kelas Anggota 1</label>
                        <div class="mt-3 font-normal">
                            <input wire:model.defer="member_1_class" type="radio" id="1_10" name="member_1_class"
                                   value="10"
                                   class="registration-form input-radio" required>
                            <label for="1_10">Kelas 10</label><br>
                            <input wire:model.defer="member_1_class" type="radio" id="1_11" name="member_1_class"
                                   value="11"
                                   class="registration-form input-radio">
                            <label for="1_11">Kelas 11</label><br>
                            <input wire:model.defer="member_1_class" type="radio" id="1_12" name="member_1_class"
                                   value="12"
                                   class="registration-form input-radio">
                            <label for="1_12">Kelas 12</label>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="text-2xl inline-block border-b-4 border-indigo-500">Anggota 2 (Optional)</h2>
                    </div>
                    <div class="">
                        <label for="member_2_name" class="mb-10">Nama Lengkap Anggota 2</label><br>
                        <input wire:model.defer="member_2_name" type="text" id="member_2_name" name="member_2_name"
                               class="registration-form input-text">
                    </div>
                    <div class="">
                        <label for="member_2_email" class="mb-10">Email Anggota 2</label><br>
                        <input wire:model.defer="member_2_email" type="email" id="member_2_email" name="member_2_email"
                               class="registration-form input-text">
                    </div>
                    <div class="">
                        <label for="member_2_whatsapp" class="mb-10">Nomor WA Anggota 2</label><br>
                        <input wire:model.defer="member_2_whatsapp" type="text" id="member_2_whatsapp"
                               name="member_2_whatsapp"
                               class="registration-form input-text">
                        <small class="text-red-400 font-normal" id="phone_2_error" style="display: none">Penulisan nomor
                            handphone
                            tidak sesuai dengan ketentuan.</small><br/>
                        <small class="text-gray-400 font-normal">*Nomor
                            Handphone diawali 08 dan terdiri dari 10-13 karakter.</small>
                    </div>
                    <div class="">
                        <label for="member_2_class" class="mb-10">Kelas Anggota 2</label>
                        <div class="mt-3 font-normal">
                            <input wire:model.defer="member_2_class" type="radio" id="2_10" name="member_2_class"
                                   value="10"
                                   class="registration-form input-radio">
                            <label for="2_10">Kelas 10</label><br>
                            <input wire:model.defer="member_2_class" type="radio" id="2_11" name="member_2_class"
                                   value="11"
                                   class="registration-form input-radio">
                            <label for="2_11">Kelas 11</label><br>
                            <input wire:model.defer="member_2_class" type="radio" id="2_12" name="member_2_class"
                                   value="12"
                                   class="registration-form input-radio">
                            <label for="2_12">Kelas 12</label>
                        </div>
                    </div>
                    <div class="flex place-items-center">
                        <input id="terms_agree" wire:model.defer="agree" type="checkbox"
                               class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" required>
                        <label for="terms_agree" class="ml-2 block text-sm text-gray-900 font-normal">
                            Dengan mencentang box ini, saya setuju dengan <a target="_blank"
                                                                             href="{{route('syarat-ketentuan')}}"
                                                                             class="text-indigo-500">syarat dan
                                Ketentuan yang berlaku</a>
                        </label>
                    </div>
                </div>
                <div class="justify-center mx-6 mx-24">
                    <div class="flex grid-cols-2 gap-x-4 justify-center mx-6 sm:mx-24 mb-24 content-center">
                        @if($step != 1)
                            <button
                                wire:click="move({{$step-1}})"
                                class="items-center group relative w-full hover:shadow-lg flex justify-center py-2 px-4 border-2 font-bold rounded-md text-indigo-600 bg-white border-indigo-600 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <!-- Heroicon name: Chevron left-->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 group-hover:text-white"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                            </span>
                                Kembali
                            </button>
                        @endif
                        @if($step == 1)
                            <button
                                type="button"
                                wire:click="identityTeamSubmit"
                                class="items-center group relative w-full hover:shadow-lg flex justify-center py-2 px-4 border-2 font-bold rounded-md text-indigo-600 bg-white border-indigo-600 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                        <span class="absolute right-0 inset-y-0 flex items-center pr-3">
                            <!-- Heroicon name: Chevron right -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 group-hover:text-white"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                            </span>
                                Berikutnya
                            </button>
                        @elseif($step == 2)
                            <button
                                type="submit"
                                class="items-center group relative w-full hover:shadow-lg flex justify-center py-2 px-4 border-2 font-bold rounded-md text-indigo-600 bg-white border-indigo-600 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                        <span class="absolute right-0 inset-y-0 flex items-center pr-3">
                            <!-- Heroicon name: Chevron right -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 group-hover:text-white"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                            </span>
                                Submit
                            </button>

                        @endif

                    </div>
                </div>
            </div>
        </form>
    </div>
    @if($errors->any()||$errorMessage)
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
                    <ul class="font-normal">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @if($errorMessage)
                        <p>{{$errorMessage}}</p>
                    @endif
                </div>
                <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                        class="fas fa-times"></i></button>
            </div>
        </div>
    @endif
</div>
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.js-example-basic-single').select2({})
            $('.select2').addClass('registration-form input-text')

            $('.js-example-basic-single').on('change', function (e) {
                opt = $('select').find(':selected')
                og = opt.closest('optgroup').attr('label')
                // $('#region-sec').html('Anda Berada di <span class="text-indigo-500">' + og + '</span>')
            @this.set('region', og)
            @this.set('school_city', e.target.value)
            });
            var $regexname = /^(^08)\d{8,11}$/;
            $('#member_1_whatsapp').on('keypress keydown keyup', function () {
                if (!$(this).val().match($regexname)) {
                    // there is a mismatch, hence show the error message
                    $('#phone_1_error').removeClass('hidden');
                    $('#phone_1_error').show();
                } else {
                    // else, do not display message
                    $('#phone_1_error').addClass('hidden');
                }
            });
            $('#member_2_whatsapp').on('keypress keydown keyup', function () {
                if (!$(this).val().match($regexname)) {
                    // there is a mismatch, hence show the error message
                    $('#phone_2_error').removeClass('hidden');
                    $('#phone_2_error').show();
                } else {
                    // else, do not display message
                    $('#phone_2_error').addClass('hidden');
                }
            });
        });

    </script>
@endpush
