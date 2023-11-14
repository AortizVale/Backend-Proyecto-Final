<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">



    <title>Grand Optica</title>
</head>

<body>
    {{-- La navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logo_optica.png') }}" alt="Bootstrap", width="150">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                @if (auth()->check())
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu">
                                @can('ingreso')
                                    <li><a class="dropdown-item" href="{{ route('ingreso') }}">Registro de pacientes</a></li>
                                @endcan
                                @can('programacion')
                                    <li><a class="dropdown-item" href="{{ route('programacion') }}">Programacion de
                                            citas</a>
                                    </li>
                                @endcan
                                @can('confirmacion')
                                    <li><a class="dropdown-item" href="{{ route('confirmacion') }}">Confirmar Llegada</a>
                                    </li>
                                @endcan
                                @can('gestor')
                                    <li><a class="dropdown-item" href="{{ route('gestor') }}">Llamar a pacientes</a></li>
                                @endcan
                                @can('llamada')
                                    <li><a class="dropdown-item" href="{{ route('llamado') }}">Pantalla de llamados</a></li>
                                @endcan
                                @can('consultorio')
                                    <li><a class="dropdown-item" href="{{ route('consultorio.create') }}">Creación de
                                            Consultorios</a></li>
                                @endcan
                                {{-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                            </ul>
                        </li>
                    </ul>
                @else
                <div class="me-auto"></div>
                @endif
                <div class="d-flex justify-content-center">
                    <div class="mx-2 d-flex">
                        @if (auth()->check())
                            <p class="">Bienvenido, {{ auth()->user()->nombres }} {{ auth()->user()->apellidos }} </p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                            @can('registrar')
                                <a class="btn btn-primary rounded-sm px-4 py-2 nav-link active mx-2" aria-current="page"
                                    href="{{ route('registro') }}">Registrar Usuario</a>
                            @endcan

                            <a class="btn btn-primary rounded-sm px-4 mx-2 py-2 nav-link active" aria-current="page"
                                href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>
                        @else
                            <div class="d-flex justify-content-end" >
                                <a class="btn btn-primary rounded-sm px-4 py-2 nav-link active mx-2"
                                    aria-current="page" href="{{ route('login') }}">Ingresar</a> 
                            </div>
                        @endif



                    </div>
                </div>
                @if (auth()->check())
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                @endif
            </div>
        </div>
    </nav>

    {{-- El content --}}
    @yield('content')

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
