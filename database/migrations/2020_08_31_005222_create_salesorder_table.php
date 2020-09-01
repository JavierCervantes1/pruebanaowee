<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesorder', function (Blueprint $table) {
            $table->Increments('SalesOrderId');
            $table->dateTime('OrderDate');
            $table->tinyInteger('Status');
            $table->integer('customer_CustomerId')->unsigned();
            $table->foreign('customer_CustomerId')->references('CustomerId')->on('customer');
            $table->integer('address_AddressId')->unsigned();
            $table->foreign('address_AddressId')->references('AddressId')->on('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salesorder');
    }
}
