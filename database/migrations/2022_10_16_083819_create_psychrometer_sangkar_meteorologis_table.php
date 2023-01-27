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
        Schema::create('psychrometer_sangkar_meteorologis', function (Blueprint $table) {
            $table->id();
            $table->double('tbk1')->unsigned()->nullable();
            $table->double('tbb1')->unsigned()->nullable();
            $table->double('tbk2')->unsigned()->nullable();
            $table->double('tbb2')->unsigned()->nullable();
            $table->double('tbk3')->unsigned()->nullable();
            $table->double('tbb3')->unsigned()->nullable();
            $table->double('tbk4')->unsigned()->nullable();
            $table->double('tbb4')->unsigned()->nullable();
            $table->double('RH1')->unsigned()->nullable();
            $table->double('RH2')->unsigned()->nullable();
            $table->double('RH3')->unsigned()->nullable();
            $table->double('RH4')->unsigned()->nullable();
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
        Schema::dropIfExists('psychrometer_sangkar_meteorologis');
    }
};
