<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            [
                ['name' => 'bionix_bank_name', 'value' => 'bank_bni'],
                ['name' => 'bionix_bank_norek', 'value' => '1212148644'],
                ['name' => 'bionix_bank_owner', 'value' => 'Dyah Ayu Farah Anggraeni'],
                ['name' => 'bionix_junior_price', 'value' => '89000'],
                ['name' => 'bionix_senior_price', 'value' => '99000'],
                ['name' => 'academy_startup_price', 'value' => '10000'],
                ['name' => 'academy_data_science_price', 'value' => '20000'],
            ]
        );
    }
}
