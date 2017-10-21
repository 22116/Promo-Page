<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>
        @yield('title')
    </title>

    <!-- Icon -->
    <link rel="shortcut icon" href="/images/icon.ico" type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
@yield('layout')
<script src="/js/app.js"></script>
</body>
</html>