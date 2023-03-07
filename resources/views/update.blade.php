@extends('layout.app')
@section('content')

<form action="/student/update/{{$student->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="first_name" value="{{$student->first_name}}" placeholder="first name" />
    @error('first_name')
        <p class="error">{{$message}}</p>
    @enderror
    <br>
    <input type="text" name="last_name" value="{{$student->last_name}}" placeholder="last name" />
    @error('last_name')
    <p class="error">{{$message}}</p>

@enderror
    <br>
    <input type="password" name="password" value="{{$student->password}}" placeholder="password" />
    @error('password')
    <p class="error">{{$message}}</p>
@enderror
    <br>
    <input type="email" name="email" value="{{$student->email}}" placeholder="email" />
    @error('email')
    <p class="error">{{$message}}</p>
@enderror


<br>
    <input type="date" value="{{$student->birth}}" name="birth" />
    @error('birth')
    <p class="error">{{$message}}</p>
@enderror
    <br>
    <input type="submit" value="submit">
</form>
@endsection