<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav">
                <h1>latyusDev</h1>
                <div class="user">
                    @auth
                    <h2>{{ auth()->user()->name}}</h2>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>

                    @else
                    <a href="/login">login</a>

                    @endauth
                </div>
            </nav>
        </div>
    </header>
   @yield('content')

   <footer class="footer">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

   </footer>
   <x-flash/>
</body>
<script>
    const btn = document.querySelector('.cancel')
    const flash = document.querySelector('.flash')
    btn.addEventListener('click', ()=>{
        flash.classList.add('hidden')
    }) 

    const removeMessage = () =>{
        flash.classList.add('hidden')
    }

    setTimeout(()=>removeMessage(), 2000);
   
</script>
</html>