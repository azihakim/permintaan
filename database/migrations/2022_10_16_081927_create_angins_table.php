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
            $table->double('cup_counter1')->nullable();
            $table->double('cup_counter2')->nullable();
            $table->double('arah1')->nullable();
            $table->double('kecepatan1')->nullable();
            $table->double('arah2')->nullable();
            $table->double('kecepatan2')->nullable();
            $table->double('arah3')->nullable();
            $table->double('kecepatan3')->nullable();
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
