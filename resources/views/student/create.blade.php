@extends('layouts.app')

@section('content')
  <h2>Enter a new student</h2>
  <hr>
  {!! Form::model($student = new \App\Student, ['url'=>'students','class'=>'form-horizontal','files'=>true]) !!}
    @include ('partials.studentform', ['submitBtnText'=>'Add Student'])
  {!! Form::close() !!}
@stop
