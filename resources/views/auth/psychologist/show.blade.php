
@extends('auth.base')

@section('content')

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Datos del psicologo</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-sm-12 col-lg-4">
            <div class="card-body">
                        <div><span style="font-weight: bold"> Nombre: </span>{{ $psychologist->name }}</div>
                        <div><span style="font-weight: bold"> Apellido: </span>{{ $psychologist->lastname }}</div>
                        <div><span style="font-weight: bold"> Telefono: </span>{{ $psychologist->phone }}</div>
                        <div><span style="font-weight: bold"> Email: </span>{{ $psychologist->email }}</div>
                        <div><span style="font-weight: bold"> Contrasena: </span>{{ $password }}</div>
                        <div><span style="font-weight: bold"> Estado: </span>{{ $psychologist->state }}</div>
                        <div><span style="font-weight: bold"> Role: </span>{{ $psychologist->role }}</div>
            </div>
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