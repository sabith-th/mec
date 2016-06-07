<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use Illuminate\Http\Request;
use App\Attendance;
use App\Enrollment;
use App\Student;
use App\Http\Requests;
use App\Http\Requests\AttendanceRequest;

class AttendancesController extends Controller
{
    /**
    *Return the list of all attendances
    */
    public function index()
    {
      $attendances = Attendance::all();
      return view('attendance.index', compact('attendances'));
    }
    /**
    *Return the details of a particular attendance
    */
    public function show($id)
    {
      $attendance = Attendance::findOrFail($id);
      return view('attendance.show', compact('attendance'));
    }
    /**
    *Redirect to attendance create form
    */
    public function create()
    {
      return view('attendance.create');
    }
    /**
    *Only executed if validation successfull
    *Store the record of the attendance in Attendances table
    *Redirect to attendances table
    */
    public function store(AttendanceRequest $request)
    {
      $attendance = new Attendance($request->all());
      $attendance->save();
      // return $request;
      return redirect('attendances');
    }
    /**
    *Redirect to attendance edit form with form already filled with existing values
    */
    public function edit($id)
    {
      $attendance = Attendance::findOrFail($id);
      return view('attendance.edit', compact('attendance'));
    }
    /**
    *Update the attendance record after successfull validation
    */
    public function update($id, AttendanceRequest $request)
    {
      $attendance = Attendance::findOrFail($id);
      $attendance->update($request->all());
      return redirect('attendances');
    }
    /**
    *Delete attendance with the given id
    */
    public function destroy($id, Request $request)
    {
      $attendance = Attendance::findOrFail($id);
      $attendance->delete();
      return redirect('attendances');
    }
    /**
    *Redirect to a view where attendances can be recorded for all the students
    *registerd in the course.
    */
    public function showStudents($course_id)
    {
      $students = DB::table('enrollments')
                          ->select('enrollments.roll_no','name')
                          ->leftJoin('students','enrollments.roll_no','=','students.roll_no')
                          ->where([['course_id', $course_id],['status','Ongoing']])
                          ->orderBy('name')
                          ->get();
      return view('attendance.showStudents',compact('students','course_id'));
    }
    /**
    *Insert the attendance for all the students in the course for the given
    *time period
    */
    public function insert(Request $request)
    {
      /**
      *Do validation using Javascript
      */
      $A =  $request->only(['roll_no','attended','absent']);
      $count = count($A['roll_no']);
      $i=0;
      while ($i<$count) {
        $attendance = new Attendance;
        $attendance->course_id = $request->course_id;
        $attendance->start_date = $request->start_date;
        $attendance->end_date = $request->end_date;
        $attendance->roll_no = $A['roll_no'][$i];
        $attendance->attended = $A['attended'][$i];
        $attendance->absent = $A['absent'][$i];
        $attendance->save();
        $i = $i + 1;
      }
      return redirect('attendances');
    }
    /**
    *Retrieve the total of attended and absent classes for all students
    *registered for the particular course
    */
    public function history($course_id)
    {
      $students = DB::table('attendances')
                              ->select('attendances.roll_no','name', DB::raw('SUM(attended) as attended, SUM(absent) as absent'))
                              ->leftJoin('students','attendances.roll_no','=','students.roll_no')
                              ->where('course_id', $course_id)
                              ->groupBy('attendances.roll_no')
                              ->orderBy('name')
                              ->get();
      return view('attendance.history', compact('students','course_id'));
    }
}
