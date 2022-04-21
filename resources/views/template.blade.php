<!DOCTYPE HTML>
<html lang="ja">
<head>
@include('templates.meta')
</head>
<body>
@include('templates.header')
@yield('content')
@include('templates.footer')
@yield('script')
</body>
</html>
