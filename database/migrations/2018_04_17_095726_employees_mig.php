<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeesMig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->string('company', 100);
            $table->string('email', 100);
            $table->string('phone', 100);
            $table->timestamps();
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('company')->references('name')->on('companies');
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
