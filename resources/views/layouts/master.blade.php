<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   {{--  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
   <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

       <!-- Fonts -->
    <link href=’http://mywebfont.appspot.com/css?font=yunghkio’ rel=’stylesheet’ type=’text/css’>
    <link href=’http://mywebfont.appspot.com/css?font=myanmar3′ rel=’stylesheet’ type=’text/css’>
    <link href=’http://mywebfont.appspot.com/css?font=padauk’ rel=’stylesheet’ type=’text/css’>
    <link href=’http://mywebfont.appspot.com/css?font=parabaik’ rel=’stylesheet’ type=’text/css’>
    <link href=’http://mywebfont.appspot.com/css?font=zawgyi’ rel=’stylesheet’ type=’text/css’>  
    
   

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

</head>
<body>
    <div id="app">
            <header>
                      <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-white fixrd-top scrolling-navbar">
                            <a class="navbar-brand text-dark" href="">Online Learning</a>
                            <button class="navbar-toggler text-info custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link text-dark" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="{{ url('/learning')}}" >Learning Center</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Our Goals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Our Teachers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Our Team</a>
                                    </li>
                                </ul>
                                
                            </div>
                        </nav>

            </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
