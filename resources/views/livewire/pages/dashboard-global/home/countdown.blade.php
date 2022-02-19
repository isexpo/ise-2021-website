<div class="card rounded-xl p-4">
    <h4 class="font-bold text-xl" style="color: #FF7C74;">{{$title}}</h4>
    <div>
        <label class="bg-red-400 text-white p-1 text-xs w-auto rounded font-bold">{{$tag}}</label>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-4">
        <div>
            <div class="card bg-gray-200 rounded p-2 mb-2 border-0 w-full">
                <h1 class="font-bold xl:text-6xl sm:text-4xl text-center text-gray-500" id="cd-day-{{$event_id}}">00</h1>
            </div>
            <h6 class="font-normal text-center uppercase text-gray-500" style="font-size: 0.65rem">Days</h6>
        </div>
        <div>
            <div class="card bg-gray-200 rounded p-2 mb-2 border-0 w-full">
                <h1 class="font-bold xl:text-6xl sm:text-4xl text-center text-gray-500" id="cd-hour-{{$event_id}}">00</h1>
            </div>
            <h6 class="font-normal text-center uppercase text-gray-500" style="font-size: 0.65rem">Hours</h6>
        </div>
        <div>
            <div class="card bg-gray-200 rounded p-2 mb-2 border-0 w-full">
                <h1 class="font-bold xl:text-6xl sm:text-4xl text-center text-gray-500" id="cd-minute-{{$event_id}}">00</h1>
            </div>
            <h6 class="font-normal text-center uppercase text-gray-500" style="font-size: 0.65rem">Minutes</h6>
        </div>
        <div>
            <div class="card bg-gray-200 rounded p-2 mb-2 border-0 w-full">
                <h1 class="font-bold xl:text-6xl sm:text-4xl text-center text-gray-500" id="cd-second-{{$event_id}}">00</h1>
            </div>
            <h6 class="font-normal text-center uppercase text-gray-500" style="font-size: 0.65rem">Seconds</h6>
        </div>
    </div>
    <div class="flex flex-row justify-center mt-4 md:align-items-center"><i class="far fa-calendar-alt"></i>
        <p class="mb-0 ml-2 text-gray-500 font-medium">{{date(strlen($deadline)>10?'d F Y H:i:s':'d F Y',strtotime($deadline))}} @if(strlen($deadline)>10) WIB @endif</p>
    </div>
</div>

<script>

    setInterval(function () {
        let deadline = new Date('{{$deadline}}').getTime()
        let now = new Date().getTime();
        let distance = deadline - now;
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        $('#cd-day-{{$event_id}}').html(days>=10?days:'0'+days)
        $('#cd-hour-{{$event_id}}').html(hours>=10?hours:'0'+hours)
        $('#cd-minute-{{$event_id}}').html(minutes>=10?minutes:'0'+minutes)
        $('#cd-second-{{$event_id}}').html(seconds>=10?seconds:'0'+seconds)
    }, 1000)
</script>
