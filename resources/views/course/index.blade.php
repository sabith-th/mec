@extends('layouts.app')

@section('content')
<h2>Course List</h2>
<hr>
<table class="table table-striped table-bordered">
  <th>Code</th>
  <th>Course</th>
  <th>Credits</th>
  @foreach ($courses as $course)
  <tr>
    <td><a href="{{action('EnrollmentsController@courseView', [$course->course_id])}}">{{ $course->course_id }}</a></td>
    <td>{{ $course->course_name }}</td>
    <td>{{ $course->credits }}</td>
  </tr>
  @endforeach
</table>
@stop
