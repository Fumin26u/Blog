<!DOCTYPE HTML>
<html lang="ja">
<head>
@include('templates.meta')
</head>
<body class="h-full font-meiryo bg-white text-black">
@include('templates.header')
@yield('content')
@include('templates.footer')
@yield('script')
</body>
</html>
