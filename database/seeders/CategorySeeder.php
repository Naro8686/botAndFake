<?php

namespace Database\Seeders;

use App\Models\Category;
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
            ['name' => Category::OLX],
            ['name' => Category::INPOST],
            ['name' => Category::DPD],
            ['name' => Category::POCZTA],
            ['name' => Category::VINTED],
        ];
        foreach ($categories as $category) Category::updateOrInsert($category);
    }
}
