@extends('layout.app')
@section('content')
    <h1> basic route </h1>

    @if (isset($name) && isset($age))
        <p>my name is {{$name}}  and i am {{$age}}</p>
    @endif
     
  
@endsection