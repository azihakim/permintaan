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
        Schema::create('datapetirs', function (Blueprint $table) {
            $table->id();
            $table->integer('formulir_id');
            $table->string('lokasi_petir');
            $table->string('latitude_petir');
            $table->string('longitude_petir');
            $table->date('tgl_dari_petir');
            $table->date('tgl_sampai_petir');
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
        Schema::dropIfExists('datapetirs');
    }
};