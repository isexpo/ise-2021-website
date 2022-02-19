<div class="mt-8 pb-12 space-y-6 mx-10 mb-36 text-lg">
    <h2 class="text-4xl" style="font-family: 'guestFont'">Kamu Mau Masuk yang Mana Dulu?</h2>
    <div class="border-4 rounded mr-36 md:mr-72 mt-2 mb-4 border-indigo-600"></div>
    <div class="rounded-md shadow-sm">
        @if(Auth::user()->userable->jenjang=="Umum")
            <div class="mb-8">
                <p class="mb-3">Maaf, saat ini belum ada dashboard untuk peserta non-siswa atau non-mahasiswa.</p>
            </div>
        @endif
        @if(Auth::user()->userable->jenjang=="Mahasiswa"||Auth::user()->userable->jenjang=="Siswa SMA")
            <div class="mb-8">
                <p class="mb-3">BIONIX</p>
                <a href="{{route('bionix.peserta.homepage')}}"
                   class="items-center group relative w-full hover:shadow-lg flex justify-left py-2 px-4 border-2 font-bold rounded-md text-indigo-600 bg-white border-indigo-600 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                            <span class="absolute right-0 inset-y-0 flex items-center pr-3">
                                <!-- Heroicon name: solid/lock-closed -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5 text-indigo-600 group-hover:text-white" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"/>
                                </svg>
                            </span>
                    Menuju Dashboard BIONIX
                </a>
            </div>
        @endif
        @if(Auth::user()->userable->jenjang=="Mahasiswa")
            <div class="mb-8">
                <p class="mb-3">Startup Academy</p>
                <a href="{{route('register-startup')}}"
                   class="items-center group relative w-full hover:shadow-lg flex justify-left py-2 px-4 border-2 font-bold rounded-md text-indigo-600 bg-white border-indigo-600 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                            <span class="absolute right-0 inset-y-0 flex items-center pr-3">
                                <!-- Heroicon name: solid/lock-closed -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5 text-indigo-600 group-hover:text-white" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"/>
                                </svg>
                            </span>
                    Menuju Dashboard Startup Academy
                </a>
            </div>
            <div class="mb-8">
                <p class="mb-3">Data Science Academy</p>
                <a href="{{route('register-data-science')}}"
                   class="items-center group relative w-full hover:shadow-lg flex justify-left py-2 px-4 border-2 font-bold rounded-md text-indigo-600 bg-white border-indigo-600 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                            <span class="absolute right-0 inset-y-0 flex items-center pr-3">
                                <!-- Heroicon name: solid/lock-closed -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5 text-indigo-600 group-hover:text-white" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"/>
                                </svg>
                            </span>
                    Menuju Dashboard Data Science Academy
                </a>
            </div>
        @endif

        <p class="text-center text-base" style="margin-top: 1.25rem">Bukan akun kamu? <a href="/logout"
                                                                                         onclick="
event.preventDefault();
$('#logout').submit();" class="text-indigo-400 hover:underline">Keluar</a>
        <form action="{{ url('/logout') }}" method="POST" id="logout"> @csrf
        </form>
        </p>
    </div>
</div>

