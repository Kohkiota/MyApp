<html>
<head>
    <title>@yield('title')</title>
    <style>
    body { font-size:16pt; color:#999; margin: 5px; }
    h1 { font-size:50pt; text-align:left; color:#f6f6f6; margin:0px 0px 0px 0px; letter-spacing:-4pt; background-color:#5a24c5;}
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutilte { font-size:14pt; font-weight:bold; margin: 0px; }
    .contnet { margin:10px; }
    .footer { text-align:right; font-size:10pt; padding:10px 10px; border-bottom:solid 1px #ccc; color:#ccc; background-color:#5a24c5; }
    .logo { font-size: 50pt; border: 5px bold; border-color:#fff; border-radius: 5px; text-align:left; color:#aaa; margin:0px 15px; }
    </style>
</head>
<body>
    <span class="logo" >M</span><br>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="mentutitle">※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>
