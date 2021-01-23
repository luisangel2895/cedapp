@extends('auth.base')

@section('content')
    <h4> User : {{ $name }} </h4>
    <h4> {{ $email }} </h4>

    <div>
        <a href="{{route('stories.index')}}">Administrar Cuentos</a>
        <a href="#">Administrar Blogs</a>
        <a href="#">Administrar VIdeos</a>

    </div>
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
@endsection