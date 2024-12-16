<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pago</title>
    <script src="https://kit.fontawesome.com/4b24909997.js" crossorigin="anonymous"></script>
    <style>
        .container-contraseña1 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            /* padding-top: 90px;
            padding-left: 28em;
            padding-right: 28em; */
            padding: 1rem;
            font-size: 20px;
        }

        /* .contraseña-message1 {
            font-size: 20px;
            padding: 10px;
            text-align: center;
            margin: 0px;
        } */
        .mensaje1 {
            /* padding: 10px; */
            text-align: center;
            margin: 0px;
            color: #ED7D31;
            font-size: 25px;
        }

        .contraseña-codigo1 {
            /* font-size: 20px; */
            text-align: center;
        }

        .contraseña-codigo1 span {}

        .contraseña-advertencia1 {
            /* font-size: 20px; */
            text-align: center;

        }

        .contraseña-sitio {
            margin-top: 70px;
            display: block;
            text-align: center;
            /* font-size: 20px */
        }

        .despedida1 {
            text-align: center;
            color: #0030b6;
        }

        .despedida2 {
            text-align: center;
            font-style: italic;
            font-weight: 800;
            color: #0030b6;
        }

        .despedida3 {
            text-align: center;
            color: #0030b6;
        }

        .adjuto-text {
            font-size: 17px;
        }
    </style>
</head>

<body>

    <main>
        <section>
            <div class="container-contraseña1" style="font-size:20px">

                {{-- <img style='width:100%; margin:auto; display:block;' src="https://fmcaac.mx/img/img-views/cintillo.png"
                    alt=""> --}}
                <br><br>

                <h4 class="mensaje1">
                    Estimado congresista:
                </h4>
                <br>

                <p style="text-align: justify;">
                    Le mandamos las credenciales de acceso a la página web <a
                        href="http://www.ametd.online/login">ametd.online</a>
                </p>
                <br>
                <div class="contraseña-advertencia1">
                    <p style="font-size: 20px; line-height:1.5">

                        Credenciales: <br>
                        - Correo: {{ $mail }} <br>
                        - Contraseña: TemporalFMCA <br>
                    </p>
                </div>
                <br>
                <p>
                    Deberá iniciar sesión en la página web con las credenciales mencionadas anteriormente, al ingresar,
                    tendrá que actualizar su contraseña.
                    <br>
                    Es necesario realizar este cambio, ya que la contraseña indicada en este correo únicamente es
                    TEMPORAL, por lo que en un futuro, no podrá acceder a su perfil con ella, sino con la
                    nueva que debe crear.
                </p>
                <p class="despedida1">
                    Cordialmente
                </p>
                <p class="despedida2">
                    Comité organizador
                </p>
            </div>
        </section>
    </main>

</body>


</html>
