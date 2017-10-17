@extends('layouts.clear')
@section('logo', 'University')
@section('title', $title ?? 'Lesson')
@section('content')
    <div class="container">
        <div id="accordion" role="tablist">
            @foreach($lessons as $key => $lesson)
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                {{$lesson['title']}}
                            </a>
                        </h5>
                    </div>

                    <div id="collapse{{$key}}" class="collapse @if ($key == 0) show @endif" role="tabpanel" aria-labelledby="heading{{$key}}" data-parent="#accordion">
                        <div class="card-body">
                            @foreach($lesson['labs'] as $lab)
                                <a href="{{$lab['href']}}" class="badge badge-success">{{$lab['number']}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection