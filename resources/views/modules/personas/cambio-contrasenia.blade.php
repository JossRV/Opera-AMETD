@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-bg-12 formulario-contraseña">
                @if (session('error'))
                    <div class="alert alert-danger">
                        <strong>{{ session('error') }}</strong>
                    </div>
                @endif
                @if ($errors->has('password'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="float-start fs-5 py-2">
                            Cambia tu contraseña
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('perfil.primeraVez', $id_usuario) }}">
                            @csrf
                            @method('POST')
                            <div class="row my-3">
                                <div class="col-12 col-lg-6 col-sm-4">
                                    <label for="password" class="col-form-label">Nueva Contraseña<i
                                            class="fa-solid fa-asterisk fa-2xs text-danger"></i></label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror text-capitalize"
                                        name="password" value="{{ old('password') }}" required autocomplete="password"
                                        autofocus>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12 col-lg-6 col-sm-4">
                                    <label for="password_confirmation" class="col-form-label">Confirmar Contraseña
                                        <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                    </label>
                                    <input id="password_confirmation" type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror text-capitalize"
                                        name="password_confirmation" value="{{ old('password_confirmation') }}" required
                                        autocomplete="password_confirmation">

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row float-end mt-4">
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary container-fluid">
                                            Cambiar contraseña
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection