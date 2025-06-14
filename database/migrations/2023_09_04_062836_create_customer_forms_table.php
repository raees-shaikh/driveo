<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_forms', function (Blueprint $table) {
            $table->id();
            $table->string('what_brings_you_here');
            $table->string('name');
            $table->string('i_am_a');
            $table->string('company_name');
            $table->string('job_title');
            $table->string('vehicle_category');
            $table->string('requirement_date');
            $table->integer('quantity_of_vehicles');
            $table->string('city');
            $table->string('email');
            $table->string('phone_no');
            $table->string('your_requirements');
            $table->string('how_did_you_get_to_know_about_driveo');
            $table->string('ip_address');
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
        Schema::dropIfExists('customer_forms');
    }
}
