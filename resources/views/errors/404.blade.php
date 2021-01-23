@extends('layouts.main')

@section('content')
    <x-leftbutton/>

    <main id="main">
        {{-- PRIMER SECTION --}}
        <x-navbarKids /> {{-- NAVBAR --}}
        <img src="{{asset('images/error-404.jpg')}}" alt="" width="40%" style="margin-left: 30%">
    </main>
@endsection
