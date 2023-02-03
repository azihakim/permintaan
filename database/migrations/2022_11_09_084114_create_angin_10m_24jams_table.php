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
        Schema::create('angin_10m_24jams', function (Blueprint $table) {
            $table->id();
            $table->double('arah_terbanyak')->nullable();
            $table->double('arah')->nullable();
            $table->foreignId('pencatatan2s_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('angin_10m_24jams');
    }
};
