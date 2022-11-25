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
        Schema::create('detail_acounts', function (Blueprint $table) {
            $table->increments('ID',12);
            $table->integer('ID_User')->unsigned();
            $table->integer('ID_Driver')->unsigned();
            $table->foreign('ID_User')->references('ID')->on('users');
            $table->foreign('ID_Driver')->references('ID')->on('drivers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_acounts');
    }
};
