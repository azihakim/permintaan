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
        Schema::create('lysimeters', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tanaman')->nullable();
            $table->string('keterangan_fase')->nullable();
            $table->double('jumlah_curah_hujan')->nullable();
            $table->double('siram1')->nullable();
            $table->double('sedot1')->nullable();
            $table->double('siram2')->nullable();
            $table->double('sedot2')->nullable();
            $table->double('siram3')->nullable();
            $table->double('sedot3')->nullable();
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
        Schema::dropIfExists('lysimeters');
    }
};
