<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Story</title>
    <link href="{{ asset('css/bs4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('summernote/summernote-bs4.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="row">
        <div class="col">
            <h1> New Story </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/stories"> Back </a>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/stories" method="post" enctype="multipart/form-data">
    @csrf
        <!-- Text input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example3">Title</label>
            <input type="text" id="form6Example3" class="form-control" name="title" placeholder="Title" required autofocus/>
        </div>

        <!-- Text input -->

        <input type="file" class="form-control-file" name="image">


        <textarea id="summernote" name="story"></textarea>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
    </form>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bs4-popper.min.js')}}"></script>
    <script src="{{asset('js/bs4.min.js')}}"></script>



    <script src="{{asset('summernote/summernote-bs4.min.js')}}"></script>

    <script>
        $('#summernote').summernote({
            placeholder: 'Create a new Story',
            tabsize: 2,
            height: 100
        });
    </script>

</body>
</html>


































