<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);
            $table->string('last_name', 255)->nullable();
            $table->string('fathers_name', 255);
            $table->string('mothers_name', 255);
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('email', 255)->nullable();
            $table->string('phone', 45);
            $table->string('address', 255);
            $table->string('city', 255);
            $table->string('district', 255);
            $table->string('state', 45);
            $table->string('zip_code', 45);
            $table->string('country_code', 3);
            $table->string('facebook_profile', 255)->nullable();
            $table->string('whatsapp_profile', 255)->nullable();
            $table->foreignId('learning_center_id')->references('id')->on('learning_centers');
            $table->string('learning_center_type', 45);
            $table->boolean('is_still_in_learning_center')->default('1')->comment('0=false and  1=true');
            $table->dateTime('enroll_date');
            $table->dateTime('graduation_date');
            $table->string('institute_name')->nullable();
            $table->string('city_of_institute')->nullable();
            $table->string('class', 45)->nullable();
            $table->string('class_roll', 45);
            $table->string('department', 255)->nullable();
            $table->foreignId('session_id')->references('id')->on('sessions');
            $table->softDeletes();
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
        Schema::dropIfExists('students');
    }
};
