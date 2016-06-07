@extends('layouts.app')

@section('content')
  <h2>Enter a new attendance record</h2>
  <hr>
  {!! Form::model($attendance = new \App\Attendance, ['url'=>'attendances','class'=>'form-horizontal']) !!}
    @include ('partials.attendanceform', ['submitBtnText'=>'Add Attendance'])
  {!! Form::close() !!}
@stop
