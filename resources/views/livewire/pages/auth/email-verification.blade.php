<div class="min-h-screen flex items-center justify-center py-12 px-10"
     style="background-image: url({{asset("img/auth/bg_auth.svg")}});background-size: cover;background-repeat: no-repeat">
    <div class="max-w-5xl w-full space-y-8 bg-white pb-10" style="box-shadow: 0px 5px 50px 5px rgba(0, 0, 0, 0.25);">
        <div class="sm:h-96 h-72 bg-cover bg-no-repeat bg-right pt-6 pl-5"
             style="background-image: url({{asset("img/auth/bg_auth_card.svg")}});background-size: cover;background-repeat: no-repeat;background-position-y: bottom;">
            <img src="{{asset("img/global/logo.svg")}}">
        </div>
        <div>
            <h1 class="text-4xl md:text-left text-center font-bold capitalize mx-11" style="font-family: 'guestFont'">Thank you for registering!</h1>
        </div>
        <div class="mx-11" style="border: 1px solid rgba(0, 0, 0, 0); background: rgba(0, 0, 0, 0.21);">
        </div>
        <p class="text-base md:text-left text-center mx-11">
            Sebelum masuk ke dashboard, harap lakukan konfirmasi alamat email anda terlebih dahulu. Kami telah
            mengirimkan email yang berisi link untuk melakukan verifikasi alamat email. Jika email yang kami kirimkan
            belum masuk, anda dapat melakukan pengiriman ulang melalui tombol di bawah. Jangan lupa untuk mengecek folder spam apabila email tidak ada di kotak masuk.
        </p>
        <div class="flex md:block justify-center mx-11 flex-col">
            <form action="/email/verification-notification" method="POST">
                @csrf
                <button type="submit"
                        class="w-5/6 md:w-5/12 hover:shadow-lg flex justify-center items-center py-2 px-4 border-transparent font-bold rounded-md text-white bg-green-400 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300">
                    Kirim ulang email
                </button>
            </form>
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    A new email verification link has been emailed to you!
                </div>
            @endif
            <p class="text-base" style="margin-top: 1.25rem">Bukan akun kamu? <a href="/logout"
                                                                                             onclick="
event.preventDefault();
$('#logout').submit();" class="text-indigo-400 hover:underline">Keluar</a>
            <form action="{{ url('/logout') }}" method="POST" id="logout"> @csrf
            </form>
            </p>
        </div>
    </div>
</div>
