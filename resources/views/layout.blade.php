<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('styles')
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .header{
            width: 100%;
            height: 80px;
            background-color: gray;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            a {
                text-decoration: none;
                color: white;
                margin: 10px;
            }
        }
        .content{
            height: 85vh;
        }
        .footer{
            width: 100%;
            height: 80px;
            background-color: gray;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('services') }}">Services</a>
        <a href="{{ route('careers') }}">Careers</a>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('privacy') }}">privacy-policy</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer"></div>
</body>
</html>