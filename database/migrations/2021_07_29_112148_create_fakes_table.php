<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('track_id')->unique();
            $table->string('title')->nullable();
            $table->string('price');
            $table->string('img')->nullable();
            $table->string('recipient')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('category_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('telegram_id')
                ->constrained('telegram_users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('fakes');
    }
}
