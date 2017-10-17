@extends('layouts.clear')
@section('logo', 'University')
@section('title', $title ?? 'Lab')
@section('content')
    <div class="col-lg-2 d-inline mb-3">
        <div class="list-group">
            @foreach($sections as $section)
                <a href="{{$section->getHref()}}" class="list-group-item @if ($section->isActive()) active @else list-group-item-action @endif">{{$section->getText()}}</a>
            @endforeach
        </div>
    </div>
    <div class="col-lg-8 d-inline" style="overflow-x: auto">
        @foreach($sections as $section)
            @if ($section->isActive()) {!! $section->getContent() !!} @endif
        @endforeach
    </div>
    <div class="col-lg-2 d-inline">
        <div class="card fill-horizontal">
            <div class="card-body">
                <h4 class="card-title">Like it?</h4>
                <h6 class="card-subtitle mb-2 text-muted">I think Yes</h6>
                <p class="card-text">Look my other examples of work!</p>
                <a href="#" class="card-link">Click</a>
            </div>
        </div>
    </div>
@endsection