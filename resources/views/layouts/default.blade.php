@extends('loader')
@section('title', 'Start page')
@section('layout')
<div class="wrapper-home">
    <div class="content">
        @yield('content')
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