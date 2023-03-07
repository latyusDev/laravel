
<form action="/create" method="post">
    @csrf
    <input type="text" name="first_name" placeholder="first name">
    @error('first_name')
        <p class="error">{{$message}}</p>
    @enderror
    <br>
    <input type="text" name="last_name" placeholder="last name">
    @error('last_name')
    <p class="error">{{$message}}</p>

@enderror
    <br>
    <input type="password" name="password" placeholder="password">
    @error('password')
    <p class="error">{{$message}}</p>
@enderror
    <br>
    <input type="email" name="email" placeholder="email">
    @error('email')
    <p class="error">{{$message}}</p>
@enderror

<br>
    <input type="date" name="birth">
    @error('birth')
    <p class="error">{{$message}}</p>
@enderror
    <br>
    <input type="submit" value="submit">
</form>