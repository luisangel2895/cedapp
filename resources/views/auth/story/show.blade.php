@extends('auth.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1> Story : </h1>
                <h3> {{ $story->title }}</h3>
            </div>
        </div>
        <div class="row">
            <img src="{{ Storage::disk('public') -> url($story -> image) }}" width="100%" height="300px">
            <div>{!! $story->story !!}</div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/stories"> Back </a>
            </div>
        </div>
@endsection