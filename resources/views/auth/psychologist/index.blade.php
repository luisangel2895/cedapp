@extends('auth.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> Stories </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="/psychologists/create "> Create a new Psychology</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach($psychologists as $psychologist)
                        <tr>
                            <td>{{ $psychologist->name }}</td>
                            <td>{{ $psychologist->email }}</td>
                            <td>{{ $psychologist->role }}</td>
                            <td>{{ $psychologist->state }}</td>
                            <td><a href="/psychologists/{{ $psychologist->id }}">Show User</a></td>
                            <td><a href="/psychologists/{{ $psychologist->id }}/edit">Edit</a></td>
                            <td>
                                <form action="/psychologists/{{ $psychologist->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection