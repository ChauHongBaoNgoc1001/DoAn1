<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->nullable();
            $table->string('full_name');
            $table->date('dob');
            $table->string('place_of_birth');
            $table->string('gender');
            $table->string('ethnicity');
            $table->string('phone_number');
            $table->string('student_batch');
            $table->string('major');
            $table->string('registration_date');
            $table->string('level');
            $table->text('note')->nullable();
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
        Schema::dropIfExists('registrations');
    }

};
