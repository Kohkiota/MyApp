{{-- <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min/css"> --}}

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
    {{-- <div class="hamberger">
        三
    </div> --}}
</header>


@if (session('flash_message'))
    <div class="flash_message">
        {{ session('flash_message') }}
    </div>
@endif

<div class="content">
    @yield('content')
</div>

<footer class="headfoot">
    @yield('footer')
</footer>

</div>
</body>
</html>
