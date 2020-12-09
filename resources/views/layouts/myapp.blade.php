<html>
<head>
    <title>@yield('title')</title>
    <style>
        body {
            font-size:16px;
            color:#999;
            margin: 0px 5px;
        }
        ul {
            font-size:12px;
        }
        hr {margin: 25px 100px;
            border-top: 1px dashed #ddd;
        }
        .menutilte {
            font-size:14pt;
            font-weight:bold;
            margin: 0px;
        }
        .contnet {
            margin:10px 50px;
        }

        .headfoot {
            display:flex;
            align-items: center;
            margin: 0px -5px;
            padding: 5px 5px;
        }

        footer {
            justify-content: flex-end;
            font-size:10pt;
            border-bottom:solid 1px #ccc;
            color:#fff;
            background-color:#0467e2bf;
        }

        header {
            justify-content: flex-start;
            padding: 8px 0px;
            background-color:#0467e2bf;
        }
        .logo {
            font-size: 15pt;
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
            font-size: 50pt;
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
        <a href="{{ route('index') }}" class="logo" >
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
        <span>
            @yield('title')
        </span>
        @yield('footer')
    </footer>
    </div>
</body>
</html>
