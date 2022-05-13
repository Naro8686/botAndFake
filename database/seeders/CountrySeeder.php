<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ([Country::POLAND, Country::CZECH, Country::SWITZERLAND] as $country) {
            Country::updateOrCreate(['name' => $country]);
        }
    }
}
