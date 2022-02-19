<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Perusahaan</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i class="cil-x"></i></button>
    </div>
    <hr/>
    <form class="w-full max-w-full mt-4" wire:submit.prevent="submit" autocomplete="off">
        @if($errors->any())
            <div class="bg-red-400 border-l-4 border-red-500 p-4 mb-3" role="alert">
                <p class="font-bold text-lg">Validation Error</p>
                @foreach($errors->all() as $error)
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        @endif


        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    Judul Lowongan
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 mt-3 leading-tight focus:outline-none focus:bg-white"
                    id="" type="text" required wire:model.defer="name" name="name">
            </div>

        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-content">
                    Deskripsi Lowongan
                </label>
                <div class="mt-2 bg-white" wire:ignore>
                    <div name="desc" id="desc" x-data x-ref="quillEditor" x-init="
         quill2 = new Quill($refs.quillEditor, {theme: 'snow'});
         quill2.on('text-change', function () {
@this.set('desc', quill2.root.innerHTML);
         });
       " wire:model.lazy="desc">
                        {!! $desc !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="px-3 mb-6 md:mb-0 w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                    Tipe Lowongan
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="" required wire:model.defer="typeJob">
                    <option>Pilih Tipe Lowongan</option>
                    <option value="Full-Time">Full time</option>
                    <option value="Internship">Internship</option>
                    <option value="Part-Time">Part time</option>
                </select>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="px-3 mb-6 md:mb-0 w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                    Perusahaan
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="" required wire:model.defer="perusahaan">
                    <option>Pilih Perusahaan</option>
                    @foreach ($perusahaans as $perusahaan )
                        <option value={{$perusahaan->id}}>{{$perusahaan->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-content">
                    Persyaratan
                </label>
                <div class="mt-2 bg-white" wire:ignore>


                    <div name="requirement" id="requirement" x-data x-ref="quillEditor" x-init="
         quill = new Quill($refs.quillEditor, {theme: 'snow'});
         quill.on('text-change', function () {
@this.set('requirement', quill.root.innerHTML);
         });
       " wire:model.lazy="requirement">
                        {!!$requirement!!}
                    </div>

                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 -mt-4 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="flex items-center mt-3">
                    <input value=1 wire:model="need_portfolio" type="checkbox"
                           class="form-checkbox h-5 w-5 text-gray-600"><span
                        class="uppercase tracking-wide ml-2 mt-2  text-gray-700 text-xs font-bold mb-2 ">Portfolio</span>
                </label>
            </div>
        </div>
            
        <div class="flex flex-wrap -mx-3 -mt-4 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="flex items-center mt-3">
                    <input value=1 wire:model="need_personal_letter" type="checkbox"
                           class="form-checkbox h-5 w-5 text-gray-600"><span
                        class="uppercase tracking-wide ml-2 mt-2  text-gray-700 text-xs font-bold mb-2 ">Personal
                        letter</span>
                </label>
            </div>
        </div>
        <div class="flex flex-wrap mb-2 justify-end">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                Save
            </button>
        </div>
    </form>
</div>
