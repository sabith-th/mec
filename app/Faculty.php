<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $guarder = ['id'];

    public function batch()
    {
      return $this->hasOne('App\Batch', 'faculty_id', 'faculty_id');
    }

    public function courses()
    {
      $courses = Course::where('faculty', $this->faculty_id)->get();
      return $courses;
    }
}
