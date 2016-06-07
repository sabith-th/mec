@extends('layouts.app')

@section('content')
  <h1>Welcome {{ Auth::user()->student()->name }} 's Parent</h1>
@endsection
