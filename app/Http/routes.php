<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('students/details/{id}', 'DetailsController@show');
Route::resource('students', 'StudentsController');
Route::get('enrollments/courses/{id}', 'EnrollmentsController@courseView');
Route::post('enrollments/insert', 'EnrollmentsController@insert');
Route::post('enrollments/updateDetails', 'EnrollmentsController@updateDetails');
Route::resource('enrollments', 'EnrollmentsController');
Route::get('courses/students/{id}', 'CoursesController@showStudents');
Route::resource('courses', 'CoursesController');
Route::get('attendances/courses/{id}', 'AttendancesController@showStudents');
Route::get('attendances/history/{id}', 'AttendancesController@history');
Route::post('attendances/insert', 'AttendancesController@insert');
Route::resource('attendances', 'AttendancesController');
Route::get('faculties/students/{id}', 'FacultiesController@showStudents');
Route::get('/home', 'HomeController@index');
