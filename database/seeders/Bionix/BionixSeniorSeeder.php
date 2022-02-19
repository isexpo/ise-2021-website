<?php

namespace Database\Seeders\Bionix;

use App\Models\Bionix\TeamSeniorData;
use App\Models\Bionix\TeamSeniorMember;
use App\Models\Member;
use App\Models\User;
use App\Models\Setting;
use Carbon\Carbon;
use Hash;
use Illuminate\Database\Seeder;

class BionixSeniorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price = Setting::where('name','bionix_senior_price')->first()->value;
        $member_senior_1 = TeamSeniorMember::create(
            [
                'name'=>'John',
                'whatsapp'=>'12345678',
                'email'=>'john_senior@gmail.com'
            ]
        );
        $member_senior_2 = TeamSeniorMember::create(
            [
                'name'=>'Doe',
                'whatsapp'=>'12345678',
                'email'=>'doe@gmail.com'
            ]
        );
        $member_senior_3 = TeamSeniorMember::create(
            [
                'name'=>'Foo',
                'whatsapp'=>'12345678',
                'email'=>'foo@gmail.com'
            ]
        );
        $team_data = TeamSeniorData::create(
            [
                'team_name'=>'Team Sen1',
                'info_source'=>'Media Sosial ISE! 2021',
                'university_name'=>'Universitas Tadika Mesra',
                'city_id'=>1,
                'payment_price'=>$price,
                'leader_id'=>$member_senior_1->id,
                'member1_id'=>$member_senior_2->id,
                'member2_id'=>$member_senior_3->id
            ]
        );
        $member_data = Member::create([
            'jenjang'=>'Mahasiswa',
            'bionix_id'=>$team_data->id,
            'bionix_type'=>'App\Models\Bionix\TeamSeniorData',
        ]);
        User::create(
            [
                'name'=>$member_senior_1->name,
                'email'=>$member_senior_1->email,
                'password'=>Hash::make('password'),
                'userable_id'=>$member_data->id,
                'userable_type'=>'App\Models\Member',
                'email_verified_at'=>Carbon::now()
            ]
        );
    }
}
