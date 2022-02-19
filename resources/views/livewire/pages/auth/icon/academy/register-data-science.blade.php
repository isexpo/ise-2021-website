
    {{--
        TODO (Atra) (Registrasi Data Science)
        Cukup modifikasi dari regis BIONIX aja

        URL : /dashboard/peserta/academy/register/data-science
    --}}
    {{-- The whole world belongs to you. --}}


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

        .select2-container--default .select2-selection--single {
            border: 0;
        }

        .select2 {
            border: 0.75px solid #6b7280;
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
            <h1 class="text-5xl text-center font-bold capitalize mx-5" style="font-family: 'guestFont'">Registration Form Data Science Academy</h1>
        </div>
        <div class="mx-12" style="border: 1px solid rgba(0, 0, 0, 0); background: rgba(0, 0, 0, 0.21);">
        </div>
        <div class="grid-cols-1 grid sm:grid-cols-2 text-center mx-10 gap-y-5">
            <div class="grid-cols-2 flex flex-row gap-x-2 justify-center items-center group cursor-pointer"
                 wire:click="move(1)">
                <div
                    class="number-wizard group-hover:border-transparent group-hover:text-white group-hover:bg-indigo-500 {{$step==1?"text-white bg-indigo-500 border-transparent" : "border-indigo-500 text-gray-400 bg-white"}}">
                    1
                </div>
                <div class="number-wizard__content text-indigo-500 group-hover:text-indigo-500">Profil Diri</div>
            </div>
            <div class="grid-cols-2 flex flex-row gap-x-2 justify-center items-center group cursor-pointer"
                 wire:click="move(2)">
                <div
                    class="number-wizard group-hover:border-transparent group-hover:text-white group-hover:bg-indigo-500 {{$step==2?"text-white bg-indigo-500 border-transparent" : "border-indigo-500 text-gray-400 bg-white"}}">
                    2
                </div>
                <div class="number-wizard__content text-gray-400 group-hover:text-indigo-500">Informasi Data Science</div>
            </div>
        </div>


        <form class="mb-10 space-y-6" wire:submit.prevent="akunSubmit" method="POST" autocomplete="off">
            @csrf
            <input type="hidden" name="peserta_type" value="senior"/>
            <div class="grid sm:px-24 sm:gap-x-20 sm:gap-y-10 gap-y-6 grid-cols-1 px-5 gap-x-5">
                <div id="profil-diri"
                     class="{{$step == 1 ? '' : 'hidden'}} grid sm:mb-10 sm:gap-x-20 sm:gap-y-10 gap-y-6 grid-cols-1 gap-x-5">
                    <div class="">
                        <label for="member_1_name" class="mb-10">Nama Lengkap</label><br>
                        <input wire:model.defer="name" type="text" id="name" name="name"
                               class="registration-form input-text" required>
                               <div class="">
                            </div>
                    </div>

                    <div class="">
                        <label for="info_source" class="mb-10">Jenis Kelamin</label></label><br>
                        <select wire:model.defer="gender" name="gender" id="gender"
                                class="registration-form input-text" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="">
                        <label for="member_1_email" class="mb-10">Email</label><br>
                        <input wire:model.defer="email" type="email" id="email" name="email"
                               class="registration-form input-text bg-gray-200" required disabled>
                               <div class="">
                                <small class="text-gray-400 font-normal">*Email tidak bisa diubah</small>
                            </div>
                    </div>


                    <div class="">
                        <label for="member_1_name" class="mb-10">Institusi</label><br>
                        <input wire:model.defer="institute_name" type="text" id="institute_name" name="institute_name"
                               class="registration-form input-text" required>
                    </div>

                    <div class="">
                        <label for="member_1_name" class="mb-10">Jurusan</label><br>
                        <input wire:model.defer="major" type="text" id="major" name="major"
                               class="registration-form input-text" required>
                    </div>


                </div>
                <div id="informasi-ds"
                     class="{{$step == 2 ? '' : 'hidden'}} grid sm:mb-10 sm:gap-x-20 sm:gap-y-10 gap-y-6 grid-cols-1 gap-x-5">
                    <div class="">
                        <label for="member_1_name" class="mb-10">Alasan mengapa mendaftar DS Academy</label><br>
                        <textarea wire:model.defer="reason_joining_academy" id="reason_joining_academy" name="reason_joining_academy"
                               class="registration-form input-text" required rows="5"></textarea>
                    </div>

                    <div class="">
                        <label for="member_1_name" class="mb-10">Apa yang akan kamu lakukan pasca mengikuti Data Science Academy?</label><br>
                        <textarea wire:model.defer="post_academy_activity" id="post_academy_activity" name="post_academy_activity"
                               class="registration-form input-text" required rows="5"></textarea>
                    </div>

                    <div class="">
                        <label for="info_source" class="mb-10">Kamu tau informasi tentang Data Science Academy
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
                            <option value="Website/Aplikasi Sejuta Cita">Website/Aplikasi Sejuta Cita</option>
                        </select>
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
            </div>
            <div class="justify-center mx-6 mx-24">
                <div class="flex grid-cols-2 gap-x-4 justify-center mx-6 sm:mx-24 mb-24 content-center">
                    @if($step != 1)
                        <button
                            type="button"
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
                    @if($step == 1 )
                        <button
                            type="button"
                            wire:click="identitySubmit"
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
                    class=" items-center group relative w-full hover:shadow-lg flex justify-center py-2 px-4 border-2 font-bold rounded-md text-indigo-600 bg-white border-indigo-600 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
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
                        <p class="font-normal">{{$errorMessage}}</p>
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
    <script>
        $(document).ready(function () {
            $('.js-example-basic-single').select2({})
            $('.select2').addClass('registration-form input-text')

            $('.js-example-basic-single').on('change', function (e) {
            @this.set('school_city', e.target.value)
            });

    </script>
@endpush

