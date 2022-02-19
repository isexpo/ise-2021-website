<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 font-bold text-lg"
     style="background: linear-gradient(116.52deg, #014167 -2.17%, #B45C5B 95.97%);">
    <div class="max-w-5xl w-full space-y-8 mb-10"
         style="background: #fdfdfd; box-shadow: 0px 5px 50px 5px rgba(0, 0, 0, 0.25);">
        <div class="sm:h-96 h-72 pt-6 pl-5 bg-cover bg-no-repeat bg-right"
             style="background-image: url({{asset("img/auth/background-regis.svg")}})">
            <img src="{{asset("img/global/logo.svg")}}">
        </div>
        <div>
            <h1 class="text-4xl text-center font-bold capitalize mx-5" style="font-family: 'guestFont'">Selamat!
                Pendaftaran Grand Talkshow Berhasil</h1>
        </div>
        <div class="mx-12" style="border: 1px solid rgba(0, 0, 0, 0); background: rgba(0, 0, 0, 0.21);">
        </div>

        <h5 class="text-xl md:text-left text-center mx-11 font-normal">
            Terima kasih telah mendaftar ICON Grand Talkshow pada tanggal 7 November 2021. Informasi selanjutnya akan
            diinformasikan menjelang acara dimulai. Kami telah mengirimkan pesan melalui e-mail. Silahkan periksa kotak
            masuk atau folder spam anda.
        </h5>
        <div class="flex grid-cols-2 gap-x-4 justify-center pb-8 mb-24 content-center mx-11">
            <a href="{{route('dashboard.index')}}"
               type="button"
               class=" items-center group relative w-full hover:shadow-lg flex justify-center py-2 px-4 border-2 font-bold rounded-md text-indigo-600 bg-white border-indigo-600 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    <span class="absolute right-0 inset-y-0 flex items-center pr-3">
                    <!-- Heroicon name: Chevron right -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 group-hover:text-white"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    </span>
                Kembali ke dashboard
            </a>
        </div>
    </div>
</div>
