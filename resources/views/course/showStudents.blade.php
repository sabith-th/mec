@extends('layouts.app')

@section('content')
  <h2>Students currently enrolled for {{ $course_id }}</h2>
  <hr>
  @if (count($students))
    {!! Form::open(['method' => 'POST', 'url' => 'enrollments/updateDetails']) !!}
    {!! Form::hidden('course_id', $course_id, ['class'=>'form-control']) !!}
    <table class="table table-bordered">
      <th>Roll No</th>
      <th>Name</th>
      <th>Grade</th>
      <th>Supplementary</th>
      @foreach ($students as $student)
      <tr>
        <td class="form-group">
            {{ $student->roll_no }}
            {!! Form::hidden('roll_no[]', $student->roll_no, ['class'=>'form-control','required']) !!}
        </td>
        <td class="form-group">
            {{ $student->name }}
        </td>
        <td class="form-group">
            {!! Form::select('grade[]', $grades, $student->grade, ['class'=>'form-control']) !!}
        </td>
        <td class="form-group">
            {!! Form::select('supplementary[]', $supplementary, $student->supplementary, ['class'=>'form-control']) !!}
        </td>
      </tr>
      @endforeach
    </table>
    <div class="row">
      <div class="form-group">
        <div class="col-md-offset-5 col-md-2">
          {!! Form::submit('Update', ['class'=>'btn btn-primary form-control']) !!}
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  @else
    <h4>Sorry, no students registered for the course in the current semester</h4>
  @endif


@endsection
