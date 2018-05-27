<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicalinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(/**
         * @param Blueprint $table
         */
            'vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('servicing_date');
            $table->string('vehical_prefix');
            $table->integer('vehical_number');
            $table->string('type');
            $table->integer('worked_hours');
            $table->integer('mobil');
            $table->integer('transmission_oil');
            $table->integer('hydrolic');
            $table->string('mobil_filter');
            $table->string('diesel_filter')->nullable();
            $table->string('hydrolic_filter');
            $table->string('air_filter');
            $table->string('pilot_filter');
            $table->string('transmission_filter');
            $table->string('water_safety');
            $table->string('breather');
            $table->integer('tyres');
            $table->integer('tubes');
            $table->string('spare_parts');
            $table->string('engine_repair');
            $table->string('total_cost');
            $table->string('remarks');
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
