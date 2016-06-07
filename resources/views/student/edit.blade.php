@extends('layouts.app')

@section('content')
  <h2>Edit {{ $student->name }} record</h2>
  <hr>
  {!! Form::model($student, ['method' => 'PATCH', 'action' => ['StudentsController@update', $student->id],'class'=>'form-horizontal','files'=>true]) !!}
    @include ('partials.studentform', ['submitBtnText'=>'Update Student'])
  {!! Form::close() !!}
@endsection
