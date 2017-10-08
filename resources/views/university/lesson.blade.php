@extends('layouts.clear')
@section('logo', 'University')
@section('title', $title ?? 'Lesson')
@section('content')
    <div class="container">
        <div id="accordion" role="tablist">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Probability Theory
                        </a>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <span class="badge badge-success">1</span>
                        <span class="badge badge-success">2</span>
                        <span class="badge badge-success">3</span>
                        <span class="badge badge-success">4</span>
                        <span class="badge badge-secondary">5</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection