@extends('auth.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> Edit Psychology {{ $psychologist->id }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/psychologists"> Back </a>
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
                <form action="/psychologists/{{ $psychologist->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
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

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example4">state</label>
                            <input type="text" id="form6Example4" class="form-control" name="state" placeholder="state" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example4">role</label>
                            <input type="text" id="form6Example4" class="form-control" name="role" placeholder="role" required/>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection