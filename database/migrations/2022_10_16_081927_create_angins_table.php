<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angins', function (Blueprint $table) {
            $table->id();
            $table->double('cup_counter1')->unsigned()->nullable();
            $table->double('cup_counter2')->unsigned()->nullable();
            $table->double('arah1')->unsigned()->nullable();
            $table->double('kecepatan1')->unsigned()->nullable();
            $table->double('arah2')->unsigned()->nullable();
            $table->double('kecepatan2')->unsigned()->nullable();
            $table->double('arah3')->unsigned()->nullable();
            $table->double('kecepatan3')->unsigned()->nullable();
            $table->foreignId('pencatatans_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('angins');
    }
};
