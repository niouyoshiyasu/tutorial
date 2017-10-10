<!DOCTYPE html>
<html lang="ja">
<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    @yield('stylesheets')
</head>
<body>
    @yield('app')
    @yield('javascripts')
</body>
</html>
