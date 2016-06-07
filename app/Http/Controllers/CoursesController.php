<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;
use App\Http\Requests\CourseRequest;

class CoursesController extends Controller
{
  /**
  *Return the list of all courses
  */
  public function index()
  {
    $courses = Course::all();
    return view('course.index', compact('courses'));
  }
  /**
  *Return the details of a particular course
  */
  public function show($id)
  {
    $course = Course::findOrFail($id);
    return view('course.show', compact('course'));
  }
  /**
  *Redirect to course create form
  */
  public function create()
  {
    return view('course.create');
  }
  /**
  *Only executed if validation successfull
  *Store the record of the course in Courses table
  *Redirect to courses table
  */
  public function store(CourseRequest $request)
  {
    $course = new Course($request->all());
    $course->save();
    return redirect('courses');
  }
  /**
  *Redirect to course edit form with form already filled with existing values
  */
  public function edit($id)
  {
    $course = Course::findOrFail($id);
    return view('course.edit', compact('course'));
  }
  /**
  *Update the course record after successfull validation
  */
  public function update($id, CourseRequest $request)
  {
    $course = Course::findOrFail($id);
    $course->update($request->all());
    return redirect('courses');
  }
  /**
  *Delete course with the given id
  */
  public function destroy($id, Request $request)
  {
    $course = Course::findOrFail($id);
    $course->delete();
    return redirect('courses');
  }
  /**
  *Show the list of students enrolled for the course in current semester
  */
  public function showStudents($course_id)
  {
    $grades = ['S'=>'S','A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E','F'=>'F','R'=>'R','NA'=>'NA'];
    $types = ['Regular'=>'Regular','Repeat'=>'Repeat'];
    $supplementary = ['No'=>'No','Yes'=>'Yes'];
    $students = DB::table('enrollments')
                        ->select('enrollments.roll_no as roll_no','name','grade','type','supplementary')
                        ->leftJoin('students','enrollments.roll_no','=','students.roll_no')
                        ->where([['course_id', $course_id],['status','Ongoing']])
                        ->orderBy('name')
                        ->get();
    //return $students;
    return view('course.showStudents',compact('students','grades','types','supplementary','course_id'));
  }
}
