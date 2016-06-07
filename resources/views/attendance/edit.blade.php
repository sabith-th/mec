@extends('layouts.app')

@section('content')
  <h2>Edit {{ $attendance->roll_no }} record</h2>
  <hr>
  {!! Form::model($attendance, ['method' => 'PATCH', 'action' => ['AttendancesController@update', $attendance->id],'class'=>'form-horizontal']) !!}
    @include ('partials.attendanceform', ['submitBtnText'=>'Update Attendance'])
  {!! Form::close() !!}
@endsection
