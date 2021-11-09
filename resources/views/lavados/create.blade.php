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
<div class="container">
    <form action="{{route('washType.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add new washing</h1>
                </div>

                <div class="form-group row">
                    <label for="tipo_lavado" class="col-md-4 col-form-label text-md-right">Name</label>

                    <div class="col-md-6">
                        <input id="tipo_lavado" type="text" class="form-control @error('tipo_lavado') is-invalid @enderror"
                            name="tipo_lavado" value="{{ old('tipo_lavado') }}" autocomplete="tipo_lavado">

                        @error('tipo_lavado')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="precio" class="col-md-4 col-form-label text-md-right">Price</label>

                    <div class="col-md-6">
                        <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror"
                            name="precio" value="{{ old('precio') }}" autocomplete="precio">

                        @error('precio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row pt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>


        </div>

    </form>
</div>
@endsection
