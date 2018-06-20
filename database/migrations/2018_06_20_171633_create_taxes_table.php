<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxes', function (Blueprint $table) {

            $table->increments('id');
            $table->date('date');
            $table->string('vehicle_prefix');
            $table->integer('vehicle_number');
            $table->string('vehicle_type');
            $table->string('chasis');
            $table->string('engine');
            $table->date('rt_date');
            $table->integer('rt_bill');
            $table->integer('rt_fiscal');
            $table->integer('rt_amount');
            $table->date('ret_date');
            $table->integer('ret_bill');
            $table->integer('ret_fiscal');
            $table->integer('ret_amount');
            $table->date('rp_date');
            $table->integer('rp_bill');
            $table->integer('rp_fiscal');
            $table->integer('rp_amount');
            $table->date('insurance_start');
            $table->date('insurance_end');
            $table->string('policy');
            $table->string('insurance_company');
            $table->integer('insured_amount');
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
        Schema::dropIfExists('taxes');
    }
}
