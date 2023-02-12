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
      Schema::create('employee_information', function (Blueprint $table) {
          $table->id();
          $table->string('first_name')->nullable();
          $table->string('last_name')->nullable();
          $table->string('address')->nullable();
          $table->string('address2')->nullable();
          $table->string('city')->nullable();
          $table->string('phone')->nullable();
          $table->string('birthday')->nullable();
          $table->string('email')->nullable();
          $table->string('social_security_number')->nullable();
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
        Schema::dropIfExists('employee_information');
    }
};
