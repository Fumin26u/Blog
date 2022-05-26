<!DOCTYPE HTML>
<html lang="ja">
<head>
@include('templates.meta')
</head>
<body class="h-full font-meiryo bg-white text-black">
@include('templates.header')
@yield('content')
@include('templates.footer')
<div class="copyright bg-black-dark text-white text-center">&copy;2022 Fu-minblog</div>
@yield('script')
</body>
</html>
