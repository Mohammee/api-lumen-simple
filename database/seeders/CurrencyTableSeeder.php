<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::insert([
            ['currency_code' => 'USD' , 'exchange_rate' => 3.10],
            ['currency_code' => 'JOD' , 'exchange_rate' => 4.38],
            ['currency_code' => 'SAR' , 'exchange_rate' => 0.83],
            ['currency_code' => 'EUR' , 'exchange_rate' => 3.50],
        ]);
    }
}
