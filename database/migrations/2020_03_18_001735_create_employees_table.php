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
            $table->bigIncrements('eid');
			$table->string('name_prefix');
			$table->string('first_name');
			$table->string('middle_initial');
			$table->string('last_name');
			$table->string('gender');
			$table->string('email');
			$table->string('father_name');
			$table->string('mother_name');
			$table->string('mother_maiden_name');
			$table->string('date_of_birth');
			$table->string('joining_date');
			$table->string('salary');
			$table->string('ssn');
			$table->string('phone');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
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
        Schema::dropIfExists('employees');
    }
}
