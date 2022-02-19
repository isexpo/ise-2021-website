<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-xl font-weight-bold">Perusahaan</h5>
        <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr class="mb-3"/>
    <div class="grid grid-cols-1">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <p class="font-bold mb-0 mt-2 text-lg">Nama Perusahaan</p>
                <p class="text-lg">{{$nama}}</p>
            </div>
            <div>
                <p class="font-bold mb-0 mt-2 text-lg">Wesbite Perusahaan</p>
                <p class="text-blue-500 truncate text-md"><a href="{{$company_url}}" target="_blank" >{{$company_url}}</a></p>
            </div>
            <div class="md:col-span-2 mt-2">
                <p class="font-bold mb-0 mt-2 text-lg">Deskripsi Perusahaan</p>
                {!! $desc !!}
            </div>
            <div>
                <p class="font-bold mb-0 mt-2 text-lg">Profile Perusahaan</p>
                @if($is_desc_video)
                <p class="text-blue-500 truncate text-md"><a href="//{{$media_path}}/" target="_blank" >{{$media_path}}</a></p>
                @else
                <img class="mx-auto md:w-max w-full max-w-max" src="{{asset('/storage/'.$media_path)}}"/>
                @endif
            </div>

        </div>
    </div>


    <hr class="my-4"/>

    <div class="flex flex-row justify-end">
        <button
            type="button" wire:click="$emit('closeModal')"
            class="text-gray border-2 border-gray-300 font-bold py-2 px-4 rounded-full mr-2" title="Tutup">
            Tutup
        </button>
    </div>
</div>
