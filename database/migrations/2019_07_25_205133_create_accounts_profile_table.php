<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('accounts_id')->unsigned();
            $table->string('vendor_name');
            $table->string('personal_identifier');
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->string('primary_contact_first_name')->nullable();
            $table->string('primary_contact_last_name')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->timestamps();

            $table->foreign('accounts_id')->references('id')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts_profile');
    }
}
