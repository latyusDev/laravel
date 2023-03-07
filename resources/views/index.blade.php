<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href= {{asset('css/app.css')}}>
{{-- <link rel="stylesheet" href="/css/app.css"> --}}
</head>
<body>
    <h1>hello world</h1>
    <form action="/subscribe" method="post">
        @csrf
        <input type="email" name="email" id="email">
        <button type="submit">submit</button>
    </form>
    <img src="/img/4_lab3.PNG" alt="">
    <button class="btn">hello</button>
</body>
<script src="js/app.js"></script>
</html>