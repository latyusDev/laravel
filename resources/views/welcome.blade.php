@extends('layout.app')
@section('content')
<div class="container center">
    <h1>
         
         @auth
        <span class="user2"> {{auth()->user()->name}}</span>, welcome to the world of tech
         @else
         Welcome to the world of tech

         @endauth
         
    </h1>
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore aut, excepturi saepe nesciunt doloribus, provident officiis ex necessitatibus fugiat cupiditate temporibus? Corrupti inventore officia esse explicabo adipisci error ut voluptate.
    </p>


    @auth
    
    @else
    <a href="/register" class="signup">
        <button id="signup">
         Sign Up
    </button>
    @endauth
    
</a>
</div>
@endsection
