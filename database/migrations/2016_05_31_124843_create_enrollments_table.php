<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roll_no');
            $table->string('course_id');
            $table->string('status');         //Current or past course
            $table->string('grade');
            $table->string('type');          //Regular or repeat
            $table->string('supplementary'); //Whether took supplementary exam
            $table->timestamps();
            $table->foreign('roll_no')
                  ->references('roll_no')->on('Students')->onDelete('cascade')->OnUpdate('cascade');
            $table->foreign('course_id')
                  ->references('course_id')->on('Courses')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['roll_no','course_id','status']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Enrollments');
    }
}
