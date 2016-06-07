@extends('layouts.app')

@section('content')
<h2>Attendance Record</h2>
<hr>
<table class="table table-striped table-bordered">
  <th>Roll No</th>
  <th>Course Code</th>
  <th>Attended classes</th>
  <th>Absent classes</th>
  <th>From</th>
  <th>To</th>
  @foreach ($attendances as $attendance)
  <tr>
    <td>{{ $attendance->roll_no }}</td>
    <td><a href="{{action('AttendancesController@showStudents', [$attendance->course_id])}}">{{ $attendance->course_id }}</a></td>
    <td>{{ $attendance->attended }}</td>
    <td>{{ $attendance->absent }}</td>
    <td>{{ $attendance->start_date->format('d-m-Y') }}</td>
    <td>{{ $attendance->end_date->format('d-m-Y') }}</td>
  </tr>
  @endforeach
</table>
@stop
