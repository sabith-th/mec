<?php

namespace App\Http\Controllers;

use Input;
use DB;
use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests;
use App\Http\Requests\StudentRequest;


class StudentsController extends Controller
{
    /**
    *Return the list of all students
    */
    public function index()
    {
      $students = Student::all();
      return view('student.index', compact('students'));
    }
    /**
    *Return the details of a particular student
    */
    public function show($id)
    {
      $student = Student::findOrFail($id);
      return view('student.show', compact('student'));
    }
    /**
    *Redirect to student create form
    */
    public function create()
    {
      return view('student.create');
    }
    /**
    *Only executed if validation successfull
    *Store the record of the student in Students table
    *Redirect to students table
    */
    public function store(StudentRequest $request)
    {
      $student = new Student($request->all());
      $student->save();
      $this->upload($request);
      return redirect('students');
    }
    /**
    *Redirect to student edit form with form already filled with existing values
    */
    public function edit($id)
    {
      $student = Student::findOrFail($id);
      return view('student.edit', compact('student'));
    }
    /**
    *Update the student record after successfull validation
    */
    public function update($id, StudentRequest $request)
    {
      $student = Student::findOrFail($id);
      $student->update($request->all());
      $this->upload($request);
      return redirect('students');
    }
    /**
    *Delete student with the given id
    */
    public function destroy($id, Request $request)
    {
      $student = Student::findOrFail($id);
      $student->delete();
      return redirect('students');
    }

    private function upload(StudentRequest $request)
    {
        $extension = $request->file('photo_url')->getClientOriginalExtension();
        $imageName = $request->roll_no.'.'.$extension;
        $path = base_path() . '/public/uploads/images/';
        $request->file('photo_url')->move($path , $imageName);
        DB::table('students')
            ->where('roll_no', $request->roll_no)
            ->update(['photo_url' => $imageName]);
    }
}
