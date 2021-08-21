<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ([Role::ADMIN, Role::MODERATOR, Role::WORKER] as $name) Role::create(['name' => $name]);
    }
}
