@extends('layouts.app')

@section('content')

    <h1>Welcome, Admin - {{ auth()->user()->first_name }}</h1>

@endsection
