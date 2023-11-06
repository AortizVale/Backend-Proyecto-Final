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
                            <form class="requires-validation" novalidate>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="name" placeholder="Nombre Completo"
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
                                    <input class="form-control" type="text" name="Documento de Identificacion" placeholder="Numero de Documento"
                                        required>
                                    <div class="valid-feedback">Número Valido</div>
                                    <div class="invalid-feedback">Documento no puede quedar vacío</div>
                                </div>


                                <div class="col-md-12">
                                    <select class="form-select mt-3" required>
                                        <option selected disabled value="">Posición</option>
                                        <option value="jweb">Medico especialista</option>
                                        <option value="sweb">Secretaria</option>

                                    </select>
                                    <div class="valid-feedback">Rol valido.</div>
                                    <div class="invalid-feedback">Por favor selecciona un rol.</div>
                                </div>





                                <div class="col-md-12 mt-3">
                                    <label class="mb-3 mr-1" for="gender">Genero: </label>

                                    <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off"
                                        required>
                                    <label class="btn btn-sm btn-outline-secondary" for="male">Hombre</label>

                                    <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off"
                                        required>
                                    <label class="btn btn-sm btn-outline-secondary" for="female">Mujer</label>

                                    <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off"
                                        required>
                                    <label class="btn btn-sm btn-outline-secondary" for="secret">Prefiero no
                                        decirlo</label>
                                    <div class="valid-feedback mv-up">Seleccionaste un Genero!</div>
                                    <div class="invalid-feedback mv-up">Por favor selecciona un genero</div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                        required>
                                    <label class="form-check-label">Yo confirmo que mis datos son validos y
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
