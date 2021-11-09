@extends('layouts.app')

@section('navbar')
<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{route('systemUser.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Manage Users
            </a>
            <a class="nav-link" href="{{route('client.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Manage Clients
            </a>
            <a class="nav-link" href="{{route('turno.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Manage Turns
            </a>
            <a class="nav-link" href="{{route('marca.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Manage Brands
            </a>
            <a class="nav-link" href="{{route('modelo.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Manage Models
            </a>
            <a class="nav-link" href="{{route('vehicleType.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Manage Vehicles
            </a>
            <a class="nav-link" href="{{route('washType.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Manage Wash Types
            </a>

            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ Auth::user()->name }}
            </div>
        </div>
    </div>
</nav>
@endsection
@section('content')
<div class="container background-rojo">
    <div class="row justify-content-center">
        <div class="col col-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="justify-between-content">
                        <a href="{{route('systemUser.index')}}" class="btn btn-lg btn-orange">List of Users</a>
                        <a href="{{route('client.index')}}" class="btn btn-lg btn-orange">List of Clients</a>
                        <a href="{{route('turno.index')}}" class="btn btn-lg btn-orange">List of Shifts</a>
                        <a href="{{route('marca.index')}}" class="btn btn-lg btn-orange">List of Brands</a>
                        <a href="{{route('modelo.index')}}" class="btn btn-lg btn-orange">List of Models</a>
                        <a href="{{route('vehicleType.index')}}" class="btn btn-lg btn-orange">List of Vehicles</a>
                        <a href="{{route('washType.index')}}" class="btn btn-lg btn-orange">List of Car Washes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
