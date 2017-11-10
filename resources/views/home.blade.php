@extends('layouts.default')
@section('title', 'Curriculum Vitae - Victor Fedorenko')
@section('content')
    <div id="promo">
        <div id="particles-js"></div>
        <div class="fg-promo"></div>
        <div class="container-fluid">
            <div class="row justify-content-center align-content-center fill-vertical text-white">
                <div class="col-auto border-light h1">Victor Fedorenko</div>
                <div class="w-100"></div>
                <div class="col-auto h4">Sleep -> Code -> Recursion</div>
            </div>
        </div>
    </div>
    <div id="skills" class="bg-white">
        <div id="content" class="container">
            <div class="row px-2 pt-4">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="icon-bg icon-avatar"></div>
                        </div>
                        <div class="col-lg-9">
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
            <div class="row">
                <div class="card text-center fill-horizontal rounded-0">
                    <div class="card-header card-footer">
                        Projects
                    </div>
                </div>
            </div>
            <div id="projects" class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-4 p-0">
                            <a href="/university" class="card rounded-0 border-0 fill-vertical">
                                <div class="card-body">
                                    <h4 class="card-title">University</h4>
                                    <p class="card-text">Internal project with lessons\lab factories.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 p-0">
                            <a href="http://numerical-method.fedorenko.zzz.com.ua/" class="card rounded-0 border-0 fill-vertical">
                                <div class="card-body">
                                    <h4 class="card-title">Numerical Methods</h4>
                                    <p class="card-text">Convient and fresh site with some typicall tasks and examples.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 p-0">
                            <a href="http://taskman.adr.com.ua/" class="card rounded-0 border-0">
                                <div class="card-body">
                                    <h4 class="card-title">Taskman</h4>
                                    <p class="card-text">Small tasker with opportunity everyone to add their own issues and editing them in admin panel(admin/admin).</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col p-0">
                    <div class="card text-center fill-horizontal rounded-0">
                        <div class="card-header">
                            Sources
                        </div>
                        <a href="https://github.com/22116" class="card-body undecorated" target="_blank">
                            <h4 class="card-title">GitHub</h4>
                            <p class="card-text">Click here to find out more interesting things.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card text-center fill-horizontal rounded-0">
                    <div class="card-header">
                        Social medias
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="https://www.linkedin.com/in/victor-fedorenko-43b384139/" class="icon icon-ln"></a>
                                <h4>LinkIn</h4>
                            </div>
                            <div class="col">
                                <a href="http://telegram.me/fedorenko22116" class="icon icon-tm"></a>
                                <h4>Telegram</h4>
                            </div>
                            <div class="col">
                                <a href="https://www.facebook.com/viktor.fedorenko.37" class="icon icon-fb"></a>
                                <h4>Facebook</h4>
                            </div>
                            <div class="col">
                                <a href="https://habrahabr.ru/users/22116/" class="icon icon-hb"></a>
                                <h4>Habrahabr</h4>
                            </div>
                            <div class="col">
                                <a href="mailto:fedorenko22116@gmail.com" class="icon icon-ml"></a>
                                <h4>Mail</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection