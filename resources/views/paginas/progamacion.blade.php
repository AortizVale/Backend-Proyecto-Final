@extends('layout_admin.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Programacion</title>
    </head>

    <body>
        <div class="text-center">
            <legend>
                <h1> Programación de Citas </h1>
            </legend>

        </div>

        <div class="container align-items-center ">
            <div class="row align-items-center">
                <div class="col">
                    <div class="container">
                        <form class="well form-horizontal" action=" " method="post" id="contact_form">
                            <fieldset>

                                <!-- Form Name -->

                                
                                <!-- Text input-->

                                <div class="form-group mb-3">
                                    <div class="text-right">
                                        <h2>Grand Optica</h2>
                                        <br>
                                    </div>

                                    <label class="col-md-4 control-label text-right">Medico</label>

                                    <div class="col-md-12">
                                        <select class="form-select mt-3" required name="cod_medico">
                                            <option selected disabled value="">--Seleccione--</option>
                                            <option value="Cedula">1</option>
                                            <option value="Cedula de Extranjeria">2</option>
                                        </select>
                                        <br>
                                    </div>

                                    <label class="col-md-4 control-label text-right">Paciente</label>
                                    <div class="col-md-12">
                                        <select class="form-select mt-3" required name="cod_paciente">
                                            <option selected disabled value="">--Seleccione--</option>
                                            <option value="Cedula">1</option>
                                            <option value="Cedula de Extranjeria">2</option>
                                        </select>
                                        <br>
                                    </div>

                                    <label class="col-md-4 control-label text-right">Consultorio</label>
                                    <div class="col-md-12">
                                        <select class="form-select mt-3" required name="cod_consultorio">
                                            <option selected disabled value="">--Seleccione--</option>
                                            <option value="Cedula">1</option>
                                            <option value="Cedula de Extranjeria">2</option>
                                        </select>
                                        <br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Motivo de la consulta</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                <textarea class="form-control" name="descripcion" placeholder="Descripcion mínima"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                

                                <!-- Text input-->

                                <!-- Select Basic -->


                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col align-items-center ">

                    <!-- Text area -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Fecha de la cita</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                               
                                <input type="date" name="fecha" id="asd">
                                <br>
                                
                               
                                <label class="control-label">Hora Inicio</label>
                                <input type="time" name="hora_inicio" id="asd">
                                <br>
                                <label class="control-label">Hora Final</label>
                                <br>
                                <input type="time" name="hora_final" id="asd">


                            </div>
                        </div>
                    </div>

                    <!-- Success message -->


                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning">Enviar <span
                                    class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
