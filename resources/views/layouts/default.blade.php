@extends('loader')
@section('title', 'Start page')
@section('layout')
<div class="wrapper-home">
    <div class="content">
        <div id="particles-js"></div>
        <div class="container-fluid fill-vertical">
            <div class="row justify-content-center align-content-center">
                <div id="content" class="col-10 my-5 bg-white">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <footer class="py-1" style="background-color: #212529">
        <div class="container">
            <div class="row fill-horizontal justify-content-center">
                <em class="text-white text-prepeared">If PHP not a treasure, so what i do there?</em>
            </div>
        </div>
    </footer>
</div>
@endsection