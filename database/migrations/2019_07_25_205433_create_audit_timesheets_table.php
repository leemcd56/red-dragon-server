<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditTimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_timesheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('audit_user_id');
            $table->unsignedBigInteger('user_id');
            $table->float('total_hours')->default(0.00);
            $table->timestamp('time_in_at');
            $table->timestamp('time_out_at');
            $table->timestamps();

            $table->foreign('audit_user_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audit_timesheets');
    }
}
