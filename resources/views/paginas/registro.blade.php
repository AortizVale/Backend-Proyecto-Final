@extends('layout_app.auth')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/registro.css">
        <title>Registro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </head>

    <body>
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Registro Funcionarios</h3>
                            <p>GrandOptica </p>
                            <form class="requires-validation" novalidate action="{{ route('registro.store') }}"
                                method="post">
                                @csrf
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="nombres" placeholder="Nombres"
                                    
                                        required>
                                    <div class="valid-feedback">Usuario Valido</div>
                                    <div class="invalid-feedback">El nombre de Usuario no puede quedar vacio</div>

                                    <input class="form-control" type="text" name="apellidos" placeholder="Apellidos"
                                    
                                        required>
                                    <div class="valid-feedback">Usuario Valido</div>
                                    <div class="invalid-feedback">El nombre de Usuario no puede quedar vacio</div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email"
                                        placeholder="Correo Electronico" required>
                                    <div class="valid-feedback">Email valido</div>
                                    <div class="invalid-feedback">Email no puede quedar vacio</div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="password" name="password" placeholder="Contraseña"
                                        required>
                                    <div class="valid-feedback">Contraseña valida</div>
                                    <div class="invalid-feedback">Contraseña no puede quedar vacia</div>
                                </div>

                                <div class="col-md-12">
                                    <select class="form-select mt-3" required name="tipo_doc">
                                        <option selected disabled value="">Tipo de Documento</option>
                                        <option value="Cedula">Cédula de Ciudadania</option>
                                        <option value="Cedula de Extranjeria">Cédula de Extranjeria</option>
                                    </select>
                                    
                                </div>





                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="num_doc"
                                        placeholder="Numero de Documento" required>
                                    <div class="valid-feedback">Número Valido</div>
                                    <div class="invalid-feedback">Documento no puede quedar vacío</div>
                                </div>


                                <div class="col-md-12">
                                    <select class="form-select mt-3" required name="rol">
                                        <option selected disabled value="">---Seleccione----</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach

                                    </select>
                                    <div class="valid-feedback">Rol valido.</div>
                                    <div class="invalid-feedback">Por favor selecciona un rol.</div>

                                    <br>
                                </div>





                                

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                        required>
                                    <label class="form-check-label">Confirmo que los datos son validos y
                                        correctos.</label>
                                    <div class="invalid-feedback">Por favor confirma que tus datos son validos y correctos.
                                    </div>
                                </div>


                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>
    <a href="{{ route('home') }}">Regresar</a>
@endsection
