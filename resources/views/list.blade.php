@extends('layout.app')
@section('content')
<h1>list members</h1>

<table border="1">
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>email</th>
        <th>address</th>
        <th>password</th>
        <th>delete</th>
    </tr>
    @foreach ($members as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->user}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->password}}</td>
        <td>
             <a href="/delete/{{$item->id}}">delete</a>
            <a href="/edit/{{$item->id}}">update</a> </td>
    </tr>
        
    @endforeach
</table>
@endsection