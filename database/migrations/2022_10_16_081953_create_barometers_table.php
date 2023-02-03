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
        Schema::create('barometers', function (Blueprint $table) {
            $table->id();
            $table->double('suhu')->unsigned()->nullable();
            $table->double('barometer')->unsigned()->nullable();
            $table->double('qfe')->unsigned()->nullable();
            $table->double('qff')->unsigned()->nullable();
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
        Schema::dropIfExists('barometers');
    }
};
