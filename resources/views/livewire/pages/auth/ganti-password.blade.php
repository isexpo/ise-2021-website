<div class="px-8">
    <h3 class="text-2xl font-weight-bold mb-4" style="font-family: 'guestFont'">Ganti Password</h3>
    <div class="card rounded-xl">
        <div class="card-body">
            @if(session()->has('message'))
                <div class="bg-{{session('message_color')}}-400 border-l-4 border-{{session('message_color')}}-500 p-4 mb-3"
                     role="alert">
                    <p class="font-bold text-lg">{{session('header')}}</p>
                    <p>{{session('message')}}</p>
                </div>
            @endif
            @if($errors->any())
                <div class="bg-red-400 border-l-4 border-red-500 p-4 mb-3" role="alert">
                    <p class="font-bold text-lg">Password Error</p>
                    @foreach ($errors->all() as $error)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            @endif
            <form wire:submit.prevent="changePassword">
                <div class="grid grid-cols-1 gap-6 font-bold md:max-w-2xl">
                    <div>
                        <label for="password">Password Lama</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                               class="ganti-password-form ganti-password-form__input-text" placeholder="Password"
                               wire:model.defer="old_password">
                    </div>
                    <div>
                        <label for="new_password">Password Baru</label>
                        <input id="new_password" name="new_password" type="password" required
                               class="ganti-password-form ganti-password-form__input-text" placeholder="Password"
                               wire:model.defer="new_password">
                    </div>
                    <div>
                        <label for="retype_new_password">Retype Password Baru</label>
                        <input id="retype_new_password" name="retype_new_password" type="password" required
                               class="ganti-password-form ganti-password-form__input-text" placeholder="Password"
                               wire:model.defer="retype_new_password">
                    </div>
                    <div>
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
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
