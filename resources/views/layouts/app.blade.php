<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>
    <div id="app">
      <nav class="nav has-shadow">
        <div class="container">
          <div class="nav-left">
            <a class="nav-item" href="{{route('home')}}">
              <img src="{{asset('images/devmarketer-logo.png')}}" alt="Devmarketer Logo">
            </a>
            <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
          </div>


          <div class="nav-right">
            @if (Auth::guest())
              <a href="#" class="nav-item is-tab">Login</a>
              <a href="#" class="nav-item is-tab">Register</a>
            @else
              <button class="dropdown nav-item is-tab">
                Hey Alex <span class="icon"><i class="fa fa-caret-down"></i></span>

                <ul class="dropdown-menu">
                  <li><a href="#">Profile</a> </li>
                  <li><a href="#">Notifications</a> </li>
                  <li><a href="#">Settings</a> </li>
                  <li class="seperator"> </li>
                  <li><a href="#">Logout</a> </li>
                </ul>
              </button>
            @endif
          </div>

        </div>

      </nav>
      @yield('content')
    </div>
</body>
</html>
