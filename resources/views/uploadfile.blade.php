@extends('layout.app')
@section('content')
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
    <input type="file" name="image">
    <br>
    @error('image')
        {{$message}}
    @enderror
    <button type="submit">submit</button>
    </form>
@endsection