<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            Country::POLAND => [
                Category::OLX,
                Category::INPOST,
                Category::DPD,
                Category::POCZTA,
                Category::VINTED,
                Category::ALLEGROLOKALNIE,
            ],
            Country::CZECH => [
                Category::BAZOS,
                Category::CBAZAR,
                Category::POSTAONLINE,
                Category::PPL,
                Category::SBAZAR,
                Category::ZASILKOVNA,
                Category::VINTED,
            ],
            Country::SWITZERLAND => [
                Category::POST,
                Category::TUTTI,
                Category::ANIBIS,
            ],
        ];
        foreach ($categories as $countryName => $services) {
            $country = Country::whereName($countryName)->first();
            foreach ($services as $service) {
                $category = Category::whereName($service)->firstOrNew();
                $category->name = $service;
                $category->country_id = optional($country)->id;
                $category->save();
            }
        }
    }
}
