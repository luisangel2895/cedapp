
@extends('auth.base')

@section('content')

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Psicologos</h1>
            <a href="/psychologists/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-user fa-sm text-white-50"></i>Crear Psicologo</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align:center;">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th>Ver Usuario</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($psychologists as $psychologist)
                            <tr>
                                <td>{{ $psychologist->name }}</td>
                                <td>{{ $psychologist->lastname }}</td>
                                <td>{{ $psychologist->email }}</td>
                                <td>{{ $psychologist->phone }}</td>
                                <td>{{ $psychologist->role }}</td>
                                <td>{{ $psychologist->state }}</td>

                                <td>
                                    <a href="/psychologists/{{ $psychologist->id }}" class="btn btn-dark btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Ver Psicologo</span>
                                    </a>

                                </td>

                                <td>
                                    <a href="/psychologists/{{ $psychologist->id }}/edit" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                        <span class="text">Editar</span>
                                    </a>

                                </td>


                                <td>
                                    <form action="/psychologists/{{ $psychologist->id }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                            <span class="text">Eliminar</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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