@extends('layouts.app')

@section('content')
<h2>{{ $course->course_id }} : {{ $course->course_name }}</h2>
<h3>{{ $course->credits }} Credits</h3>
@endsection
