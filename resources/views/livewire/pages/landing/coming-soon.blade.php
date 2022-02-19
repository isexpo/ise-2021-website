@section('title','Coming Soon')
<a class="navbar-brand" href="{{config('app.url')}}">
    <img class="mt-5 ms-5" src="{{asset('/img/global/logo.svg')}}" alt="ISE! 2021" width="100" height="auto">
</a>

<div class="container my-5 contSatu text-center">
    <div class="row">
        <div class="col-10 textJudul judulAsli position-absolute start-50 translate-middle-x">
            COMING SOON
        </div>
        <div class="col-10 textJudul judulBayangan position-absolute start-50 translate-middle-x">
            COMING SOON
        </div>
        <div class="col-10 textJudul judulBayangan2 position-absolute start-50 translate-middle-x">
            COMING SOON
        </div>
    </div>
</div>
<div class="container contDua text-center">
    <div class="row justify-content-center">
        <div class="col-10 subJudul">
            <span class="highlight p-2">Stay tuned,</span>
            we will open it soon!
        </div>
    </div>

    <div class="row justify-content-center mt-5 pb-4">
        <div class="col-10 mt-5 align-bottom">
            <a class="medsos" href="https://twitter.com/is_expo" target="_blank" title="Twitter">
                <i class="fa fa-twitter fa-2x lingkaran pt-2 pt-md-2 mx-3 mb-0 pb-0" aria-hidden="true"></i>
            </a>
            <a class="medsos" href="https://www.instagram.com/is_expo/" target="_blank" title="Instagram">
                <i class="fa fa-instagram fa-2x lingkaran pt-2 pt-md-2 mx-3 mb-0 pb-0" aria-hidden="true"></i>
            </a>
            <a class="medsos" href="https://www.youtube.com/channel/UCPbOX3w8G4_dwOMDNl97PTw" target="_blank"
               title="YouTube">
                <i class="fa fa-youtube fa-2x lingkaran pt-2 pt-md-2 mx-3 mb-0 pb-0" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>

@push('css')
    <link rel="stylesheet" href="{{asset('/css/coming-soon/style.css')}}"/>
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
@endpush
