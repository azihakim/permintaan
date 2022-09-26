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
        Schema::create('unsurcuacalainnyas', function (Blueprint $table) {
            $table->id();
            $table->integer('formulir_id');
            $table->string('deskripsi_unsurcuaca');
            $table->string('lokasi_unsurcuacalainnya');
            $table->date('tgl_dari_unsurcuacalainnya');
            $table->date('tgl_sampai_unsurcuacalainnya');
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
        Schema::dropIfExists('unsurcuacalainnyas');
    }
};
