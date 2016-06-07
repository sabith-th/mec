<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Faculties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('faculty_id')->unique();
            $table->string('name');
            $table->string('position');
            $table->string('institute_email');
            $table->integer('phone_no');
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
        Schema::drop('Faculties');
    }
}
