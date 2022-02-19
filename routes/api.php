<?php

use App\Models\Icon\IconAcademyDataScience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware(['auth:api', 'usertypecheck:bionix_peserta', 'bionixcheck:pembayaran_terverifikasi', 'usertypecheck:Siswa SMA'])->get('/moodle-user', function (Request $request) {
    return response()->json([
        'team_name' => Auth::user()->userable->bionix->team_name,
        'region' => 'Region ' . Auth::user()->userable->bionix->city->region,
        'email' => Auth::user()->email,

    ]);
});

Route::post('/jumlah-peserta', function (Request $request) {
    $jumlah_peserta_datascience = IconAcademyDataScience::query()
        ->leftJoin('members', function ($q) {
            $q->on('members.academy_id', '=', 'icon_academy_data_sciences.id');
            $q->where('members.academy_type', '=', 'App\Models\Icon\IconAcademyDataScience');
        })->count();

    return Response::json([
        "timestamp" => \Carbon\Carbon::now(),
        "tim" => [
            "bionix" => [
                "junior" => [
                    "total" => \App\Models\Bionix\TeamJuniorData::all()->count(),
                    "bayar" => \App\Models\Bionix\TeamJuniorData::query()->where('payment_verif_status', 'Terverifikasi')->count(),
                    "profil" => \App\Models\Bionix\TeamJuniorData::query()->where('profile_verif_status', 'Terverifikasi')->count(),
                ],
                "senior" => \App\Models\Bionix\TeamSeniorData::all()->count(),
            ],
            "icon" => [
                "academy" => [
                    'data-science' => \App\Models\Icon\IconAcademyDataScience::all()->count(),
                    'startup' => \App\Models\Icon\IconAcademyStartup::all()->count(),
                ]
            ]
        ],
        "peserta" => [
            "bionix" => [
                "junior" => \App\Models\Bionix\TeamJuniorMember::all()->count(),
                "senior" => \App\Models\Bionix\TeamSeniorMember::all()->count(),
            ],
            "icon" => [
                "academy" => [
                    'data-science' => $jumlah_peserta_datascience,
                    'startup' => \App\Models\Icon\IconAcademyStartupMember::all()->count(),
                ],
                "talkshow" => \App\Models\IconTalkshowMember::all()->count(),
                "jobfair" => [
                    'member' => \App\Models\JobfairMember::all()->count(),
                    'apply' => \App\Models\IconJobfairLowonganMemberApply::all()->count(),
                    'bookmark' => \App\Models\IconJobfairLowonganMemberBookmark::all()->count(),
                    'apply-distinct' => \App\Models\IconJobfairLowonganMemberApply::all('member_id')->unique('member_id')->count(),
                ]
            ]
        ],

    ]);
})->middleware('bot.verified');
