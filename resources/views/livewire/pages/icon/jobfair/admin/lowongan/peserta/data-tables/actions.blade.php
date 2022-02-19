<div class="flex space-x-1 justify-evenly">
    <a class='flex justify-content-center' target=_blank href='{{asset('/storage/'.$cv_path)}}'>
        <button class='p-1 text-green-600 hover:bg-green-600 hover:text-white rounded'>
        <i class='fas fa-cloud-download-alt mr-1'></i>CV
    </button>
</a>

<a class='flex justify-content-center' target=_blank href='{{asset('/storage/'.$portofolio)}}'>
    <button class='p-1 text-green-600 hover:bg-green-600 hover:text-white rounded'>
    <i class='fas fa-cloud-download-alt mr-1'></i>Portfolio
</button>
</a>

@if($personal_letter)
<a class='flex justify-content-center' target=_blank href='{{asset('/storage/'.$personal_letter)}}'>
    <button class='p-1 text-green-600 hover:bg-green-600 hover:text-white rounded'>
    <i class='fas fa-cloud-download-alt mr-1'></i>Personal Letter
</button>
@endif
</a>
</div>
