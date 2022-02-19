<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// BIONIX Landing

//GUNAKAN INI JIKA DI LOCAL GK BISA PAKE SUBDOMAIN
Route::get('bionix/{type?}', \App\Http\Livewire\Pages\Landing\Bionix\Main::class)->name('bionix-landing');

//GUNAKAN INI JIKA SUPPORT SUBDOMAIN
//Route::domain('bionix.' . env('APP_URL', 'http://localhost'))->group(function () {
//    Route::get('{type?}',\App\Http\Livewire\Pages\Landing\Bionix\Main::class)->name('bionix-landing');
//});

// End of BIONIX Landing

// ICON Landing

//GUNAKAN INI JIKA DI LOCAL GK BISA PAKE SUBDOMAIN
Route::get('kirim-email-talkshow', function (Request $request) {
    $talkshow_members = \App\Models\IconTalkshowMember::where('is_sent',0)->limit(200)->get();
    foreach ($talkshow_members as $t){
        Mail::to($t->member->userData->email)->send(new \App\Mail\TalkshowAcaraMail());
        $t->update(['is_sent'=>1]);
    }
});
Route::prefix('icon')->group(function () {
    Route::get('/', App\Http\Livewire\Pages\Landing\Icon\Index::class)->name('icon-landing.index');
    Route::prefix('academy')->group(function () {
        Route::get('data-science', App\Http\Livewire\Pages\Landing\Icon\Academy\DataScience::class)->name('data-science-landing.index');
        Route::get('startup', App\Http\Livewire\Pages\Landing\Icon\Academy\Startup::class)->name('startup-landing.index');
    });

    Route::prefix('hall-of-is')->group(function () {
        Route::get('/', App\Http\Livewire\Pages\Landing\Icon\EHall\Home::class)->name('e-hall.index');
        Route::get('virtual-play', App\Http\Livewire\Pages\Landing\Icon\EHall\VirtualPlay::class)->name('virtual-play.index');
        Route::get('ise-quest', App\Http\Livewire\Pages\Icon\EHall\IseQuest\Index::class)->name('isequest.index');
        Route::get('ise-quest/{quizId}
        ', App\Http\Livewire\Pages\Icon\EHall\IseQuest\LevelCard::class)->name('isequest.quiz');
        Route::get('technical-it', App\Http\Livewire\Pages\Landing\Icon\EHall\TechnicalIT::class)->middleware(['accessdate:true,18-10-2021 00:00:00'])->name('technical-it.index');
        Route::prefix('article')->group(function () {
            Route::get('go-social', App\Http\Livewire\Pages\Landing\Icon\EHall\Article\GoSocial::class)->name('article.go-social');
            Route::get('energeek', App\Http\Livewire\Pages\Landing\Icon\EHall\Article\Energeek::class)->name('article.energeek');
            Route::get('digiflux', App\Http\Livewire\Pages\Landing\Icon\EHall\Article\Digiflux::class)->name('article.digiflux');
            Route::get('alinamed', App\Http\Livewire\Pages\Landing\Icon\EHall\Article\Alinamed::class)->name('article.alinamed');
            Route::get('stratek', App\Http\Livewire\Pages\Landing\Icon\EHall\Article\Stratek::class)->name('article.stratek');
            Route::get('kreaktif', App\Http\Livewire\Pages\Landing\Icon\EHall\Article\Kreaktif::class)->name('article.kreaktif');
            Route::get('drafta', App\Http\Livewire\Pages\Landing\Icon\EHall\Article\Drafta::class)->name('article.drafta');
            Route::get('ilmu-dewantara', App\Http\Livewire\Pages\Landing\Icon\EHall\Article\IlmuDewantara::class)->name('article.ilmu-dewantara');
        });
        Route::get('share', App\Http\Livewire\Pages\Landing\Icon\EHall\ShareHois::class)->name('share-hois.index');
    });
    Route::get('grand-talkshow', App\Http\Livewire\Pages\Landing\Icon\GrandTalkShow\Home::class)->name('grand-talkshow');

    Route::prefix('jobfair')->group(function () {
        Route::get('/{lowongan_id?}', App\Http\Livewire\Pages\Landing\Icon\VirtualJobFair\Periode::class)->name('virtual-job-fair.index');
    });
});

//GUNAKAN INI JIKA SUPPORT SUBDOMAIN
//Route::domain('icon.' . env('APP_URL', 'http://localhost'))->group(function () {
//    Route::get('/', App\Http\Livewire\Pages\Landing\Icon\Index::class)->name('icon-landing.index');
//    Route::prefix('academy')->group(function () {
//        Route::get('data-science', App\Http\Livewire\Pages\Landing\Icon\Academy\DataScience::class)->name('data-science-landing.index');
//        Route::get('startup', App\Http\Livewire\Pages\Landing\Icon\Academy\Startup::class)->name('startup-landing.index');
//    });
//});

// End of ICON Landing


//SET LAGI JIKA GK SUPPORT SUBDOMAIN (KOMEN 1 BARIS INI AJA)
//Route::domain('dashboard.' . env('APP_URL', 'http://localhost'))->group(function () {


// Dashboard
Route::prefix('dashboard')->group(__DIR__ . '/dashboard.php');
// End of Dashboard

// Some Landing Page
Route::get('/', \App\Http\Livewire\Pages\Landing\IseLanding::class)->name('ise-landing');
Route::get('/coming-soon', \App\Http\Livewire\Pages\Landing\ComingSoon::class)->name('coming-soon');
Route::get('/{shorten_link}', function ($shorten_link) {
    $destination = \App\Models\ShortenLink::where('shorten_link', $shorten_link)->first();
    if ($destination) {
        $destination = $destination->destination;
        return Redirect::to(strpos($destination, 'http') !== false ? $destination : 'http://' . $destination);
    }
    return abort(404);
});
