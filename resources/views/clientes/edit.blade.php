@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('client.update',['client'=>$client->id])}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Client Edit</h1>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') ?? $client->user->name }}" autocomplete="name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lastname" class="col-md-4 col-form-label text-md-right">Last Name</label>

                    <div class="col-md-6">
                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror"
                            name="lastname" value="{{ old('lastname') ?? $client->user->lastname }}"
                            autocomplete="lastname">

                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dni" class="col-md-4 col-form-label text-md-right">Driver's License Number</label>

                    <div class="col-md-6">
                        <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni"
                            value="{{ old('dni') ?? $client->user->dni }}" autocomplete="dni">

                        @error('dni')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') ?? $client->user->email }}" required
                            autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telefono" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                    <div class="col-md-6">
                        <input id="telefono" type="telefono"
                            class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                            value="{{ old('telefono') ?? $client->telefono }}" autocomplete="telefono">

                        @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="direccion" class="col-md-4 col-form-label text-md-right">Address</label>

                    <div class="col-md-6">
                        <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror"
                            name="direccion" value="{{ old('direccion') ?? $client->direccion }}">

                        @error('direccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row pt-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </div>


        </div>

    </form>
</div>
@endsection
