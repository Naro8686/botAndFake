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
        $params = [
            [
                "id" => 508778607,
                "is_bot" => false,
                "first_name" => "Naro",
                "last_name" => "8686",
                "username" => "Naro8686",
                "language_code" => "ru",
                "role_id" => $admin->id ?? null
            ],
            [
                "id" => 1232010813,
                "is_bot" => false,
                "first_name" => "Aston",
                "last_name" => "Raptor",
                "username" => "AstonRaptor",
                "language_code" => "ru",
                "role_id" => $admin->id ?? null
            ]
        ];
        foreach ($params as $param) {
            TelegramUser::whereId($param['id'])->firstOrCreate($param);
            Request::whereTelegramId($param['id'])->firstOrCreate([
                "telegram_id" => $param['id'],
                "approved" => true
            ]);
        }
    }
}
