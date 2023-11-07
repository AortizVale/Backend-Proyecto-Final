<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Inicio</title>
</head>

<body>
    {{-- La navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="img/logo_optica.jpg" alt="Bootstrap", width="150">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex justify-content-center">
                    <div class="mx-2">
                        <a class="btn btn-primary rounded-sm px-4 py-1 nav-link active" aria-current="page" href="{{ route('login') }}">Iniciar Sesión</a>
                    </div>
                    <div class="mx-2">
                        <a class="btn btn-primary rounded-sm px-4 py-1 nav-link active" aria-current="page" href="{{ route('registro') }}">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- El content --}}
    home

    {{-- El footer --}}
    <footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary ">

        <div class="row">
            <ul class="list-unstyled d-flex justify-content-lg-center">
                <li><a class="mx-3" href="#">Contáctenos</a></li>
                <li><a class="mx-3" href="#">Nuestros Servicios</a></li>
                <li><a class="mx-3" href="#">Politicas de Privacidad</a></li>
                <li><a class="mx-3" href="#">Terminos y Condiciones</a></li>
            </ul>
        </div>

        <div class='d-flex justify-content-center'>
            <div>&copy;<span id="year"> </span><span> Grand Optica. Todos los derechos reservados.</span></div>
        </div>
    </footer>

</body>

</html>
