@extends('layout')

@section('content')
  @foreach ($people as $person)
    <li>{{ $person }}</li>
  @endforeach
@stop
