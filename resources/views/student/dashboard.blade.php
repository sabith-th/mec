@extends('layouts.app')

@section('content')
<h1>Welcome {{ Auth::user()->student()->name }} </h1>
@endsection()
