<div class="tracking-wider">
    <h1 class="text-3xl font-weight-bold">Halo, Selamat Datang di Dashboard ICON Virtual Intern & Job Fair!</h1>
    <h3 class="text-xl font-weight-bold my-4">Info</h3>
    <div class="card p-8 mr-6 xl:mr-96 rounded-xl">

        <div class="flex space-x-28 text-2xl font-semibold">
            <div class="pl-10">
                <p wire:click="setToApplied()" class="{{$isPageBookmark ? '' : 'border-b-4 rounded-b-sm'}} cursor-pointer" style="{{$isPageBookmark ? '' : 'border-color: #CE00B1'}}"> Applied </p>
            </div>
            <div class=""><p wire:click="setToBookmark()" class="{{$isPageBookmark ? 'border-b-4 rounded-b-sm' : ''}} cursor-pointer" style="{{$isPageBookmark ? 'border-color: #CE00B1' : ''}}"> Bookmarked </p></div>
        </div>



        <div class="text-2xl mt-2">
            <ul class="ml-6">
                @foreach($jobLists as $jobList)
                <li class="list-disc mt-4">
                    <div class="flex gap-x-10 flex-auto">
                        <div class="font-semibold">{{$jobList->lowongan->perusahaan->name}}<br><span class="text-xl" style="color: #7b7b7b">{{$jobList->lowongan->name}}</span></div>
                        <div class="text-xl px-2 rounded-sm" style="height:26px;color: #27c837; background-color: #B1FFAF">
                            {{$jobList->lowongan->type}}</div>
                        <div class="ml-auto hidden md:block"><a href="{{route('virtual-job-fair.index',['lowongan_id'=>$jobList->lowongan->id])}}" class="text-lg p-2 px-4 rounded text-white" style="background: linear-gradient(90deg, #CE00B1 0%, #8818C9 100.11%);">Menuju ke halaman apply</a></div>
                    </div>
                    <div class="ml-auto block md:hidden"><a href="{{route('virtual-job-fair.index',['lowongan_id'=>$jobList->lowongan->id])}}" class="text-lg p-2 px-4 rounded text-white" style="background: linear-gradient(90deg, #CE00B1 0%, #8818C9 100.11%);">Menuju ke halaman apply</a></div>
                </li>
                @endforeach
            </ul>
        </div>

    </div>
</div>


@livewireScripts
