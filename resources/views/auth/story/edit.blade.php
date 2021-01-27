@extends('auth.base')

@section('link-summernote')
    <link href="{{ asset('css/bs4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('summernote/summernote-bs4.min.css') }}" rel="stylesheet">

@endsection


@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Editar Cuento</h1>
        </div>
        <div class="col-sm-12 col-lg-6">
            <form action="/stories/{{ $story->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Titulo</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputTitle" placeholder="Titulo" name="title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-6 col-form-label">Seleccione una imagen</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Escriba el cuento:</label>
                    <div>
                        <textarea id="summernote" name="story"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%">Guardar Cambios</button>
            </form>
        </div>
    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bs4-popper.min.js')}}"></script>
    <script src="{{asset('js/bs4.min.js')}}"></script>

    <script src="{{asset('summernote/summernote-bs4.min.js')}}"></script>

    <script>
        $('#summernote').summernote({
            placeholder: 'Crea un nuevo Cuento',
            tabsize: 2,
            height: 100
        });
    </script>

@endsection


@section('nav')
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ $name }}({{ $email }}) </span>
            <img class="img-profile rounded-circle"
                 src="{{ asset('sbadmin2/img/undraw_profile.svg') }}">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
             aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sbadmin2/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sbadmin2/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('sbadmin2/js/demo/chart-pie-demo.js') }}"></script>
@endsection

@section('dashboard')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        @if($role == 'admin')
            <a class="nav-link" href="{{route('dashboard-admin')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        @else
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        @endif
    </li>
@endsection

@section('admin')
    @if($role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('psychologists.index') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Psicologos</span></a>
        </li>
    @endif
@endsection


















