@extends('auth.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1> Psychologist : </h1>
                <h3> {{ $psychologist->name }}</h3>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <img src="{{ Storage::disk('public') -> url($story -> image) }}" width="100%" height="300px">--}}
{{--        </div>--}}

        <div class="row">
            <div class="col">
                <div>{{ $psychologist->lastname }}</div>
                <div>{{ $psychologist->lastname }}</div>
                <div>{{ $psychologist->phone }}</div>
                <div>{{ $psychologist->state }}</div>
                <div>{{ $psychologist->email }}</div>
                <div>{{ $password }}</div>

            </div>
        </div>
@endsection