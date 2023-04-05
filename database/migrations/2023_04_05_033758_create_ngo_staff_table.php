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
        Schema::create('ngo_staff', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('email', 255);
            $table->string('phone', 45);
            $table->string('address', 255);
            $table->string('city', 255);
            $table->string('district', 255);
            $table->string('state', 45);
            $table->string('zip_code', 45);
            $table->string('country_code', 3);
            $table->string('facebook_profile', 255);
            $table->string('whatsapp_profile', 255);
            $table->foreignId('ngo_id')->references('id')->on('ngos');
            $table->foreignId('designation_id')->references('id')->on('designations');
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
        Schema::dropIfExists('ngo_staff');
    }
};
