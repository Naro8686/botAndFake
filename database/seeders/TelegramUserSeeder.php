<?php

namespace Database\Seeders;

use App\Models\Request;
use App\Models\Role;
use App\Models\TelegramUser;
use Illuminate\Database\Seeder;

class TelegramUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::whereName(Role::ADMIN)->first();
        TelegramUser::create([
            "id" => 508778607,
            "is_bot" => false,
            "first_name" => "Naro",
            "username" => "Naro8686",
            "language_code" => "ru",
            "role_id" => $admin->id ?? null
        ]);
        Request::create([
            "telegram_id" => 508778607,
            "approved" => true
        ]);
    }
}
