@extends('layouts.app')

@section('content')
<h2>Enrollment List</h2>
<hr>
<table class="table table-striped table-bordered">
  <th>Roll No</th>
  <th>Course Code</th>
  <th>Status</th>
  @foreach ($enrollments as $enrollment)
  <tr>
    <td>{{ $enrollment->roll_no }}</td>
    <td>{{ $enrollment->course_id }}</td>
    <td>{{ $enrollment->status }}</td>
  </tr>
  @endforeach
</table>
@stop
