@extends('auth.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> Edit Story {{ $story->id }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/stories"> Back </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/stories/{{ $story->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">TItle</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Type a title" value="{{ old('title') }}">
                        <label for="story">Story</label>
                        <input type="text" class="form-control" id="story" name="story" placeholder="Type a story" value="{{ old('story') }}">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection