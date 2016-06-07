@extends('layouts.app')

@section('content')
  <h2>Edit {{ $enrollment->roll_no }} record of {{ $enrollment->course_id }}</h2>
  <hr>
  {!! Form::model($enrollment, ['method' => 'PATCH', 'action' => ['EnrollmentsController@update', $enrollment->id],'class'=>'form-horizontal']) !!}
    @include ('partials.enrollmentform', ['submitBtnText'=>'Update Enrollment'])
  {!! Form::close() !!}
@endsection
