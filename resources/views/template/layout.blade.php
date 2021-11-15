<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../../sass/app.scss">
    <link rel="icon" href="img/global.ico" type="image/x-icon" width="500" height="500">
    <title>@yield('title-block')</title>
</head>
<body>
@include('inc.header')
<div class="container mt-5">
    @yield('content')
</div>
@include('inc.footer')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
