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
        Schema::create('termometer_maksimum_dan_minimums', function (Blueprint $table) {
            $table->id();
            $table->double('max1')->nullable();
            $table->double('reset1')->nullable();
            $table->double('max2')->nullable();
            $table->double('reset2')->nullable();
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
        Schema::dropIfExists('termometer_maksimum_dan_minimums');
    }
};
