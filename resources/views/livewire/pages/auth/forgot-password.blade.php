<form class="mt-8 pb-48 space-y-6 mx-10 text-lg" action="/forgot-password" method="POST">
    <h2 class="text-4xl" style="font-family: 'guestFont'">Forgot Password</h2>
    <div class="border-4 rounded mr-36 md:mr-72 mt-2 mb-4 border-indigo-500"></div>
    @csrf
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                 role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    @endif
    @if(session('status'))
        <div
            class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative"
            role="alert">
            {{session('status')}}
        </div>
    @endif
    <div class="rounded-md shadow-sm -space-y-px">
        <div class="mb-5">
            <label for="email-address">Email address</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required
                   class="registration-form input-text" placeholder="Email address">
        </div>
    </div>
    <button type="submit"
            class="items-center group relative w-full hover:shadow-lg flex justify-center py-2 px-4 border border-transparent font-bold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <!-- Heroicon name: solid/lock-closed -->
                        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </span>
        Continue
    </button>

    <div class="text-sm mt-4 md:mt-0">
        <a href="{{route('login')}}" class="font-medium text-indigo-600 hover:text-indigo-500">
            Back to login
        </a>
    </div>

</form>

