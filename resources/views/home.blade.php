@extends('layouts.default')
@section('title', 'Curriculum Vitae - Victor Fedorenko')
@section('content')
    <div id="promo">
        <div id="particles-js"></div>
        <div class="fg-promo"></div>
        <div class="container-fluid">
            <div class="row justify-content-center align-content-center h-100 text-white">
                <h1 class="col-auto border-light h1">Victor Fedorenko</h1>
                <div class="w-100"></div>
                <h4 class="col-auto h4">@php print(htmlspecialchars("<?php print(\"I'm ready!\"); ?>")) @endphp</h4>
            </div>
        </div>
    </div>
    <div id="skills" class="bg-white">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-3 border border-left-0 border-top-0 border-bottom-0 border-primary justify-content-center d-flex">
                    <div class="icon-bg icon-avatar align-self-center"></div>
                </div>
                <div class="col-lg-9 pl-5">
                    <p class="h3">Hello, my name is Victor!</p>
                    <p class="ml-3">
                        I'm a 19yo web-developer, student of National Technical University "Kharkiv Polytechnic Institute" since 2015. Currently living in Kharkiv. Programming for 4 years, mostly on C#. Switched to web-development a year ago.
                    </p>
                    <p>
                        Current postion: <b>ABC Hosting Company Ltd</b> since 21.11.2016
                    </p>
                    <p>Skills: <span class="badge badge-success">Php 7.X</span> /
                        <span class="badge badge-success">Laravel 5.X</span> /
                        <span class="badge badge-primary">JavaScript</span> /
                        <span class="badge badge-primary">JQuery</span> /
                        <span class="badge badge-success">Html</span> /
                        <span class="badge badge-success">Css</span> /
                        <span class="badge badge-primary">Scss/Sass</span> /
                        <span class="badge badge-primary">MySql</span> /
                        <span class="badge badge-primary">Bootstrap 4</span>
                    </p>
                    <p>Technologies: <span class="badge badge-success">Git</span> /
                        <span class="badge badge-primary">Linux Cmd</span> /
                        <span class="badge badge-success">PhpStorm</span> /
                        <span class="badge badge-primary">Composer</span> /
                        <span class="badge badge-primary">NPM</span>
                    </p>

                    <p>Languages: <span class="badge badge-success">Russian(native)</span> /
                        <span class="badge badge-success">Ukrainian(fluent)</span> /
                        <span class="badge badge-primary">English(Intermediate)</span>
                    </p>

                    <p>I am interested in improving of my own skills and discovering new technologies</p>
                </div>
            </div>
        </div>
    </div>
    <div id="source">
        <div class="container">
            <div class="row">
                <a href="https://github.com/22116" class="undecorated m-auto text-center" target="_blank">
                    <h3 class="border-0 text-info">GitHub</h3>
                    <h4 class="text-white">Click here to find out more interesting things.</h4>
                </a>
            </div>
        </div>
    </div>
    <div id="contacts"  class="bg-info">
        <div class="container text-center py-5 text-white">
            <div class="row">
                <h3 class="mx-auto mb-5">Social medias</h3>
            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://www.linkedin.com/in/victor-fedorenko-43b384139/" class="icon icon-ln mx-auto"></a>
                    <h4 class="mt-2">LinkIn</h4>
                </div>
                <div class="col">
                    <a href="http://telegram.me/fedorenko22116" class="icon icon-tm mx-auto"></a>
                    <h4 class="mt-2">Telegram</h4>
                </div>
                <div class="col">
                    <a href="https://www.facebook.com/viktor.fedorenko.37" class="icon icon-fb mx-auto"></a>
                    <h4 class="mt-2">Facebook</h4>
                </div>
                <div class="col">
                    <a href="https://habrahabr.ru/users/22116/" class="icon icon-hb mx-auto"></a>
                    <h4 class="mt-2">Habrahabr</h4>
                </div>
                <div class="col">
                    <a href="mailto:fedorenko22116@gmail.com" class="icon icon-ml mx-auto"></a>
                    <h4 class="mt-2">Mail</h4>
                </div>
            </div>
        </div>
    </div>
@endsection