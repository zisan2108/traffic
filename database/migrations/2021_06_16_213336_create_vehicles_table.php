<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vname');
            $table->string('voname');
            $table->string('voaddress');
            $table->string('vcontract')->unique();
            $table->string('icompany');
            $table->date('lisssu_date');
            $table->string('vtype');
            $table->string('pervehicle');
            $table->date('Validity');
            $table->string('bfitness');
            $table->string('rpremit');
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
        Schema::dropIfExists('vehicles');
    }
}
