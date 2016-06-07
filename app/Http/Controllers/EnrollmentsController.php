<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Enrollment;
use App\Http\Requests;
use App\Http\Requests\EnrollmentRequest;

class EnrollmentsController extends Controller
{
    /**
    *Return the list of all enrollments
    */
    public function index()
    {
      $enrollments = Enrollment::all();
      return view('enrollment.index', compact('enrollments'));
    }
    /**
    *Return the details of a particular enrollment
    */
    public function show($id)
    {
      $enrollment = Enrollment::findOrFail($id);
      return view('enrollment.show', compact('enrollment'));
    }
    /**
    *Redirect to enrollment create form
    */
    public function create()
    {
      return view('enrollment.create');
    }
    /**
    *Only executed if validation successfull
    *Store the record of the enrollment in Enrollments table
    *Redirect to enrollments table
    */
    public function store(EnrollmentRequest $request)
    {
      $enrollment = new Enrollment($request->all());
      $enrollment->save();
      return redirect('enrollments');
    }
    /**
    *Redirect to enrollment edit form with form already filled with existing values
    */
    public function edit($id)
    {
      $enrollment = Enrollment::findOrFail($id);
      return view('enrollment.edit', compact('enrollment'));
    }
    /**
    *Update the enrollment record after successfull validation
    */
    public function update($id, EnrollmentRequest $request)
    {
      $enrollment = Enrollment::findOrFail($id);
      $enrollment->update($request->all());
      return redirect('enrollments');
    }
    /**
    *Delete enrollment with the given id
    */
    public function destroy($id, Request $request)
    {
      $enrollment = Enrollment::findOrFail($id);
      $enrollment->delete();
      return redirect('enrollments');
    }
    /**
    *Redirect to a course view where students can be enrolled to
    *the particular course
    */
    public function courseView($course_id)
    {
      $status = ['Ongoing'=>'Ongoing','Completed'=>'Completed'];
      $grades = ['S'=>'S','A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E','F'=>'F','R'=>'R','NA'=>'NA'];
      $types = ['Regular'=>'Regular','Repeat'=>'Repeat'];
      $supplementary = ['No'=>'No','Yes'=>'Yes'];
      return view('enrollment.insert', compact('course_id','status','grades','types','supplementary'));
    }
    /**
    *Enroll students to the particular course, including record of students who
    *took the course in previous semesters
    */
    public function insert(Request $request)
    {
      $A = $request->only(['roll_no','grade','type','supplementary']);
      $count = count($A['roll_no']);
      $i = 0;
      $course_id = $request->course_id;
      $status = $request->status;
      while($i < $count){
        DB::table('enrollments')->insert([
          ['roll_no'=>$A['roll_no'][$i],'course_id'=>$course_id,'status'=>$status,'grade'=>$A['grade'][$i],
        'type'=>$A['type'][$i],'supplementary'=>$A['supplementary'][$i]]
      ]);
      $i = $i + 1;
      }
      return redirect('enrollments');

    }


    public function updateDetails(Request $request)
    {
      $A = $request->only(['roll_no','grade','type','supplementary']);
      $count = count($A['roll_no']);
      $i=0;
      while($i < $count){
        DB::table('enrollments')
                  ->where([['roll_no',$A['roll_no'][$i]],['course_id',$request->course_id],['status','Ongoing']])
                  ->update(['grade'=>$A['grade'][$i],'supplementary'=>$A['supplementary'][$i]]);
        $i = $i + 1;
      }
      return redirect('enrollments');
    }
}
