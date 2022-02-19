<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'admin_type' => 'Bionix Admin'
        ]);
        User::create(
            [
                'name' => 'Admin 1',
                'email' => 'admin1@gmail.com',
                'password' => \Hash::make('password'),
                'userable_id' => $admin->id,
                'userable_type' => 'App\Models\Admin',
                'email_verified_at' => Carbon::now()
            ]
        );

        $admin_icon = Admin::create([
            'admin_type' => 'Icon Admin'
        ]);
        User::create(
            [
                'name' => 'Admin 2',
                'email' => 'admin2@gmail.com',
                'password' => \Hash::make('password'),
                'userable_id' => $admin_icon->id,
                'userable_type' => 'App\Models\Admin',
                'email_verified_at' => Carbon::now()
            ]
        );
    }
}
