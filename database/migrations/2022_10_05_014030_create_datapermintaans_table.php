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
        Schema::create('datapermintaans', function (Blueprint $table) {
            $table->id();
            $table->integer('formulir_id');
            $table->string('jenis_data');
            $table->string('unsurcuacalain')->nullable();
            $table->longText('desk_petir');
            $table->longText('lokasi');
            $table->date('tgl_dari');
            $table->date('tgl_sampai');
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
        Schema::dropIfExists('datapermintaans');
    }
};
