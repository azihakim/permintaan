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
        Schema::create('psychrometer_assmanns', function (Blueprint $table) {
            $table->id();
            $table->double('bb1')->nullable();
            $table->double('bk1')->nullable();
            $table->double('bb2')->nullable();
            $table->double('bk2')->nullable();
            $table->double('bb3')->nullable();
            $table->double('bk3')->nullable();
            $table->double('bb4')->nullable();
            $table->double('bk4')->nullable();
            $table->double('bb5')->nullable();
            $table->double('bk5')->nullable();
            $table->double('bb6')->nullable();
            $table->double('bk6')->nullable();
            $table->double('bb7')->nullable();
            $table->double('bk7')->nullable();
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
        Schema::dropIfExists('psychrometer_assmanns');
    }
};
