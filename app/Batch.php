<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $guarded = ['id'];

    public function students()
    {
      $students = Student::where([['admission_year',$this->admission_year],['stream',$this->stream]])->get();
      return $students;
    }

    public function FA()
    {
      return $this->belongsTo('App\Faculty', 'faculty_id', 'faculty_id');
    }
}
