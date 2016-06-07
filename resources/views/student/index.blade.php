@extends('layouts.app')

@section('content')
<h2>Student List</h2>
<hr>
<table class="table table-striped table-bordered">
  <th>Roll No</th>
  <th>Name</th>
  <th>Stream</th>
  @foreach ($students as $student)
  <tr>
    <td>{{ $student->roll_no }}</td>
    <td>{{ $student->name }}</td>
    <td>{{ $student->stream }}</td>
  </tr>
  @endforeach
</table>
@stop
