<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>
        @section('title')
            Start page
        @show
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div class="wrapper-home">
    <div class="content">
        <div class="container-fluid fill-vertical">
            <div class="row justify-content-center align-content-center">
                <div id="content" class="col-10 my-5 bg-white">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark py-1">
        <div class="container">
            <div class="row fill-horizontal justify-content-center">
                <em class="text-white text-prepeared">Powered with LOVE</em>
            </div>
        </div>
    </footer>
</div>

<script src="/js/app.js"></script>
</body>
</html>