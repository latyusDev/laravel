@extends('layout.app')
@section('content')
    
   <h1>i am
    @isset($age)
        
    {{$age}}
    @endisset

</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aspernatur pariatur
    non aliquid blanditiis quibusdam eos, eligendi facere sunt officiis?</p>

@endsection