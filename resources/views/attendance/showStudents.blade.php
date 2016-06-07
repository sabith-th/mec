@extends('layouts.app')

@section('content')
<h2>Attendance Register for {{ $course_id }}</h2>
<hr>
@if (count($students))
  {!! Form::open(['method' => 'POST', 'url' => 'attendances/insert']) !!}
  {!! Form::hidden('course_id', $course_id, ['class'=>'form-control']) !!}
  <table class="table">
    <tr>
    <td class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
      {!! Form::label('start_date', 'From:', ['class'=>'col-md-1 control-label']) !!}
      <div class="col-md-5">
        {!! Form::date('start_date', \Carbon\Carbon::now(), ['class'=>'form-control']) !!}
        @include ('errors.fielderrors', ['field'=>'start_date'])
      </div>
    </td>
    <td class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
      {!! Form::label('end_date', 'To:', ['class'=>'col-md-1 control-label']) !!}
      <div class="col-md-5">
        {!! Form::date('end_date', \Carbon\Carbon::now(), ['class'=>'form-control']) !!}
        @include ('errors.fielderrors', ['field'=>'end_date'])
      </div>
    </td>
    </tr>
  </table>
  </br>
  <table class="table table-bordered">
    <th>Roll no</th>
    <th>Name</th>
    <th>Attended</th>
    <th>Absent</th>
    @foreach ($students as $student)
    <tr>
      <td class="form-group{{ $errors->has('roll_no') ? ' has-error' : '' }}">
          {{ $student->roll_no }}
          {!! Form::hidden('roll_no[]', $student->roll_no, ['class'=>'form-control']) !!}
          @include ('errors.fielderrors', ['field'=>'roll_no'])
      </td>
      <td>
          {{ $student->name }}
      </td>
      <td class="form-group{{ $errors->has('attended') ? ' has-error' : '' }}">
          {!! Form::number('attended[]', 3, ['class'=>'form-control']) !!}
          @include ('errors.fielderrors', ['field'=>'attended'])
      </td>
      <td class="form-group{{ $errors->has('absent') ? ' has-error' : '' }}">
          {!! Form::number('absent[]', 1, ['class'=>'form-control']) !!}
          @include ('errors.fielderrors', ['field'=>'absent'])
      </td>
    </tr>
    @endforeach
  </table>
  <div class="row">
    <div class="form-group">
      <div class="col-md-offset-5 col-md-2">
        {!! Form::submit('Submit', ['class'=>'btn btn-primary form-control']) !!}
      </div>
    </div>
  </div>
  {!! Form::close() !!}
@else
  <h4>Sorry, no students registered for the course in current semester</h4>
@endif

@endsection
