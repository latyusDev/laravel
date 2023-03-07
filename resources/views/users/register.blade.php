
<form action="/store" method="post">
    @csrf
    <div>
        <label>name</label>
        <br>
        <input type="text" name="name">
        <p style="color: red">@error('name')
            {{$message}}
        @enderror</p>
    </div>
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
        <p style="color: red">@error('password')
            {{$message}}
        @enderror</p>
    </div>

    <div>
        <label>confirm password</label>
        <br>
        <input type="text" name="password_confirmation">
        <p style="color: red">@error('password_confirmation')
            {{$message}}
        @enderror</p>
    </div>
    <button type="submit">submit</button>
    <p>already have an account ? <a href="/login">Login</a></p>
</form>