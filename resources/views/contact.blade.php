<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contacts</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="{{url('/css/app.css')}}">
    <!-- Styles -->
</head>
<header>
    <div class="navbar">
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('contact')}}">Contacts</a></li>
        </ul>
    </div>
</header>

<body class="antialiased">
    <H1>hello word</H1>
    <h2>my email is {{$email}}</h2>
</body>

</html>