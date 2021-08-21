<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->unique()->nullable();

            $table->foreignId('telegram_id')
                ->unique()
                ->constrained('telegram_users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('referrer_id')
                ->nullable()
                ->constrained('telegram_users')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreignId('replied_id')
                ->nullable()
                ->constrained('telegram_users')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->string('learn')->nullable();
            $table->string('practice')->nullable();
            $table->boolean('approved')->nullable();
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
        Schema::dropIfExists('requests');
    }
}
