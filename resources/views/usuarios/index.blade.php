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
    <div class="row">
        <div class="col col-12">
            <hr>
        <h2 class="intro-text text-center">List of users</strong></h2>
            <hr>
        </div>
        <div><a href="{{route('systemUser.create')}}" class="btn btn-sm waves-effect waves-ligh  border border-secondary rounded">Add user</a></div>
        <div class="row pt-2 col-12">
            <hr style="width: 100%">
            <table class="table table-bordered table-striped">
                <thead class="">
                    <tr>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Driver's License Number</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Details</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($systemUsers as $systemUser)
                    <tr>
                        <td>{{$systemUser->user->name ?? 'lala'}}</td>
                        <td>{{$systemUser->user->lastname ?? 'lala'}}</td>
                        <td>{{$systemUser->user->dni ?? 'lala'}}</td>
                        <td>{{$systemUser->user->email ?? 'lala'}}</td>
                        <td>{{$systemUser->role ?? 'lala'}}</td>
                        <td><a href="{{route('systemUser.show',['systemUser'=>$systemUser->id])}}"
                            class="btn btn-sm waves-effect waves-ligh  border border-secondary rounded"
                            style="color: rgb(121, 61, 22)">Detail</a></td>
                        <td>
                            <form action="{{route('systemUser.destroy',['systemUser'=>$systemUser->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm waves-effect waves-ligh  border border-secondary rounded"
                            style="color: rgb(61, 46, 85)"  onclick="return confirm('You are sure to delete this user?');">Delete</button>
                            </td>
                        </form>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
    @endsection
