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
        Schema::create('psychrometer_sangkar_meteorologis', function (Blueprint $table) {
            $table->id();
            $table->double('tbk1')->nullable();
            $table->double('tbb1')->nullable();
            $table->double('tbk2')->nullable();
            $table->double('tbb2')->nullable();
            $table->double('tbk3')->nullable();
            $table->double('tbb3')->nullable();
            $table->double('tbk4')->nullable();
            $table->double('tbb4')->nullable();
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
        Schema::dropIfExists('psychrometer_sangkar_meteorologis');
    }
};
