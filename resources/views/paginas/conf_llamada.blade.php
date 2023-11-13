@extends('layout_admin.main')

@section('content')

<body class="fondo-gris">
    <div class='container-text-center my-2'>
        <div class='row d-flex justify-content-center'>
            <div class='col-md-2'>
                Paciente
            </div>
            <div class='col-md-2'>
                Dia/Hora
            </div>
            <div class='col-md-2'>
                Médico
            </div>
            <div class='col-md-2'>
                Consultorio
            </div>
            <div class='col-md-2'>
                Confirmar Llegada
            </div>
        </div>
        
       
                                            

        @foreach ($programaciones as $programacion)
        <br>
        <div class='row d-flex justify-content-center'>
            <div class='col-md-2'>
                {{$programacion->paciente->nombres}} {{$programacion->paciente->apellidos}}
            </div>
            <div class='col-md-2'>
                {{$programacion->fecha}} {{$programacion->hora_inicio}}
            </div>
            <div class='col-md-2'>
                {{$programacion->medico->nombres}} {{$programacion->medico->apellidos}}
            </div>
            <div class='col-md-2'>
                {{$programacion->consultorio->nombre}}
            </div>
            <div class='col-md-2'>
                <form action="{{ route('confirmacion.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="cod_program" id="" value={{$programacion->cod_program}}>
                    <input type="submit" name="confirmar_llegada" id="" value="Confirmar">
                </form>
                
            </div>
        </div>
        <br>
        @endforeach
    </div>
</body>
@endsection
