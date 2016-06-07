@extends('layouts.app')

@section('content')
  <h1>Welcome {{ Auth::User()->faculty()->name }}</h1>

@endsection
