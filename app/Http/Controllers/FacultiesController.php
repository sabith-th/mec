<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Http\Requests;

class FacultiesController extends Controller
{
    //
    public function showStudents($faculty_id)
    {
      $students = Faculty::where('faculty_id',$faculty_id)->first()->batch->students()->sortBy('name');
      return view('faculty.showStudents',compact('students'));
    }
}
