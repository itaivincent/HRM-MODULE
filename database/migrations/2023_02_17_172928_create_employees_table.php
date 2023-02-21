<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('nationalId');
            $table->string('employeeNumber');
            $table->date('dob');
            $table->date('startDate');
            $table->char('sex');
            $table->smallInteger('status')->nullable();
            $table->string('reason')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->boolean('isNotified');
            $table->timestamps();


            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
