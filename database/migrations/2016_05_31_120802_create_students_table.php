<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
        *Students table where details of student are stored
        *
        */
        Schema::create('Students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roll_no')->unique();
            $table->string('name');
            $table->integer('admission_year');
            $table->integer('current_semester');
            $table->string('stream');
            $table->text('address');
            $table->date('dob');
            $table->string('email');
            $table->string('institute_email');
            $table->integer('mobile');
            $table->string('facebook_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->integer('parent_phone');
            $table->string('local_guardian');
            $table->integer('guardian_phone');
            $table->string('photo_url');
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
        Schema::drop('Students');
    }
}
