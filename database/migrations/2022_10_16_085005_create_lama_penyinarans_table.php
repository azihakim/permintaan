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
        Schema::create('lama_penyinarans', function (Blueprint $table) {
            $table->id();
            $table->double('06-07')->nullable();
            $table->double('07-08')->nullable();
            $table->double('08-09')->nullable();
            $table->double('09-10')->nullable();
            $table->double('10-11')->nullable();
            $table->double('11-12')->nullable();
            $table->double('12-13')->nullable();
            $table->double('13-14')->nullable();
            $table->double('14-15')->nullable();
            $table->double('15-16')->nullable();
            $table->double('16-17')->nullable();
            $table->double('17-18')->nullable();
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
        Schema::dropIfExists('lama_penyinarans');
    }
};
