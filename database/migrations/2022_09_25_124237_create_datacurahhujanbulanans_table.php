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
        Schema::create('datacurahhujanbulanans', function (Blueprint $table) {
            $table->id();
            $table->integer('formulir_id');
            $table->string('lokasi_curahhujanbulanan');
            $table->date('tgl_dari_curahhujanbulanan');
            $table->date('tgl_sampai_curahhujanbulanan');
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
        Schema::dropIfExists('datacurahhujanbulanans');
    }
};
