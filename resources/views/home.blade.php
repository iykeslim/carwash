@extends('layouts.app')

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
                        <a href="{{route('systemUser.index')}}" class="btn btn-lg btn-orange">List of users</a>
                        <a href="{{route('client.index')}}" class="btn btn-lg btn-orange">List of customers</a>
                        <a href="{{route('turno.index')}}" class="btn btn-lg btn-orange">List of shifts</a>
                        <a href="{{route('marca.index')}}" class="btn btn-lg btn-orange">List of marks</a>
                        <a href="{{route('modelo.index')}}" class="btn btn-lg btn-orange">List of models</a>
                        <a href="{{route('vehicleType.index')}}" class="btn btn-lg btn-orange">Vehicle list</a>
                        <a href="{{route('washType.index')}}" class="btn btn-lg btn-orange">List of washes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
