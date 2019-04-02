<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
<h1>@yield('title')</h1>
@section('menubar')
    <ul>
        <p>※メニュー</p>
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
