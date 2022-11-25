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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('ID');
            $table->String('Name',80);
            $table->String('Img_User',100);
            $table->decimal('Matricula',30);
            $table->integer('ID_Cuatrimestre')->unsigned();
            $table->integer('ID_Direction')->unsigned();
            $table->integer('ID_Trajectory')->unsigned();
            $table->foreign('ID_Cuatrimestre')->references('ID')->on('cuatrimestres');
            $table->foreign('ID_Direction')->references('ID')->on('directions');
            $table->foreign('ID_Trajectory')->references('ID')->on('trajectories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
