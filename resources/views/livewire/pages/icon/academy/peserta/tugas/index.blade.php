<div class="px-8">
    {{--
     TODO (Atra) (Tugas Startup/Data Science)
     Cukup modifikasi dari bagian pengumuman

     URL : /dashboard/peserta/academy/tugas
 --}}
    {{-- In work, do what you enjoy. --}}
    @foreach ($alert_coll as $id=>$alert)
        <div
            class="mb-2 bg-{{$alert['alert_color']}}-100 border-t-4 border-{{$alert['alert_color']}}-500 rounded-b text-{{$alert['alert_color']}}-900 px-4 py-3 shadow-md"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-{{$alert['alert_color']}}-500 mr-4"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold">{{$alert['alert_header']}}</p>
                    <p class="text-sm">{!! $alert['alert_content'] !!}</p>
                </div>
            </div>
        </div>
    @endforeach


    <h3 class="text-xl font-weight-bold my-4">Tugas</h3>
    <div class="grid grid-cols-1 gap-6 mt-4 mb-4">
        @forelse ($tasks as $task)
            <livewire:pages.icon.academy.peserta.tugas.task-card :task="$task"/>
        @empty
            <div>
                <p>Tidak ada Tugas</p>
            </div>
        @endforelse
    </div>
    <div wire:loading.delay wire:target="fileTask"
         class="fixed bottom-12 right-12 bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md"
         role="alert" style="color:rgba(30, 58, 138, var(--tw-text-opacity))">
        <div class="flex">
            <div class="py-1">
                <svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                </svg>
            </div>
            <div>
                <p class="font-bold">Sedang mengunggah</p>
                <p class="text-sm">Harap tunggu sesaat.</p>
            </div>
        </div>
    </div>
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
                        <li>{{$error }}</li>
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
                    <p class="font-bold">{{$messageType=='green'?'Sukses':($messageType=='blue'?'Informasi':'Terjadi Masalah')}}</p>
                    <p class="text-sm">{{$message}}</p>
                </div>
                <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start"><i
                        class="cil-x"></i></button>
            </div>
        </div>
    @endif
</div>

