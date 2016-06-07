@extends('layouts.app')

@section('content')
  <h2>Enroll a student to course</h2>
  <hr>
  {!! Form::model($enrollment = new \App\Enrollment, ['url'=>'enrollments','class'=>'form-horizontal']) !!}
    @include ('partials.enrollmentform', ['submitBtnText'=>'Add Enrolment'])
  {!! Form::close() !!}
@stop
