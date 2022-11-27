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
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_permintaan');
            $table->string('status_form');
            // $table->string('nama_kegiatan');
            // $table->integer('telepon');
            // $table->string('email');
            $table->string('surat_pernyataan')->nullable();
            $table->string('surat_pengantar')->nullable();
            $table->string('surat_permintaan')->nullable();
            $table->string('surat_perintah')->nullable();
            $table->string('surat_proposal')->nullable();
            $table->string('surat_kerjasama')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->string('respon_data')->nullable();
            $table->string('respon_bill')->nullable();
            $table->string('respon_struk')->nullable();
            $table->longText('respon_desk')->nullable();
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
        Schema::dropIfExists('formulirs');
    }
};
