<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Enrollment;
use App\Course;
use App\Http\Requests;

class DetailsController extends Controller
{
    public function show($id)
    {
      $student = Student::findOrFail($id);
      $enrollments = Enrollment::where('roll_no', $student->roll_no)->get();
      $i = 0;
      foreach ($enrollments as $enrollment){
        $course = Course::where('course_id',$enrollment->course_id)->first();
        $enrollments[$i]->course_name = $course->course_name;
        $enrollments[$i]->credits = $course->credits;
        $i = $i + 1;
      }
      return view('details.show', compact('student', 'enrollments'));
    }
}
