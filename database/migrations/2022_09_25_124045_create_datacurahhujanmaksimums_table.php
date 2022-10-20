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
        Schema::create('datacurahhujanmaksimums', function (Blueprint $table) {
            $table->id();
            $table->integer('formulir_id');
            $table->string('lokasi_curahhujanmaksimum');
            $table->date('tgl_dari_curahhujanmaksimum');
            $table->date('tgl_sampai_curahhujanmaksimum');
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
        Schema::dropIfExists('datacurahhujanmaksimums');
    }
};