
@extends('auth.base')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Vista previa</h1>
    </div>
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-sm-12 col-lg-8">
        <div class="card-body">
            <div class="row" style="text-align: center;">
                <h3>{{ $story->title }}</h3>
            </div>
            <div class="row">
                <img src="{{ Storage::disk('public') -> url($story -> image) }}" width="100%" height="500px">
            </div>
            <br>
            <div>
                <div>{!! $story->story !!}</div>
            </div>
            <div>
                <button class="btn btn-primary"><a href="http://127.0.0.1:8000/kids/story/{{ $story->id }}" style="text-decoration: none;color: white;">Ver Cuento en la Pagina</a></button>
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
