@extends('layouts.app')
@section('content')
<h2>{{ $student->name }}</h2>
<hr>
<table class="table" style="border-color:white">
  <tr><td>Roll No: </td><td>{{ $student->roll_no }}</td></tr>
  <tr><td>Stream: </td><td>{{ $student->stream }}</td></tr>
  <tr><td>Admission Year: </td><td>{{ $student->admission_year }}</td></tr>
  <tr><td>Address: </td><td>{{ $student->address }}</td></tr>
  <table class="table table-bordered table-striped">
    <caption>Enrolled Courses</caption>
    <th>Code</th>
    <th>Course</th>
    <th>Credits</th>
    <th>Status</th>
    <th>Grade</th>
    <th>Type</th>
    @foreach ($enrollments as $course)
      <tr>
        <td>{{ $course->course_id }}</td>
        <td>{{ $course->course_name }}</td>
        <td>{{ $course->credits }}</td>
        <td>{{ $course->status }}</td>
        <td>{{ $course->grade }}</td>
        <td>{{ $course->type }}</td>
      </tr>
    @endforeach
  </table>
</table>
@endsection
