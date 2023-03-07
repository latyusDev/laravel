@extends('layout.app')
@section('content')
<form method="POST" action="/add">
   @csrf
<input type="text" name="user" placeholder="enter name">
<br>
<input type="password" name="password" placeholder="enter password">
<br>
<input type="text" name="address" placeholder="enter address">
<br>
<input type="email" name="email" placeholder="enter email">
<br>
<button type="submit"> Login</button>
</form>
@endsection
