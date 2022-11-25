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
        Schema::create('details', function (Blueprint $table) {
            $table->increments('ID',12);
 $table->integer('ID_Bus')->unsigned();
 $table->integer('ID_Truck_stop')->unsigned();
 $table->integer('ID_Trajectory')->unsigned();
 $table->foreign('ID_Bus')->references('ID')->on('buses');
 $table->foreign('ID_Truck_stop')->references('ID')->on('truck_stops');
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
        Schema::dropIfExists('details');
    }
};
