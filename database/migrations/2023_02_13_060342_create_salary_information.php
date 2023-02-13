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
        Schema::create('salary_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('base_salary')->nullable();
            $table->unsignedBigInteger('bonus')->nullable();
            $table->unsignedBigInteger('deduction')
                  ->nullable()
                  ->comment('Any deductions that should be taken from the base salary');
            $table->unsignedBigInteger('total_salary')
              ->nullable()
              ->comment('The final calculated salary after adding bonuses and subtracting deductions');
            $table->dateTime('date')->nullable();
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
        Schema::dropIfExists('salary_information');
    }
};
