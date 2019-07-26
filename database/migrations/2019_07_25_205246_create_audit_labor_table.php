<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditLaborTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_labor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('audit_user_id');
            $table->timestamp('audit_start_at');
            $table->timestamp('audit_end_at');
            $table->float('total_hours')->default(0.00);
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
        Schema::dropIfExists('audit_labor');
    }
}
