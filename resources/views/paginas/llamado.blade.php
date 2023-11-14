@extends('layout_admin.main')

@section('content')

    <body class="fondo-azul-oscuro">
        <ul class="nav justify-content-center fondo-azul">
            <li class="nav-item">
                <div class="container-fluid ">
                    <a class="navbar-brand center" href="#">

                    </a>
                </div>
            </li>
        </ul>
        <br>
        <div class="container">

            <div class="row">

                <div class="col-md-7">
                    <table class="table table-striped ">
                        <thead>
                            <tr class="crecer-letra">
                                <th scope="col">Paciente</th>
                                <th scope="col">Consultorio</th>
                                <th scope="col">Médico</th>
                            </tr>
                        </thead>
                        <tbody class="crecer-uno">
                            @foreach ($llamados as $llamado)
                            @if ($llamado->num_llamado == 1) 
                            @php
                                $class = "table-warning"
                            @endphp
                            @elseif ($llamado->num_llamado == 2)
                            @php
                            $class = "table-warning"
                            @endphp
                            @else
                            @php
                            $class = "table-danger"
                            @endphp
                                
                            @endif
                            <tr class="crecer-letra {{$class}}">
                                <td scope="col">{{ $llamado->llegada->programacion->paciente->nombres }} {{ $llamado->llegada->programacion->paciente->apellidos }}</td>
                                <td scope="col">{{ $llamado->llegada->programacion->consultorio->nombre }}</td>
                                <td scope="col">{{ $llamado->llegada->programacion->medico->nombres }} {{ $llamado->llegada->programacion->medico->apellidos }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="col-md-5">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/presbicia.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/infografia.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/viruelaMono.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
