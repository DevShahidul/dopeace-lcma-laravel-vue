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
        Schema::create('learning_centers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address', 255);
            $table->string('city', 255);
            $table->string('district', 255);
            $table->string('state', 45)->nullable();
            $table->string('zip_code', 45);
            $table->string('country_code', 3);
            $table->foreignId('ngo_id')->references('id')->on('ngos');
            $table->enum('type', ['coaching', 'pre_school']);
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
        Schema::dropIfExists('learning_centers');
    }
};
