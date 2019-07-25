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
            $table->integer('audit_user_id');
            $table->integer('user_id');
            $table->float('total_hours')->default(0.00);
            $table->timestamp('time_in_at');
            $table->timestamp('time_out_at');
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
        Schema::dropIfExists('timesheet');
    }
}
