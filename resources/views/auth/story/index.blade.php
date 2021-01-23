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
                <a class="btn btn-primary" href="/stories/create"> Create a new History</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach($stories as $story)
                        <tr>
                            <td>{{ $story->title }}</td>
                            <td><img class="" width="100px" src="{{ Storage::disk('public') -> url($story -> image) }}"></td>
                            <td>{{ $story->author }}</td>
                            <td><a href="/stories/{{ $story->id }}">View Story</a></td>
                            <td><a href="/stories/{{ $story->id }}/edit">Edit</a></td>

                            <td>
                                <form action="/stories/{{ $story->id }}" method="post">
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