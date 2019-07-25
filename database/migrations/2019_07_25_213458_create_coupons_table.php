<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('required_items')->nullable();
            $table->enum('discount_type', ['CURRENCY', 'PERCENTAGE'])->default('CURRENCY');
            $table->float('discount_currency')->default(0.00);
            $table->integer('discount_percentage')->default(0);
            $table->boolean('is_active')->default(0);
            $table->boolean('is_employee_discount')->default(0);
            $table->boolean('is_manager_locked')->default(0);
            $table->boolean('is_permanent')->default(0);
            $table->timestamp('expires_at');
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
        Schema::dropIfExists('coupons');
    }
}
