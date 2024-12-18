@extends('layouts.app2')




@section('content')
    <section>
        {{-- personalizacion de perfil --}}
        <div class="container my-4">
            @if (session('success') || session('error'))
                <div class="row">
                    <div class="col">
                        <div class="alert alert-{{ session('sucess') ? 'success' : 'danger' }}">
                            <strong>{{ session('success') || session('error') }}</strong>
                        </div>
                    </div>
                </div>
            @endif
            {{-- @if ($errors->all())
                <div class="row">
                    <div class="col">
                        <div class="alert alert-danger">
                            <p>Porfavor verifica los mensajes de error</p>
                            <p>{{ $errors->first('password') }}</p>
                        </div>
                    </div>
                </div>
            @endif --}}
            {{-- acordion de datos personales --}}
            <div class="row" style="padding:0px;">
                <div class="col">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Datos personales
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div class="row my-3">
                                            <div class="col">
                                                {{ $perfil->nombre }} {{ $perfil->paterno }} {{ $perfil->materno }}
                                            </div>
                                        </div>
                                        <div class="row my-1">
                                            <div class="col-md-6 col-xl-3 col-12 my-2">
                                                <h5 class="mb-1"><b>Fecha de nacimiento: </b></h5>
                                                {{ $perfil->fechaNacimiento }}
                                            </div>
                                            <div class="col-md-6 col-xl-3 col-6 my-2">
                                                <h5 class="mb-1"><b>Edad: </b></h5>
                                                {{ $perfil->edad }}
                                            </div>
                                            <div class="col-md-6 col-xl-3 col-6 my-2">
                                                <h5 class="text-capitalize mb-1"><b>Género: </b></h5>
                                                {{ $perfil->genero }}
                                            </div>
                                            <div class="col-md-6 col-xl-3 col-6 my-2">
                                                <h5 class="text-capitalize mb-1"><b>País: </b></h5>
                                                {{ $perfil->pais }}
                                            </div>
                                            <div class="col-md-6 col-xl-3 col-6 my-2">
                                                <h5 class="mb-1"><b>Teléfono: </b></h5>
                                                {{ $perfil->telefono ?? 'Sin telefono' }}
                                            </div>
                                            <div class="col-md-6 col-xl-3 col-12 my-2">
                                                <h5 class="mb-1"><b>Especialidad: </b></h5>
                                                {{ $perfil->especialidad }}
                                            </div>
                                        </div>
                                        @if ($perfil->cat_paises_id == 1)
                                            <div class="col-12 col-xl-5 col-lg-5 my-2">
                                                <h5>Constancia de situación fiscal:</h5>
                                                @if (file_exists(base_path() . 'public_html/files/pdf/cfi/CFI_' . $perfil->id . '.pdf'))
                                                    <a href="{{ asset('files/pdf/cfi/CFI_' . $perfil->id . '.pdf') }}"
                                                        class="btn btn-info mt-1 text-decoration-none" target="_BLANK">
                                                        Descargar <i class="fa fa-file-pdf" aria-hidden="true"></i>
                                                    </a>
                                                @else
                                                    {{ 'Sin constancia de situación fiscal' }}
                                                @endif
                                            </div>
                                        @endif
                                        <div class="row my-2">
                                            <div class="col">
                                                <div class="button-group float-end">
                                                    <button type="button" class="btn btn-gradient-primary"
                                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                        Actualizar datos
                                                    </button>
                                                    <button type="button" class="btn btn-gradient-primary"
                                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                                        Cambiar contraseña
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @if (isset($paquetePagado))
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Historial de compras
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table table-striped align-middle">
                                        <thead>
                                            <tr>
                                                <th>Orden</th>
                                                <th>Monto</th>
                                                <th>Recibo</th>
                                                <th>Estatus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{ $paquetePagado->paquete }},
                                                    {{ $perfil->cat_categoria_id == 1 ? 'Residente de Anestesiología' : ($afiliado == 1 ? 'Anestesiologo Federado' : 'Anestesiología No Federado') }}
                                                </td>
                                                <td>
                                                    {{ $paquetePagado->monto }}
                                                    {{ $perfil->cat_paises_id == 1 ? 'MXN' : 'USD' }}
                                                </td>
                                                <td>
                                                    @if ($paquetePagado->estatus_pago != 2)
                                                        @if (file_exists(base_path() . '/public_html/files/pdf/ordenes/' . $paquetePagado->folio . '.pdf'))
                                                            <a class="btn btn-success btn-sm" target="_BLANK"
                                                                href="{{ asset('files/pdf/ordenes/' . $recibo->folio . '.pdf') }}">{{ $recibo->folio }}</a>
                                                        @else
                                                            S/R
                                                        @endif
                                                    @else
                                                        S/R
                                                    @endif
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-dark badge bg-{{ $paquetePagado->estatus_pago == 1 ? 'success' : ($paquetePagado->estatus_pago == 0 ? 'danger' : 'warning') }} fs-6">
                                                        {{ $paquetePagado->estatus_pago == 1 ? 'Pagado' : ($paquetePagado->estatus_pago == 0 ? 'Cancelado' : 'Revisión') }}
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal editar datos-->
        <div class="modal fade popup" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edita tus datos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('perfil.edit') }}" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            @method('PUT')
                            <div class="row my-3">

                                <div class="col-12 col-xl-3 col-lg-4 col-md-12">
                                    <label for="nombre" class="col-form-label">Nombre(s) <i
                                            class="fa-solid fa-asterisk fa-2xs text-danger"></i></label>
                                    <input id="nombre" type="text"
                                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        value="{{ old('nombre', $perfil->nombre) }}" required autocomplete="nombre"
                                        autofocus>

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label for="paterno" class="col-form-label">Apellido paterno
                                        <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                    </label>
                                    <input id="paterno" type="text"
                                        class="form-control @error('paterno') is-invalid @enderror" name="paterno"
                                        value="{{ old('paterno', $perfil->paterno) }}" required autocomplete="paterno">

                                    @error('paterno')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label for="materno" class="col-form-label">Apellido materno
                                        <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                    </label>
                                    <input id="materno" type="text"
                                        class="form-control @error('materno') is-invalid @enderror" name="materno"
                                        value="{{ old('materno', $perfil->materno) }}" required autocomplete="materno">

                                    @error('materno')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label for="fecha_nacimiento" class="col-form-label">Fecha de nacimiento
                                        <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                    </label>
                                    <input id="fecha_nacimiento" type="date" required
                                        class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                                        name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $perfil->fecha_nac) }}"
                                        autocomplete="fecha_nacimiento">
                                    @error('fecha_nacimiento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label for="pais" class="col-md-4 col-form-label">País <i
                                            class="fa-solid fa-asterisk fa-2xs text-danger"></i></label>
                                    <select id="pais" class="form-select @error('pais') is-invalid @enderror"
                                        name="pais" required>
                                        <option value="" selected>Seleccione</option>
                                        <hr>
                                        @foreach ($paises as $pais)
                                            <option value="{{ $pais->id }}"
                                                {{ old('pais', $perfil->cat_pais_id) === $pais->id ? 'selected' : '' }}>
                                                {{ $pais->pais }} |
                                                {{ $pais->codigo }}</option>
                                        @endforeach
                                    </select>

                                    @error('pais')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label for="telefono" class="col-form-label">Telefono
                                        <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                    </label>
                                    <input id="telefono" type="number"
                                        class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                        value="{{ old('telefono', $perfil->telefono) }}" autocomplete="telefono">

                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label for="email" class="col-form-label">Correo eléctronico <i
                                            class="fa-solid fa-asterisk fa-2xs text-danger"></i></label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email', $user->email) }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label for="genero" class="col-md-4 col-form-label">Género
                                        <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                    </label>
                                    <select id="genero" class="form-control form-select" name="genero"
                                        autocomplete="genero" required>
                                        <option value="" selected>
                                            Seleccionar
                                        </option>
                                        <hr>
                                        @foreach ($generos as $genero)
                                            <option value="{{ $genero->id }}"
                                                {{ old('genero', $perfil->cat_genero_id) === $genero->id ? 'selected' : '' }}>
                                                {{ $genero->genero }}</option>
                                        @endforeach
                                    </select>
                                    @error('genero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label for="especialidad" class="col-form-label">Especialidad <i
                                            class="fa-solid fa-asterisk fa-2xs text-danger"></i></label>
                                    <select id="especialidad"
                                        class="form-control form-select @error('especialidad') is-invalid @enderror"
                                        name="especialidad" required autocomplete="especialidad">
                                        <option value="" selected>Seleccionar
                                        </option>
                                        <hr>
                                        @foreach ($especialidades as $especialidad)
                                            <option value="{{ $especialidad->id }}"
                                                {{ old('especialidad', $perfil->cat_especialidad_id) == $especialidad->id ? 'selected' : '' }}>
                                                {{ $especialidad->especialidad }}</option>
                                        @endforeach
                                    </select>
                                    @error('especialidad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12 col-xl-3 col-lg-4 col-md-6" id="entidad_container">
                                    <label for="entidad" class="col-form-label">Estado <i
                                            class="fa-solid fa-asterisk fa-2xs text-danger"></i></label>
                                    <select id="entidad" type="text"
                                        class="form-select @error('entidad') is-invalid @enderror" name="entidad" required
                                        autocomplete="entidad">
                                        <option value="">Seleccionar</option>
                                        <hr>
                                        @foreach ($estados as $estado)
                                            <option value="{{ $estado->id }}"
                                                {{ $perfil->cat_estados_id == $estado->id ? 'selected' : '' }}>
                                                {{ $estado->estado }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('entidad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <div class="row float-end my-3">
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- modal cambiar contraseña --}}
        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Cambiar tu contraseña</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form method="POST" action="{{ route('perfil.editPassword') }}">
                        <div class="modal-body text-center">
                            @csrf
                            @method('PUT')
                            <div class="row my-3">
                                <div class="col-12">
                                    <label for="password_old" class="col-form-label">Anterior Contraseña<i
                                            class="fa-solid fa-asterisk fa-2xs" style="color: #003cff;"></i></label>
                                    <input id="password_old" type="password"
                                        class="form-control @error('password_old') is-invalid @enderror text-capitalize"
                                        name="password_old" value="{{ old('password_old') }}" required
                                        autocomplete="password_old" autofocus>
                                    @error('password_old')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password" class="col-form-label">Nueva Contraseña<i
                                            class="fa-solid fa-asterisk fa-2xs" style="color: #003cff;"></i></label>
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
                                <div class="col-12">
                                    <label for="password_confirmation" class="col-form-label">Confirmar Nueva
                                        Contraseña
                                        <i class="fa-solid fa-asterisk fa-2xs" style="color: #003cff;"></i>
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
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn  btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <div class="row ">
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div id="diplomado" class="container my-5" style="height: 70vh;background-color:rgb(196, 196, 196)"></div>
    </section>

    <style>
        #telefono[type=number]::-webkit-inner-spin-button,
        #telefono[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #telefono[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#nombre').on('input', function() {
                this.value = this.value.split(' ').map(function(word) {
                    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
                }).join(' ');
            });
            $('#paterno').on('input', function() {
                this.value = this.value.split(' ').map(function(word) {
                    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
                }).join(' ');
            });
            $('#paterno').on('input', function() {
                this.value = this.value.split(' ').map(function(word) {
                    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
                }).join(' ');
            });
            $('#telefono').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            const selectPais = document.getElementById('pais');
            console.log(selectPais);
            const isMexico = selectPais.options[selectPais.selectedIndex].text.includes('México');
            if (isMexico) {
                document.getElementById('entidad_container').classList.remove('d-none');
            } else {
                document.getElementById('entidad_container').classList.remove('d-none');
            }

            selectPais.addEventListener('change', function() {
                const isMexico = selectPais.options[selectPais.selectedIndex].text.includes('México');

                if (isMexico) {
                    document.getElementById('entidad_container').classList.remove('d-none');
                } else {
                    document.getElementById('entidad_container').classList.remove('d-none');
                }
            });

            $('.prueba1234').on('click', function(e) {
                e.preventDefault();
                $('.header-nav-feature').addClass('signin').removeClass('signup').removeClass('recover');
                $('.header-nav-feature').find('.signin-form input:first').focus();
                if (!$('.header-nav-features-dropdown').hasClass('show')) {
                    console.log('prueba');
                    document.querySelector('.header-nav-features-dropdown').classList.add('show');
                } else {

                    document.querySelector('.header-nav-features-dropdown').classList.remove('show');
                }
            });
        })
    </script>
@endsection
