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
        Schema::create('open_pans', function (Blueprint $table) {
            $table->id();
            $table->double('h')->unsigned()->nullable();
            $table->double('ev')->unsigned()->nullable();
            $table->double('ch')->unsigned()->nullable();
            $table->double('t')->unsigned()->nullable();
            $table->double('max')->unsigned()->nullable();
            $table->double('min')->unsigned()->nullable();
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
        Schema::dropIfExists('open_pans');
    }
};
