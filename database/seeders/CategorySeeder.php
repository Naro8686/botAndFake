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
            Category::OLX,
            Category::INPOST,
            Category::DPD,
            Category::POCZTA,
            Category::VINTED,
            Category::ALLEGRO,
            Category::BAZOS,
            Category::CBAZAR,
        ];
        foreach ($categories as $categoryName) {
            $country = Country::whereName(in_array($categoryName, [Category::BAZOS, Category::CBAZAR])
                ? Country::CZECH
                : Country::POLAND)
                ->first();
            $category = Category::whereName($categoryName)->firstOrNew();
            $category->name = $categoryName;
            $category->country_id = $country->id ?? null;
            $category->save();
        }
    }
}
