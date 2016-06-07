<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
        *Courses table where all the courses are listed.
        *Courses need to be added for each semester
        *
        */
        Schema::create('Courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_id');
            $table->string('course_name');
            $table->string('semester');
            $table->integer('credits');
            $table->string('faculty');
            $table->timestamps();
            $table->unique(['course_id', 'semester']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Courses');
    }
}
