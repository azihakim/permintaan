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
        Schema::create('suhu_tanahs', function (Blueprint $table) {
            $table->id();
            $table->double('berumput1')->nullable();
            $table->double('gundul1')->nullable();
            $table->double('berumput2')->nullable();
            $table->double('gundul2')->nullable();
            $table->double('berumput3')->nullable();
            $table->double('gundul3')->nullable();
            $table->double('berumput4')->nullable();
            $table->double('gundul4')->nullable();
            $table->double('berumput5')->nullable();
            $table->double('gundul5')->nullable();
            $table->double('berumput6')->nullable();
            $table->double('gundul6')->nullable();
            $table->double('berumput7')->nullable();
            $table->double('gundul7')->nullable();
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
        Schema::dropIfExists('suhu_tanahs');
    }
};
