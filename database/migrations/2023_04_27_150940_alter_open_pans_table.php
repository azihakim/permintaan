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
        Schema::table('open_pans', function (Blueprint $table) {
            //
            $table->double('reset')->unsigned()->nullable()->after('h');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('open_pans', function (Blueprint $table) {
            $table->dropColumn('reset');
        });
    }
};
