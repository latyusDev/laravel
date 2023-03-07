@extends('layout.app')
@section('content')
   
    @if (count($students) > 0)
        
<section class="students">
    <h1>Names of students</h1>
    <table>
        <tr>
            <th>first name</th>
            <th>last name</th>
            <th>email</th>
            <th>password</th>
            <th>birth</th>
            <th>delete</th>
            <th>update</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->password}}</td>
            <td>{{$student->birth}}</td>
            <td>
            <form action="/student/delete/{{$student->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>delete</button>
        </form>
       <td> <a href="/student/update/{{$student->id}}/edit"> update</a></td>
        @endforeach
    </table>
    @else
        <p class="error"> No students records</p>
    @endif
    <div class="page">
        {{$students->links()}}
    </div>
</section>
@endsection