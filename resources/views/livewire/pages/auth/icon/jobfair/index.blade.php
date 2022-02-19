<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 font-bold text-lg"
     style="background: linear-gradient(116.52deg, #014167 -2.17%, #B45C5B 95.97%);">
    <div class="max-w-5xl w-full space-y-8 mb-10"
         style="background: #fdfdfd; box-shadow: 0px 5px 50px 5px rgba(0, 0, 0, 0.25);">
        <div class="sm:h-96 h-72 pt-6 pl-5 bg-cover bg-no-repeat bg-right"
             style="background-image: url({{asset("img/auth/background-regis.svg")}})">
            <img src="{{asset("img/global/logo.svg")}}">
        </div>
        <div>
            <h1 class="text-5xl text-center font-bold capitalize mx-5" style="font-family: 'guestFont'">Registration
                Form Virtual Intern & Jobfair</h1>
        </div>
        <div class="mx-12" style="border: 1px solid rgba(0, 0, 0, 0); background: rgba(0, 0, 0, 0.21);">
        </div>

        <form class="mb-10 space-y-6" wire:submit.prevent="submit" method="POST" autocomplete="off">
            @csrf
            <input type="hidden" name="peserta_type" value="senior"/>
            <div class="grid sm:px-24 sm:gap-x-20 sm:gap-y-10 gap-y-6 grid-cols-1 px-5 gap-x-5">
                <div id="profil-diri"
                     class="grid sm:mb-10 sm:gap-x-20 sm:gap-y-10 gap-y-6 grid-cols-1 gap-x-5">
                    <div class="">
                        <label for="name" class="mb-10">Nama Lengkap</label><br>
                        <input wire:model.defer="name" type="text" id="name" name="name"
                               class="registration-form input-text" required>
                        <div class="">
                        </div>
                    </div>

                    <div class="">
                        <label for="email" class="mb-10">Email</label><br>
                        <input wire:model.defer="email" type="email" id="email" name="email"
                               class="registration-form input-text bg-gray-200" required disabled>
                        <div class="">
                            <small class="text-gray-400 font-normal">*Email tidak bisa diubah</small>
                        </div>
                    </div>

                    <div class="">
                        <label for="birth_place" class="mb-10">Tempat Lahir</label><br>
                        <input wire:model.defer="birth_place" type="text" id="birth_place" name="birth_place"
                               class="registration-form input-text" required>
                    </div>

                    <div class="">
                        <label for="birth_date" class="mb-10">Tanggal Lahir</label><br>
                        <x-birth-datepicker wire:model.lazy="birth_date"
                                      class="registration-form input-text"
                                      id="birth_date" readonly/>
                    </div>

                    <div class="">
                        <label for="address" class="mb-10">Alamat Domisili</label><br>
                        <textarea wire:model.defer="address" id="address" name="address"
                                  class="registration-form input-text" required>
                        </textarea>
                    </div>

                    <div class="">
                        <label for="identity_address" class="mb-10">Alamat Sesuai KTP</label><br>
                        <textarea wire:model.defer="identity_address" id="identity_address" name="identity_address"
                                  class="registration-form input-text" required>
                        </textarea>
                    </div>

                    <div class="">
                        <label for="last_education" class="mb-10">Pendidikan Terakhir</label><br>
                        <input wire:model.defer="last_education" type="text" id="last_education" name="last_education"
                               class="registration-form input-text" required>
                    </div>

                    <div class="">
                        <label for="curr_education" class="mb-10">Pendidikan Saat Ini</label><br>
                        <input wire:model.defer="curr_education" type="text" id="curr_education" name="curr_education"
                               class="registration-form input-text" required>
                    </div>

                    <div class="">
                        <label for="institute_name" class="mb-10">Instansi Pendidikan Saat Ini</label><br>
                        <input wire:model.defer="institute_name" type="text" id="institute_name" name="institute_name"
                               class="registration-form input-text" required>
                    </div>

                    <div class="">
                        <label for="major" class="mb-10">Jurusan</label><br>
                        <input wire:model.defer="major" type="text" id="major" name="major"
                               class="registration-form input-text" required>
                    </div>

                    <div class="">
                        <label for="semester" class="mb-10">Semester saat ini (Kosongi bila sudah lulus)</label><br>
                        <input wire:model.defer="semester" type="number" id="semester" name="semester" min="1"
                               class="registration-form input-text">
                    </div>
                    <div class="">
                        <label for="social_media" class="mb-10">Media Sosial Anda (Instagram, Twitter, atau yang lain)</label><br>
                        <input wire:model.defer="social_media" type="text" id="social_media" name="social_media"
                               class="registration-form input-text" required>
                    </div>

                </div>
            </div>
            <div class="justify-center mx-6 mx-24">
                <div class="flex grid-cols-2 gap-x-4 justify-center mx-6 sm:mx-24 mb-24 content-center">

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

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
@endpush
