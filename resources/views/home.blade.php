<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HomePage</title>
    <link rel="stylesheet" href="{{url('/css/app.css')}}">
    <!-- Styles -->
</head>

<body class="antialiased">
    <header>
        <div class="navbar">
            <ul>
                <li><a href="{{url('home')}}">Home</a></li>
                <li><a href="{{url('contact')}}">Contacts</a></li>
            </ul>
        </div>
    </header>
    <H1>hello word</H1>
    <h2>my name is {{$name}} {{$surname}}</h2>
</body>

</html>