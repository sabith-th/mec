<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->type=='Student'){
          return view('student.dashboard');
        }
        elseif(Auth::user()->type=='Parent'){
          return view('parent.dashboard');
        }
        elseif(Auth::user()->type=='Faculty'){
          return view('faculty.dashboard');
        }
    }
}
