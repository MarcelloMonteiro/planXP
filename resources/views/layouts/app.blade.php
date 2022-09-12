<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img class="imgLogo" src="{{asset('img/logo.png')}}">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navMenu">
                        <div class="teste">
                            <img class="img1" src="{{asset('img/1.png')}}">
                            <img class="img2" src="{{asset('img/2.png')}}">
                            <img class="img3" src="{{asset('img/3.png')}}">
                            <img class="img4" src="{{asset('img/4.png')}}">
                            <img class="img5" src="{{asset('img/5.png')}}">
                            <img class="linha" src="{{asset('img/linha.png')}}">
                        </div>
                        @foreach ($navbars as $navbarItem)
                            <div class="menu">
                                <a class="menuLink" href="{{ route($navbarItem->route) }}">/{{ $navbarItem->name }}</a>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
  
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>