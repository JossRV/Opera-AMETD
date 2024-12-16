@extends('layouts.app')

@section('content')
    <section>
        <div class="container my-4">
            <div class="row">
                <div class="col">

                    @error('no_encontrado')
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    @if (session('success'))
                        <div class="alert alert-success">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            <strong>{{ session('error') }}</strong>
                        </div>
                    @endif
                    @if (session('existe'))
                        <div class="alert alert-success">
                            <strong>{{ session('existe') }}</strong>
                        </div>
                    @endif
                    @if (session('mail-enviado'))
                        <div class="alert alert-danger">
                            <strong>
                                Se ha enviado un correo. Verifíquelo, también puede llegar a spam, por favor. Si tiene
                                problemas contacte a <a href="mailto:soporte@fmcaac.mx">soporte@fmcaac.mx</a>
                            </strong>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div style="font-size:25px;" class="mb-3">Inicio de sesión</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @method('POST')
                        <div class="row mb-4">
                            <div class="col-md-9">
                                <input id="email" type="email" placeholder="Escribe tu correo"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input id="password" type="password" placeholder="Escribe tu contraseña"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="fa-regular fa-eye" id="ver-password"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input style="margin-right:10px;width:1.5em;height:1.5em" class="form-check-input"
                                        type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label style="line-height:1.5em" class="form-check-label mt-1" for="remember">
                                        Mantener sesión activa
                                    </label>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row mb-2">
                            <div class="col">
                                <div class="g-recaptcha @error('captcha') is-invalid @enderror"
                                    data-sitekey="6Lfm35YqAAAAAKxUJG8zLuM4n8QWXnB8ILyygOMo"></div>
                                @error('captcha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button id="ini" type="submit" class="btn">
                                    Iniciar Sesión
                                </button>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class=" col-md-8 my-2" style="padding-left:30px">
                                <p>¿No tienes una cuenta?, registrate <a href="{{ url('/registro') }}"
                                        class="fs-5"><b>aquí</b></a></p>
                            </div>
                            {{-- <div class="offset-md-2 col-md-8 my-2" style="padding-left:30px">
                                <p>
                                    ¿Olvidó su contraseña?, recuperala
                                    <btn onclick="recuperar()" class="fs-5 text-decoration-underline">
                                        <b>aquí</b>
                                    </btn>
                                </p>
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    {{-- <div class="modal fade" id="recuperar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="recuperarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="recuperarLabel">Recupera tu cuenta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label for="buscador" class="form-label">Ingresa tu correo que registrastes</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="buscador" aria-describedby="basic-addon2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="submit" id="button-addon2">
                        Recuperar
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('js')
    <script>
        $(document).ready(function() {

            recuperar = () => {
                $('#recuperar').modal('show');
            }

            $('#ver-password').on('click', function() {
                var inputType = $('#password').attr('type') === 'password' ? 'text' : 'password';
                $('#password').attr('type', inputType);
                $(this).toggleClass('fa-eye fa-eye-slash');
            });
        })
    </script>
@endsection
