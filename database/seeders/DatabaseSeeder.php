<?php

namespace Database\Seeders;

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
            RoleSeeder::class,
            TelegramUserSeeder::class,
            CountrySeeder::class,
            CategorySeeder::class,
            UserSeeder::class,
        ]);
    }
}
