<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>
        @section('title')
            Home
        @show
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div class="wrapper-clear">
    <div class="content">
        <div class="container-fluid">
            <div id="header" class="row">
                <div class="col-2 fill-vertical">
                    <div class="row fill-vertical align-items-center ml-3 pt-3">
                        <a href="/"><h1 class="text-white text-prepeared">@yield('logo')</h1></a>
                    </div>
                </div>
                <div class="col-10"></div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    {{ Breadcrumbs::render(\Illuminate\Support\Facades\Route::getCurrentRoute()->getName(), Route::getCurrentRoute()->parameters()) }}
                </div>

            </div>
            <div class="row mt-4">
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="mt-3 bg-dark py-4">
        <div class="container">
            <div class="row fill-horizontal justify-content-center">
                <em class="text-white text-prepeared">Powered by Victor Fedorenko</em>
            </div>
        </div>
    </footer>
</div>
<script src="/js/app.js"></script>
</body>
</html>