<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="row">
    <div class="col">
        <h1> New Psychologist </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/psychologists"> Back </a>
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


@isset($message)
        <div class="alert alert-danger">
            <ul>
                    <li>{{ $message }}</li>
            </ul>
        </div>
@endisset



<form action="/psychologists" method="post">
@csrf
    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">name</label>
        <input type="text" id="form6Example3" class="form-control" name="name" placeholder="name" required autofocus/>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">lastname</label>
        <input type="text" id="form6Example4" class="form-control" name="lastname" placeholder="lastname" required/>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">email</label>
        <input type="text" id="form6Example4" class="form-control" name="email" placeholder="email" required/>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">password</label>
        <input type="text" id="form6Example4" class="form-control" name="password" placeholder="password" required/>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">phone</label>
        <input type="text" id="form6Example4" class="form-control" name="phone" placeholder="phone" required/>
    </div>



    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">State</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="state" id="gridRadios1" value="active" checked>
                <label class="form-check-label" for="gridRadios1">
                    Active
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="state" id="gridRadios2" value="inactive">
                <label class="form-check-label" for="gridRadios2">
                    Inactive
                </label>
            </div>
        </div>
    </fieldset>


    <div class="col">
        <label for="inputState" class="form-label">Role</label>
        <select id="inputState" class="form-select" name="role">
            <option value="psychologist" selected>Psychologist</option>
            <option value="admin">Admin</option>
        </select>
    </div>


    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Create Psychologist</button>
</form>




<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


































