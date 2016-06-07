@extends('layouts.app')

@section('content')
  <h2>Enter a new course</h2>
  <hr>
  {!! Form::model($course = new \App\Course, ['url'=>'courses','class'=>'form-horizontal']) !!}
    @include ('partials.courseform', ['submitBtnText'=>'Add Course'])
  {!! Form::close() !!}
@stop
