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

{{-- <script>

(function() {
    'use strict';

    // フラッシュメッセージのfadeout
    $(function(){
        $('.flash_message').fadeOut(3000);
    });

})();

</script> --}}

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
