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
            $table->string('date');
            $table->string('vehicle_prefix');
            $table->integer('vehicle_number');
            $table->string('vehicle_type');
            $table->string('chasis');
            $table->string('engine');
            $table->string('rt_date');
            $table->string('rt_expiry_date')->nullable(true);
            $table->string('rt_bill');
            $table->string('rt_fiscal');
            $table->integer('rt_amount');
            $table->string('ret_date');
            $table->string('ret_expiry_date')->nullable(true);
            $table->string('ret_bill');
            $table->string('ret_fiscal');
            $table->integer('ret_amount');
            $table->string('rp_date');
            $table->string('rp_expiry_date')->nullable(true);
            $table->string('rp_bill');
            $table->string('rp_fiscal');
            $table->integer('rp_amount');
            $table->string('insurance_start');
            $table->string('insurance_end');
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
