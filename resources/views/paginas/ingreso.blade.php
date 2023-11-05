@extends('layout_admin.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ingreso</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <div class="text-center">
            <legend><h1> Ingreso Pacientes </h1></legend>
            <br>
        </div>
        <br>

        <div class="container align-items-center ">
            <div class="row align-items-center">
                <div class="col">
                    <div class="container">
                        <form class="well form-horizontal" action=" " method="post" id="contact_form">
                            <fieldset>

                                <!-- Form Name -->
                                

                                <!-- Text input-->

                                <div class="form-group">
                                    <div class="text-right"><h2>Información Personal</h2></div>
                                    <br>
                                    <label class="col-md-4 control-label text-right">Nombres y Apellidos</label>

                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name="first_name" placeholder="Nombres" class="form-control" type="text">

                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name= "last_name" placeholder="Apellidos" class="form-control" type="text">

                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Correo Electronico</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope"></i></span>
                                            <input name="email" placeholder="Correo Electronico" class="form-control"
                                                type="text">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Telefono</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-earphone"></i></span>
                                            <input name="phone" placeholder="(320)2424400" class="form-control"
                                                type="text">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Ciudad</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input name="city" placeholder="Bogotá" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Dirección</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input name="address" placeholder="Dirección" class="form-control"
                                                type="text">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->

                                <!-- Select Basic -->

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Departamento</label>
                                    <div class="col-md-4 selectContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                            <select name="state" class="form-control selectpicker">
                                                <option value=" ">Seleccionar</option>
                                                <option>Santander</option>
                                                <option>Norte de Santander</option>
                                                <option>Cesar</option>
                                                <option>Magdalena</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col align-items-center ">
                    <div class="col-md-6 ">
                        <label class="col-md-4 control-label"> <h2> Prioridad </h2> </label>
                        <div class="col-md-8">
                            <div class="radio">
                                <br>
                                <label>
                                    <input type="radio" name="hosting" value="yes" /> Adulto Mayor
                                </label>
                            </div>
                            <br>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> Embarazo
                                </label>
                            </div>
                            <br>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> Discapacidad
                                </label>
                            </div>
                            <br>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> Alta ceguera
                                </label>
                            </div>
                            <br>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> No aplica
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Text area -->
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Descripción del Paciente</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="comment" placeholder="Descripcion mínima"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Success message -->
                   

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning">Send <span
                                    class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    </html>
@endsection
