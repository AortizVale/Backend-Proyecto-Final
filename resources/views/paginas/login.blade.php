@extends('layout_app.auth')

@section('content')
    login pagina
    <a href="{{ route('home') }}">Regresar</a>
    <a href="{{ route('ingreso') }}">login exitoso</a>
@endsection
