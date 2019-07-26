<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('inventory_type_id');
            $table->string('product');
            $table->integer('quantity')->default(0);
            $table->float('value')->default(0.00);
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('inventory_type_id')->references('id')->on('inventory_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
