<html>
<head>
    <title>@yield('title')</title>
    <style>
        body {
            font-size:16px;
            color:#999;
            margin: 0px 5px;
        }

        .headfoot {
            display:flex;
            align-items: center;
            margin: 0px -5px;
            padding: 5px 5px;
            background-color:#0467e2bf;
            color:#fff;
        }

        header {
            justify-content: flex-start;
        }

        footer {
            justify-content: flex-end;
            font-size:15px;
            margin-left: 50px;
        }
        .logo {
            font-size: 20px;
            font-weight:bold;
            color:#04e2ce;
            padding:0px 5px;
            margin:0px 0px;
            border: 5px solid;
            border-color:#fff;
            border-radius: 50px;
            vertical-align: middle;
        }

        .title {
            font-size: 25px;
            font-weight: bold;
            color: #f6f6f6;
            letter-spacing: 0pt;
            margin:0px 0px;
        }


    </style>
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
