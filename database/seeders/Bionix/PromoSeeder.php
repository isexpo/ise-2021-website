<?php

namespace Database\Seeders\Bionix;

use App\Models\Bionix\PromoCode;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromoCode::create([
            'name'=>'Tes',
            'promo_code'=>'TES123',
            'nominal'=>20000,
            'start'=>Carbon::now(),
            'end'=>Carbon::now()->addMonth(1)
        ]);
    }
}
