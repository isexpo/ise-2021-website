<?php

namespace Database\Seeders;

use Database\Seeders\AdminSeeder;
use Database\Seeders\Bionix\BionixJuniorSeeder;
use Database\Seeders\Bionix\BionixSeniorSeeder;
use Database\Seeders\Bionix\CitiesSeeder;
use Database\Seeders\Bionix\PromoSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            SettingsSeeder::class,
            CitiesSeeder::class,
//            BionixJuniorSeeder::class,
//            BionixSeniorSeeder::class,
            AdminSeeder::class,
//            PromoSeeder::class
        ]);
    }
}
