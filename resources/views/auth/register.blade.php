@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Nombre(s)</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
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
                                            {{ $especialidad->especialidad}}</option>
                                    @endforeach
                                </select>
                                @error('especialidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Correo Electronico</label>

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
                                <label
                                    style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                    for="telefono" class="col-form-label">Telefono
                                    <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                </label>
                                <input id="telefono" type="number" required
                                    class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                    value="{{ old('telefono') }}" autocomplete="telefono">

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-5 col-xl-3 col-lg-4 col-md-6 col-12">
                                <label
                                    style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                    for="especialidad" class="col-form-label">Forma de Pago <i
                                        class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>


                                <select
                                    class="form-control form-select @error('forma') is-invalid @enderror"
                                    name="forma" required autocomplete="forma">
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
                                @enderror
                            </div>

                            <div class="col-5 col-xl-3 col-lg-4 col-md-6 col-12">
                                <label
                                    for="exhibiciones" class="col-form-label">Numero de exhibiciones <i
                                        class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>


                                <select
                                    class="form-control form-select @error('exhibicion') is-invalid @enderror"
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
                                @enderror
                            </div>


                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">confirmar contraseña</label>

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
    </div>
@endsection
@section('js')
    <script>
        // $(document).ready(function() {
        //     // $('#RFC').on('input', function() {
        //     //     this.value = this.value.toUpperCase()
        //     // });
        //     // $('#curp').on('input', function() {
        //     //     this.value = this.value.toUpperCase()
        //     // });
        //     // $('#numI').on('input', function() {
        //     //     this.value = this.value.replace(/[^0-9]/g, '');
        //     // });
        //     // $('#numE').on('input', function() {
        //     //     this.value = this.value.replace(/[^0-9]/g, '');
        //     // });
        //     // $('#codigo_postal').on('input', function() {
        //     //     this.value = this.value.replace(/[^0-9]/g, '');
        //     // });
        //     var contentFederado = document.getElementById('content-federado');
        //     var contentFederadoData = document.getElementById('content-federado-data');
        //     var contentFederadoNum = document.getElementById('content-federado-num');

        //     contentFederado.classList.add('d-none');
        //     contentFederadoData.hidden = true;
        //     contentFederadoNum.hidden = true;

        //     const selectPais = document.getElementById('pais')

        //     if (!selectPais.options[selectPais.selectedIndex].text.includes('México')) {
        //         // document.getElementById('curp').disabled = true
        //         // document.getElementById('entidad').disabled = true
        //         // document.getElementById('codigo_postal').disabled = true
        //         // document.getElementById('colonia').disabled = true
        //         // document.getElementById('calle').disabled = true
        //         // document.getElementById('numE').disabled = true
        //         // document.getElementById('numI').disabled = true
        //         // document.getElementById('municipio').disabled = true
        //         // // document.getElementById('constancia').disabled = true
        //         // document.getElementById('colegio').disabled = true
        //         // document.getElementById('colegio').required = false

        //         // document.getElementById('curp_container').classList.add('d-none')
        //         // document.getElementById('entidad_container').classList.add('d-none')
        //         // document.getElementById('codigo_container').classList.add('d-none')
        //         // document.getElementById('colonia_container').classList.add('d-none')
        //         // document.getElementById('calle_container').classList.add('d-none')
        //         // document.getElementById('colonia_container').classList.add('d-none')
        //         // document.getElementById('ext_container').classList.add('d-none')
        //         // document.getElementById('int_container').classList.add('d-none')
        //         // document.getElementById('muni_container').classList.add('d-none')
        //         // document.getElementById('const_container').classList.add('d-none')
        //         // document.getElementById('colegio_container').classList.add('d-none')
        //         // document.getElementById('content-asociado').classList.add('d-none')
        //         document.getElementById('content-federado').classList.add('d-none')
        //         // if (checkConstancia.checked) {
        //         //     constancia.disabled = true
        //         // }
        //         // if (checkColegio.checked) {
        //         //     colegio.disabled = true
        //         // }
        //     } else {
        //         // document.getElementById('curp').disabled = false
        //         // document.getElementById('entidad').disabled = false
        //         // document.getElementById('codigo_postal').disabled = false
        //         // document.getElementById('colonia').disabled = false
        //         // document.getElementById('calle').disabled = false
        //         // document.getElementById('numE').disabled = false
        //         // document.getElementById('numI').disabled = false
        //         // document.getElementById('municipio').disabled = false
        //         // document.getElementById('constancia').disabled = false
        //         // document.getElementById('colegio').disabled = false
        //         // document.getElementById('colegio').required = true

        //         // document.getElementById('curp_container').classList.remove('d-none')
        //         // document.getElementById('entidad_container').classList.remove('d-none')
        //         // document.getElementById('codigo_container').classList.remove('d-none')
        //         // document.getElementById('calle_container').classList.remove('d-none')
        //         // document.getElementById('colonia_container').classList.remove('d-none')
        //         // document.getElementById('ext_container').classList.remove('d-none')
        //         // document.getElementById('int_container').classList.remove('d-none')
        //         // document.getElementById('muni_container').classList.remove('d-none')
        //         // document.getElementById('const_container').classList.remove('d-none')
        //         // document.getElementById('colegio_container').classList.remove('d-none')
        //         // document.getElementById('content-asociado').classList.add('d-none')
        //         document.getElementById('content-federado').classList.remove('d-none')
        //         // if (checkConstancia.checked) {
        //         //     constancia.disabled = true
        //         // }
        //         // if (checkColegio.checked) {
        //         //     colegio.disabled = true
        //         // }
        //     }

        //     selectPais.addEventListener('change', () => {
        //         if (!selectPais.options[selectPais.selectedIndex].text.includes('México')) {
        //             // document.getElementById('curp').disabled = true
        //             // document.getElementById('entidad').disabled = true
        //             // document.getElementById('codigo_postal').disabled = true
        //             // document.getElementById('colonia').disabled = true
        //             // document.getElementById('calle').disabled = true
        //             // document.getElementById('numE').disabled = true
        //             // document.getElementById('numI').disabled = true
        //             // document.getElementById('municipio').disabled = true
        //             // document.getElementById('constancia').disabled = true
        //             // document.getElementById('colegio').required = false

        //             // document.getElementById('curp_container').classList.add('d-none')
        //             // document.getElementById('entidad_container').classList.add('d-none')
        //             // document.getElementById('codigo_container').classList.add('d-none')
        //             // document.getElementById('colonia_container').classList.add('d-none')
        //             // document.getElementById('calle_container').classList.add('d-none')
        //             // document.getElementById('colonia_container').classList.add('d-none')
        //             // document.getElementById('ext_container').classList.add('d-none')
        //             // document.getElementById('int_container').classList.add('d-none')
        //             // document.getElementById('muni_container').classList.add('d-none')
        //             // document.getElementById('const_container').classList.add('d-none')
        //             // document.getElementById('colegio_container').classList.add('d-none')
        //             // document.getElementById('content-asociado').classList.remove('d-none')
        //             document.getElementById('content-federado').classList.add('d-none')
        //             // if (checkConstancia.checked) {
        //             //     constancia.disabled = true
        //             // }
        //             // if (checkColegio.checked) {
        //             //     colegio.disabled = true
        //             // }

        //         } else {
        //             // document.getElementById('curp').disabled = false
        //             // document.getElementById('entidad').disabled = false
        //             // document.getElementById('codigo_postal').disabled = false
        //             // document.getElementById('colonia').disabled = false
        //             // document.getElementById('calle').disabled = false
        //             // document.getElementById('numE').disabled = false
        //             // document.getElementById('numI').disabled = false
        //             // document.getElementById('municipio').disabled = false
        //             // document.getElementById('constancia').disabled = false
        //             // document.getElementById('colegio').disabled = false
        //             // document.getElementById('colegio').required = true

        //             // document.getElementById('content-asociado').classList.add('d-none')
        //             // document.getElementById('curp_container').classList.remove('d-none')
        //             // document.getElementById('entidad_container').classList.remove('d-none')
        //             // document.getElementById('codigo_container').classList.remove('d-none')
        //             // document.getElementById('calle_container').classList.remove('d-none')
        //             // document.getElementById('colonia_container').classList.remove('d-none')
        //             // document.getElementById('ext_container').classList.remove('d-none')
        //             // document.getElementById('int_container').classList.remove('d-none')
        //             // document.getElementById('muni_container').classList.remove('d-none')
        //             // document.getElementById('const_container').classList.remove('d-none')
        //             // document.getElementById('colegio_container').classList.remove('d-none')
        //             document.getElementById('content-federado').classList.remove('d-none')
        //             // if (checkConstancia.checked) {
        //             //     constancia.disabled = true
        //             // }
        //             // if (checkColegio.checked) {
        //             //     colegio.disabled = true
        //             // }
        //         }
        //     })
        // })

        document.addEventListener("DOMContentLoaded", function() {
            const selectPais = document.getElementById('pais');
            const contentFederado = document.getElementById('content-federado');
            contentFederado.hidden = true;

            const isMexico = selectPais.options[selectPais.selectedIndex].text.includes('México');

            if (isMexico) {
                contentFederado.hidden = false;
            } else {
                contentFederado.hidden = true;
            }

            selectPais.addEventListener('change', function() {
                const isMexico = selectPais.options[selectPais.selectedIndex].text.includes('México');

                if (isMexico) {
                    contentFederado.hidden = false;
                } else {
                    contentFederado.hidden = true;
                }
            });
        });

        document.getElementById('form-register').addEventListener('submit', function(event) {
            event.preventDefault();

            const federadoSeleccionado = document.querySelector('input[name="federado"]:checked');

            if (federadoSeleccionado.value == 1) {
                const {
                    value: formValues
                } = Swal.fire({
                    title: "Por favor, verifica que eres federado",
                    html: `
                            <label>Correo</label><br>
                            <input id="swal-input1" class="swal2-input" type="email">
                            <label>Numero de Federado</label><br>
                            <input id="swal-input2" class="swal2-input" type="text">
                        `,
                    focusConfirm: false,
                    preConfirm: () => {
                        return [
                            document.getElementById("swal-input1").value,
                            document.getElementById("swal-input2").value
                        ];
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        const formValues = result.value;
                        var hiddenDataFederado = document.createElement("input");

                        hiddenDataFederado.type = "hidden";
                        hiddenDataFederado.name = "federadoData";
                        hiddenDataFederado.value = JSON.stringify(formValues);
                        document.getElementById('form-register').appendChild(hiddenDataFederado);

                        document.getElementById('form-register').submit();
                    }
                })
            } else {
                document.getElementById('form-register').submit();
            }


        })
    </script>
@endsection
