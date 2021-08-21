<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelegramUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telegram_users', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->unique()->index();
            $table->boolean('is_bot')->default(false);
            $table->boolean('has_ban')->default(false);
            $table->boolean('visibly')->default(true);
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->unique()->nullable();
            $table->char('language_code', 10)->nullable();
            $table->foreignId('role_id')->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->json('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telegram_users');
    }
}
