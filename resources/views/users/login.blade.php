
<form action="/authenticate" method="POST">
    @csrf
    <div>
        <label>email</label>
        <br>
        <input type="text" name="email">
        <p style="color: red">@error('email')
            {{$message}}
        @enderror</p>
    </div>

    <div>
        <label>password</label>
        <br>
        <input type="text" name="password">
        <p style="color: red" >@error('password')
            {{$message}}
        @enderror</p>
    </div>
   
    <button type="submit">submit</button>

    <p>Don't have an account ? <a href="/register">Sign up</a></p>

</form>