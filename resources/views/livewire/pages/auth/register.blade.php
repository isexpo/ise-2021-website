<form action="/register" method="POST" id="form">
    <div class="min-h-screen flex items-center justify-center py-12 px-10"
         style="background-image: url({{asset("img/auth/bg_auth.svg")}});background-size: cover;background-repeat: no-repeat">
        <div
            class="max-w-4xl w-full space-y-8 bg-white grid grid-cols-1 md:grid-cols-2 font-bold @if($is_step_2) hidden @endif"
            style="box-shadow: 0px 5px 50px 5px rgba(0, 0, 0, 0.25);">

            <div class="md:h-96 min-h-full pt-6 pl-5 bg-cover bg-no-repeat bg-right md:block hidden"
                 style="background-image: url({{asset("img/auth/bg_auth_card.svg")}});">
                <img src="{{asset("img/global/logo.svg")}}">
                <div class="ml-1 mt-5 mr-20" style="color:#FDFDFD">
                    <h2 class="text-xl mt-12">Welcome to ISE!</h2>
                    <div class="border-2 rounded mr-48 mt-2 mb-4" style="background: #fdfdfd;"></div>
                    <p class="text-base line leading-8 font-normal">ISE! (Information Systems Expo) merupakan event tahunan
                        yang diselenggarakan oleh Departemen Sistem Informasi Institut Teknologi Sepuluh Nopember Surabaya
                        dalam rangka memperkenalkan Departemen Sistem Informasi ITS kepada masyarakat luas.</p>
                </div>
            </div>
            <div>
                <div class="mt-8 space-y-6 mx-10 mb-12 text-lg">
                    <h2 class="text-4xl" style="font-family: 'guestFont'">Buat Akun ISE!</h2>
                    <div class="border-4 rounded mr-36 mt-2 mb-4 border-indigo-500"
                         style="background-color: #667eea;"></div>
                    @csrf
                    @if(session('status'))
                        <div
                            class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative"
                            role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="email-address">Email</label>
                            <input id="email-address" name="email" type="email" autocomplete="email" required
                                   class="registration-form input-text" placeholder="Email address"
                                   wire:model.defer="email">
                        </div>
                        <div style="margin-top: 1.25rem;">
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                   required
                                   class="registration-form input-text" placeholder="Password"
                                   wire:model.defer="password">
                        </div>
                        <div style="margin-top: 1.25rem;">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                   class="registration-form input-text" placeholder="Konfirmasi Password"
                                   wire:model.defer="password_confirmation">
                        </div>
                    </div>

                    <button type="button"
                            wire:click="goToStepTwo"
                            class="items-center group relative w-full hover:shadow-lg flex justify-center py-2 px-4 text-white rounded"
                            style="background: linear-gradient(270.02deg, #4CCCED 0%, #507EC5 64.04%, #1F4D95 99.96%);">
                        Lanjut
                        <span class="absolute right-0 inset-y-0 flex items-center pr-3">
                        <i class="fas fa-chevron-right text-white"></i>
                    </span>
                    </button>
                    <p class="text-center text-base">Sudah punya akun? <a href="{{route('login')}}"
                                                                          class="text-indigo-400 hover:underline">Masuk
                            di
                            sini</a></p>
                </div>
            </div>
        </div>
        <div class="max-w-4xl w-full space-y-8 bg-white grid grid-cols-1 font-bold @if(!$is_step_2) hidden @endif"
             style="box-shadow: 0px 5px 50px 5px rgba(0, 0, 0, 0.25);">
            <div>
                <div class="mt-8 space-y-6 mx-10 mb-12 text-lg">
                    <h2 class="text-4xl" style="font-family: 'guestFont'">Lengkapi Data Dirimu</h2>
                    <div class="border-4 rounded mr-36 mt-2 mb-4 border-indigo-500"
                         style="background-color: #667eea;"></div>


                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="name">Nama Lengkap</label>
                            <input id="name" name="name" type="text" autocomplete="name" required
                                   class="registration-form input-text" placeholder="Nama Lengkap"
                                   wire:model.defer="name">
                        </div>

                        <div style="margin-top: 1.25rem;">
                            <label for="phone_number">Nomor Handphone</label>
                            <input id="phone_number" name="phone_number" type="text" autocomplete="phone_number"
                                   required
                                   class="registration-form input-text" placeholder="Nomor Handphone"
                                   wire:model.defer="phone_number">
                            <small class="text-red-400 font-normal emsg" style="display: none">Penulisan nomor handphone
                                tidak sesuai dengan ketentuan.</small><br/>
                            <small class="text-gray-400 font-normal">*Nomor
                                Handphone diawali 08 dan terdiri dari 10-13 karakter.</small>
                        </div>
                        <div style="margin-top: 1.25rem;">
                            <label for="jenjang" class="mb-10">Jenjang</label>
                            <div class="mt-3 font-normal">
                                <input wire:model.defer="jenjang" type="radio" id="1_10" name="jenjang"
                                       value="Siswa SMA"
                                       class="registration-form input-radio" required>
                                <label for="1_10">Siswa SMA/SMK sederajat</label><br>
                                <input wire:model.defer="jenjang" type="radio" id="1_11" name="jenjang"
                                       value="Mahasiswa"
                                       class="registration-form input-radio" required>
                                <label for="1_11">Mahasiswa</label><br>
                                <input wire:model.defer="jenjang" type="radio" id="1_12" name="jenjang"
                                       value="Umum"
                                       class="registration-form input-radio" required>
                                <label for="1_12">Umum (Non Mahasiswa & Siswa)</label>
                            </div>
                        </div>
                    </div>

                    <button type="submit"
                            class="items-center group relative w-full hover:shadow-lg flex justify-center py-2 px-4 text-white rounded"
                            style="background: linear-gradient(270.02deg, #4CCCED 0%, #507EC5 64.04%, #1F4D95 99.96%);">
                        Simpan
                    </button>
                    <p class="text-center text-base"><a href="javascript:void(0)" wire:click="backToStepOne"
                                                        class="text-indigo-400 hover:underline">Kembali ke
                            sebelumnya</a></p>
                </div>
            </div>
        </div>
    </div>
    @if($errors->any()||session()->has('error'))
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
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @if(session()->has('error'))
                        <p>{{session()->get('error')}}</p>
                    @endif
                </div>
                <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                        class="fas fa-times"></i></button>
            </div>
        </div>
    @endif
</form>

@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            var $regexname = /^(^08)\d{8,11}$/;
            $('#phone_number').on('keypress keydown keyup', function () {
                if (!$(this).val().match($regexname)) {
                    // there is a mismatch, hence show the error message
                    $('.emsg').removeClass('hidden');
                    $('.emsg').show();
                } else {
                    // else, do not display message
                    $('.emsg').addClass('hidden');
                }
            });

        });

        $('#form').on('submit',function(e) {
            var $regexname = /^(^08)\d{8,11}$/;
            if (!$('#phone_number').val().match($regexname)) {
                e.preventDefault();
                return false;
            }
            $('#form').submit();
        })
    </script>
@endpush
