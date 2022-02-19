<div class="p-4">

    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Detail Peserta</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <div class="px-4 mt-4">

        <div class="px-4 mt-4">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Nama</p>
                    <p>{{$talkshow->member->userData->name}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Institusi</p>
                    <p>{{$talkshow->institute_name}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">{{(strpos($talkshow->link_story,'https://')!==false||strpos($talkshow->link_story,'instagram.com')!==false)?'Link Story':'Bukti Follow'}}</p>
                    @if(strpos($talkshow->link_story,'https://')!==false||strpos($talkshow->link_story,'instagram.com')!==false)
                        <p class="text-blue-500 truncate"><a href="{{$talkshow->link_story}}"
                                                             target="_blank">{{$talkshow->link_story}}</a></p>
                    @else
                        <img class="object-scale-down w-50" src="{{asset('/storage/'.$talkshow->link_story)}}"/>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
