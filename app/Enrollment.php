<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $guarded = [
      'id'
    ];

    public function studentAttendance()
    {
      return $this->hasMany('App\Attendance','roll_no', 'roll_no');
    }

    public function courseAttendance()
    {
      return $this->hasMany('App\Attendance','course_id','course_id');
    }
}
