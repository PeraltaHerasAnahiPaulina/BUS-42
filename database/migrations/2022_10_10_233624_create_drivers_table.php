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
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('ID',12);
            $table->String('Name_Driver',80);
            $table->string('Phone_Number',30);
            $table->string('Age');
            $table->String('License');
            $table->integer('ID_Center')->unsigned();
            $table->foreign('ID_Center')->references('ID')->on('centers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
};
