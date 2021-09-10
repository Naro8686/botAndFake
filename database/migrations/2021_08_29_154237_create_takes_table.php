<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takes', function (Blueprint $table) {
            $table->unsignedBigInteger('telegram_id');
            $table->unsignedBigInteger('fake_id');

            $table->foreign('telegram_id')
                ->references('id')
                ->on('telegram_users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('fake_id')
                ->references('id')
                ->on('fakes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('takes');
    }
}
