<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_revenue', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('audit_user_id');
            $table->timestamp('audit_start_at');
            $table->timestamp('audit_end_at');
            $table->float('total_revenue')->default(0.00);
            $table->timestamps();

            $table->foreign('audit_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audit_revenue');
    }
}
