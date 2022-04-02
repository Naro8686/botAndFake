<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentor_users', function (Blueprint $table) {
            $table->foreignId('mentor_id')
                ->constrained('mentors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('telegram_user_id')
                ->constrained('telegram_users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->text('experience')->nullable();
            $table->string('status')->default(\App\Constants\Status::PENDING);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentor_users');
    }
}
