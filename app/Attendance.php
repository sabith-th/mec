<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Attendance extends Model
{
    protected $guarded = ['id'];

    protected $dates = ['start_date', 'end_date'];

    public function studentList()
    {
      $students = Enrollment::where('course_id', $this->course_id)->get();
      return $students;
    }
}
