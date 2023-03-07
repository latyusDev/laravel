<h1>Update Member</h1>

<form action="/edit/{{$data[0]->id}}" method="POST">
    @csrf
    {{-- <input type="hidden" name="id" value="{{$data[0]->id}}"> --}}
    {{-- <input type="text" name="user"  placeholder="enter name">
    <br> --}}
    <input type="password" name="password" placeholder="enter password">
    <br>
    {{-- <input type="text" name="address"  placeholder="enter address">
    <br>
    <input type="email" name="email"  placeholder="enter email">
    <br> --}}
    <button type="submit"> Login</button>
</form>

