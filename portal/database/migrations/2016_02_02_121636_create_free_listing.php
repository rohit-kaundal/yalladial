<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreeListing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name',255);
            $table->string('contact_person',255);
            $table->string('city',255);
            $table->string('pincode',7);
            $table->string('email');
            $table->string('landline',20);
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
        Schema::drop('free_listings');
    }
}
