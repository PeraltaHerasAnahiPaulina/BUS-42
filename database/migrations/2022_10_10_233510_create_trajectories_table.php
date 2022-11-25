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
        Schema::create('trajectories', function (Blueprint $table) {
            $table->increments('ID',12);
            $table->String('Name_Trayectory',50);
            $table->double('Length',100);
            $table->double('Latitude',100);
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trajectories');
    }
};
