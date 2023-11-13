@extends('layout_admin.main')

@section('content')

    <body class="fondo-gris">
        <div class='container-text-center my-2'>
            <div class='row d-flex justify-content-center'>
                <div class='col-md-2'>
                    Paciente
                </div>
                <div class='col-md-2'>
                    Hora
                </div>
                <div class='col-md-2'>
                    Llamar
                </div>
                <div class='col-md-2'>
                    Quitar
                </div>
            </div>
            @foreach ($llegadas as $llegada)
                <br>
                <div class='row d-flex justify-content-center'>
                    <div class='col-md-2'>
                        {{ $llegada->programacion->paciente->nombres }} {{ $llegada->programacion->paciente->apellidos }}
                    </div>
                    <div class='col-md-2'>
                        {{ $llegada->programacion->fecha }} {{ $llegada->programacion->hora_inicio }}
                    </div>
                    <div class='col-md-2'>

                        @if (in_array($llegada->cod_llegada, $llamados_Realizados))
                                <form action='{{ route('gestor.llamar') }}' method='post'>
                                    @csrf
                                    <input type='hidden' name='cod_llegada' id='' value="{{ $llegada->cod_llegada }}">
                                    <input type='submit' name='confirmar_llegada' id='' value='segundo llamado'>
                                </form>
                            @else
                                <form action='{{ route('gestor.store') }}' method='post'>
                                    @csrf
                                    <input type='hidden' name='cod_llegada' id='' value="{{ $llegada->cod_llegada }}">
                                    <input type='submit' name='confirmar_llegada' id='' value='primer llamado'>
                                </form>
                            @endif

                        

                    </div>
                    <div class='col-md-2'>
                        <form action='{{ route('gestor.pasar') }}' method="post">
                            @csrf
                            <input type="hidden" name="cod_llegada" id=""
                                value={{ $llegada->cod_llegada }}>
                            <input type="submit" name="pasar" id="" value="Quitar">
                        </form>

                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </body>
@endsection
