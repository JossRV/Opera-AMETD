@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                @if ($errors->has('email'))
                    @foreach ($errors->get('email') as $message)
                        @if (str_contains($message, 'El correo electronico ya existe'))
                            <p> El correo electronico ya existe porfavor comunicate a <a href="#">soporte@ametd.mx</a>
                                para revisar tu caso
                                caso </p>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div style="font-size:25px" class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Nombre(s)</label>

                                <div class="col-md-6">
                                    <input oninput="mayusculas(event)" id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>

                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="paterno" class="col-form-label">Apellido paterno
                                    <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                </label>
                                <input id="paterno" type="text"
                                    class="form-control @error('paterno') is-invalid @enderror text-capitalize"
                                    name="paterno" value="{{ old('paterno') }}" required autocomplete="paterno">

                                @error('paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>


                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="materno" class="col-form-label">Apellido materno
                                    <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                </label>
                                <input id="materno" type="text"
                                    class="form-control @error('materno') is-invalid @enderror text-capitalize"
                                    name="materno" value="{{ old('materno') }}" required autocomplete="materno">

                                @error('materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>


                            <div class="col-5 col-xl-3 col-lg-4 col-md-6 col-12">
                                <label for="especialidad" class="col-form-label">Especialidad <i
                                        class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>

                                <select class="form-control form-select @error('especialidad') is-invalid @enderror"
                                    name="especialidad" required autocomplete="especialidad">
                                    <option value="">Seleccionar <i class="fa-solid fa-arrow-down-long"></i>
                                    </option>
                                    <hr>
                                    @foreach ($especialidades as $especialidad)
                                        <option value="{{ $especialidad->id }}"
                                            {{ old('especialidad') == $especialidad->id ? 'selected' : '' }}>
                                            {{ $especialidad->especialidad }}</option>
                                    @endforeach
                                </select>
                                @error('especialidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>


                            <div class="row mb-3">
                                <label for="email" class="col-form-label">Correo Electronico</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="telefono" class="col-form-label">Telefono
                                    <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                </label>
                                <input id="telefono" type="number" required
                                    class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                    value="{{ old('telefono') }}" autocomplete="telefono">

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            {{-- <div class="col-5 col-xl-3 col-lg-4 col-md-6 col-12">
                                <label
                                    style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                    for="especialidad" class="col-form-label">Forma de Pago <i
                                        class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>


                                <select class="form-control form-select @error('forma') is-invalid @enderror" name="forma"
                                    required autocomplete="forma">
                                    <option value="">Seleccionar <i class="fa-solid fa-arrow-down-long"></i>
                                    </option>
                                    <hr>
                                    @foreach ($formas as $forma)
                                        <option value="{{ $forma->id }}"
                                            {{ old('forma') == $forma->id ? 'selected' : '' }}>
                                            {{ $forma->forma }}</option>
                                    @endforeach
                                </select>
                                @error('forma')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <div class="col-5 col-xl-3 col-lg-4 col-md-6 col-12">
                                <label for="exhibiciones" class="col-form-label">Numero de exhibiciones <i
                                        class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>


                                <select class="form-control form-select @error('exhibicion') is-invalid @enderror"
                                    name="exhibicion" required autocomplete="exhibicion">
                                    <option value="">Seleccionar <i class="fa-solid fa-arrow-down-long"></i>
                                    </option>
                                    <hr>
                                    @foreach ($exhibiciones as $exhibicion)
                                        <option value="{{ $exhibicion->id }}"
                                            {{ old('exhibicion') == $exhibicion->id ? 'selected' : '' }}>
                                            {{ $exhibicion->exhibicion }}</option>
                                    @endforeach
                                </select>
                                @error('exhibicion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div> --}}


                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmar
                                    contraseña</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        guardar información
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="row mt-3">
            <div class="col">

                <p>Si ya tienes una cuenta, no es necesario crear una,
                    inicia sesión <a style="color:#3A3DDD" href="{{ route('login') }}"><b>aqui</b></a>
                </p>
            </div>
        </div>

    </div>
@endsection
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
           mayusculas = (event) => {
                let words = event.target.value.split(' ');
                for (let i = 0; i < words.length; i++) {
                    words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1).toLowerCase();
                }
                event.target.value = words.join(' ');
            }
        });
    </script>
@endsection
