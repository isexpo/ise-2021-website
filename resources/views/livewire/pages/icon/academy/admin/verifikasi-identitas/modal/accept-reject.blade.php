<div class="p-4">

         <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">{{$type=='accept'?'Terima':'Tolak'}} Identitas peserta</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <form wire:submit.prevent="submit" class="mt-4">
        <p>Apakah anda ingin {{$type=='accept'?'menerima':'menolak'}} identitas peserta ini?</p>
        @if($type=='reject')
            <p>Sertakan komentar apabila anda ingin menolak identitas peserta ini :</p>
            <div class="mt-2 bg-white" wire:ignore>
                <div
                    name="comment"
                    x-data
                    x-ref="quillEditor"
                    x-init="
         quill = new Quill($refs.quillEditor, {theme: 'snow'});
         quill.on('text-change', function () {
           @this.set('comment', quill.root.innerHTML);
         });
       "
                    wire:model.lazy="comment"
                >
                    {!! $comment !!}
                </div>
            </div>
        @endif
        <hr class="my-4"/>
        <div class="flex flex-wrap mb-2 justify-end">
            <button class="text-gray border-2 border-gray-300 font-bold py-2 px-4 rounded-full mr-2"
                    type="button" wire:click="$emit('closeModal')">
                Batal
            </button>
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                Ya
            </button>
        </div>
    </form>
</div>
