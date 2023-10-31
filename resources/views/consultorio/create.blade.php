@extends('layout_admin.main')

@section('content')
    <h1>Crear Consultorio</h1>
    <form action="{{route("consultorio.store")}}" method="post">
        @csrf
        <label for="nombre">Nombre del consultorio</label>
        <input type="text" name="nombre">
        <button type="submit">Crear</button>
    </form>
@endsection