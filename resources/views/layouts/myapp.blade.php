{{-- <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min/css"> --}}

<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/myapp.styles.css') }}">
</head>

<body>
<div>
    <div class="fixed">
        <header class="headfoot">
            <a href="{{ route('myapp') }}" class="logo" >
                M
            </a>
            <div class="title">
                @yield('title')
            </div>
            <div class="hamberger">
                三
            </div>
        </header>

        @if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
        @endif

        <div class="navi">
            <a href="{{  route('myapp') }}" class="navibtn nav1">home</a>
            <a href="{{  route('myapp/add') }}" class="navibtn nav2">new memo</a>
            <a href="{{  route('myapp/list') }}" class="navibtn nav3">memo list</a>
            <a href="{{  route('myapp') }}" class="navibtn nav4">memo</a>
            <a href="{{  route('myapp') }}" class="navibtn nav5">demo</a>
        </div>
    </div>

<div class="sideContent">
    <div class="content">
        @yield('content')
    </div>
    <div class="side">
        <a href="{{  route('myapp') }}" class="sidebtn">home</a>
        <a href="{{  route('myapp/add') }}" class="sidebtn">new memo</a>
        <a href="{{  route('myapp/list') }}" class="sidebtn">memo list</a>
        <a href="{{  route('myapp') }}" class="sidebtn">memo</a>
        <a href="{{  route('myapp') }}" class="sidebtn">demo</a>
        <a href="{{  route('myapp') }}" class="sidebtn sidebtn2">demo</a>
        <a href="{{  route('myapp') }}" class="sidebtn sidebtn2">demo</a>
        <a href="{{  route('myapp') }}" class="sidebtn sidebtn3">demo</a>
    </div>
</div>

<footer class="headfoot">
    @yield('footer')
</footer>

</div>
</body>
</html>
