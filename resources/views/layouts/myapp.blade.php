<html>
<head>
    <title>@yield('title')</title>
    <style>
    body { font-size:16pt; color:#999; margin: 5px; }
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutilte { font-size:14pt; font-weight:bold; margin: 0px; }
    .contnet { margin:10px; }
    .footer { text-align:right; font-size:10pt; margin: 0px -5px 0px -5px; padding:10px 10px; border-bottom:solid 1px #ccc; color:#fff; background-color:#0467e2bf; }
    header { text-align:left;  padding: 8px 0px; margin:-5px -5px 0px -5px;  background-color:#0467e2bf; }
    .logo { font-size: 15pt; font-weight:bold; color:#04e2ce; padding:0px 5px; margin:0 5; border: 5px solid; border-color:#fff; border-radius: 50px; vertical-align: middle;}
    .title { font-size: 15pt; font-weight:bold; color:#f6f6f6; letter-spacing:0pt; margin:0px 0px; }
    </style>
</head>
<body>
    <!-- <span class="logo" >M</span><br> -->
    <header><span class="logo" >M</span><span class="title">@yield('title')</span></header>

    @section('menubar')
    <!-- <h2 class="mentutitle">※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content"> -->
    @show
    @yield('content')
    </div>

    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>
