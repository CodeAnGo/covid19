<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('session');
            $table->string('nhs_patient_number')->nullable();
            $table->timestamp('date_of_birth')->nullable();
            $table->boolean('severity')->nullable();
            $table->string('underlying_conditions')->nullable();
            $table->boolean('dependants')->nullable();
            $table->timestamp('public_exposure_last_date')->nullable();
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
        Schema::dropIfExists('records');
    }
}
