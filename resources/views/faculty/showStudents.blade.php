@extends('layouts.app')

@section('content')
  <h2>List of students</h2>
  <hr>
  <table class="table table-bordered">
    <th>Roll No</th>
    <th>Name</th>
    @foreach ($students as $student)
      <tr>
        <td>{{ $student->roll_no }}</td>
        <td>{{ $student->name }}</td>
      </tr>
    @endforeach
  </table>
@endsection()
