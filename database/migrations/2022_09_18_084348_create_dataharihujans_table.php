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
        Schema::create('dataharihujans', function (Blueprint $table) {
            $table->id();
            $table->integer('formulir_id');
            $table->string('lokasi_harihujan');
            $table->date('tgl_dari_harihujan');
            $table->date('tgl_sampai_harihujan');
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
        Schema::dropIfExists('dataharihujans');
    }
};
