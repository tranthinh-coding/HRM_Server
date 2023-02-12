<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('job_information', function (Blueprint $table) {
          $table->id();
          $table->string('employee_id')->nullable();
          $table->string('job_title')->nullable();
          $table->string('department')->nullable();
          $table->string('employment')->nullable();
          $table->string('start_date')->nullable();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_information');
    }
};
