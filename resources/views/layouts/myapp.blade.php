<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/myapp.styles.css') }}">
</head>
<body>
    <div>
    <header class="headfoot">
        <a href="{{ route('myapp') }}" class="logo" >
            M
        </a>
        <div class="title">
            @yield('title')
        </div>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer class="headfoot">
        @yield('footer')
    </footer>
    </div>
</body>
</html>
