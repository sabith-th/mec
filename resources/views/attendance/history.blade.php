@extends('layouts.app')

@section('content')
  <h2>Attendance History for {{ $course_id }}</h2>
  <hr>
  <table class="table table-bordered">
    <th>Roll No</th>
    <th>Name</th>
    <th>Attended</th>
    <th>Absent</th>
    @foreach ($students as $student)
      <tr>
        <td>{{ $student->roll_no }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->attended }}</td>
        <td>{{ $student->absent }}</td>
      </tr>
    @endforeach
  </table>
@endsection
