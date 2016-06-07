<?php

namespace App;
use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type','username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function student()
    {
      $roll_no = Auth::user()->username;
      $student = Student::where('roll_no', $roll_no)->first();
      return $student;
    }

    public function faculty()
    {
      $faculty_id = $this->username;
      $faculty = Faculty::where('faculty_id', $faculty_id)->first();
      return $faculty;
    }
}
