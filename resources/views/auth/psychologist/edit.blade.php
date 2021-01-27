
@extends('auth.base')


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
            <h1 class="h3 mb-0 text-gray-800">Editar Psicologo</h1>
        </div>
        <div class="col-sm-12 col-lg-6">
            <form action="/psychologists/{{ $psychologist->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Nombres:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" placeholder="Nombres" name="name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputApellido" class="col-sm-2 col-form-label">Apellidos:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputApellido" placeholder="Apellidos" name="lastname" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 col-form-label">Phone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPhone" placeholder="Telefono" name="phone" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Correo:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Correo" name="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputContra" class="col-sm-2 col-form-label">Contrasena:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputContra" placeholder="Contrasena" name="password" required>
                    </div>
                </div>

                <div class="form-group">
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Estado</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="state" id="gridRadios1" value="active" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Activo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="state" id="gridRadios2" value="inactive">
                                <label class="form-check-label" for="gridRadios2">
                                    Inactivo
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="form-group">
                    <div class="col">
                        <label for="inputState" class="form-label">Tipo de Psicologo</label>
                        <select id="inputState" class="form-select" name="role">
                            <option value="psychologist" selected>Psicologo</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%">Guardar Cambios</button>
            </form>
        </div>
    </div>

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
@endsection

@section('dashboard')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard-admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
@endsection

@section('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('psychologists.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Psicologos</span></a>
    </li>
@endsection