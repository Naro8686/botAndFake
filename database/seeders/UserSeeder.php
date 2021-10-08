<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\TelegramUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $admin = Role::whereName(Role::ADMIN)->first();
        if ($telegramUser = TelegramUser::whereId(508778607)->first()) $telegramUser
            ->user()->create([
                "telegram_id" => 508778607,
                "name" => "Naro",
                "email" => "naro@admin.panel",
                "password" => Hash::make("secret"),
                "email_verified_at" => now(),
                "role_id" => $admin->id ?? null
            ]);

        if ($telegramUser = TelegramUser::whereId(1232010813)->first()) $telegramUser
            ->user()->create([
                "telegram_id" => 1232010813,
                "name" => "Aston",
                "email" => "aston@admin.panel",
                "password" => Hash::make("secret"),
                "email_verified_at" => now(),
                "role_id" => $admin->id ?? null
            ]);
    }
}
