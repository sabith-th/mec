@extends('layouts.app')

@section('content')
  <h2>Edit {{ $course->name }} record</h2>
  <hr>
  {!! Form::model($course, ['method' => 'PATCH', 'action' => ['CoursesController@update', $course->id],'class'=>'form-horizontal']) !!}
    @include ('partials.courseform', ['submitBtnText'=>'Update Course'])
  {!! Form::close() !!}
@endsection
