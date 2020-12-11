<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
      @auth
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <a href="{{ route('create') }}">post a new link!</a>
      <button type="submit">logout</button>
    </form>
      @else
      <a href="{{ route('login') }}">login</a>
      <a href="{{ route('register') }}">register</a>
      @endauth
      @yield('content')

      <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
