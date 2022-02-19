 {{--
        TODO (Atra) (Registrasi Ulang Startup/Data Science)
        Cukup modifikasi dari identitas tim BIONIX aja
        Ambil bagian upload gambar

        URL : /dashboard/peserta/academy/registrasi-ulang
    --}}
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @switch(Auth::user()->userable->academy_type)
        @case('Data Science Academy')
            @include('livewire.pages.icon.academy.peserta.registrasi-ulang.datascience')
        @break
        @case('Startup Academy')
            @include('livewire.pages.icon.academy.peserta.registrasi-ulang.startup')
        @break
        @default
        <div>
            kosong
        </div>
    @endswitch
