@extends('layout_admin.main')

@section('content')

    <body>
        <br>
        <div class="container align-items-center ">
            <div class="row align-items-center">
                <div class="col">
                    <div class="container">
                        <form class="well form-horizontal" action="{{ route('paciente.store') }}" method="post" id="ingreso_paciente">
                            @csrf
                            <fieldset>

                                <!-- Form Name -->


                                <!-- Text input-->

                                <div class="form-group mb-3">
                                    <div class="text-right">
                                        <h2>Información Personal</h2>
                                    </div>
                                    
                                    <label class="col-md-4 control-label text-right">Nombres y Apellidos</label>

                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name="nombres" placeholder="Nombres" class="form-control"
                                                type="text">

                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name= "apellidos" placeholder="Apellidos" class="form-control"
                                                type="text">

                                        </div>
                                    </div>
                                </div>

                                <label class="col-md-4 control-label text-right">Tipo de Documento</label>

                                <div class="col-md-12">
                                    <select class="form-select mt-3" required name="tipo_doc">
                                        <option selected disabled value="">Tipo de Documento</option>
                                        <option value="Cedula">Cédula de Ciudadania</option>
                                        <option value="Cedula de Extranjeria">Cédula de Extranjeria</option>
                                    </select>
                                    
                                </div>


                                <label class="col-md-4 control-label text-right">Número de Documento</label>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="num_doc"
                                        placeholder="Numero de Documento" required>
                                    <div class="valid-feedback">Número Valido</div>
                                    <div class="invalid-feedback">Documento no puede quedar vacío</div>
                                </div>
                                <!-- Text input-->

                                <!-- Text input-->
                                <div class="form-group mb-3">
                                    <label class="col-md-4 control-label">Correo Electronico</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope"></i></span>
                                            <input name="correo" placeholder="Correo Electronico" class="form-control"
                                                type="text">
                                        </div>
                                    </div>
                                </div>


                            

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Fecha de Nacimiento</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                           
                                            <input type="date" name="fecha_nac" id="asd">
                                            <br>
                                           
                                            
            
                                        </div>
                                    </div>
                                </div>
                                <!-- Text input-->

                                <div class="form-group mb-3">
                                    <label class="col-md-4 control-label">Telefono</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-earphone"></i></span>
                                            <input name="telefono" placeholder="(320)2424400" class="form-control"
                                                type="number">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->


                                <div class="form-group mb-3">
                                    <label class="col-md-4 control-label">Dirección</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input name="direccion" placeholder="Dirección" class="form-control"
                                                type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-warning">Enviar <span
                                                class="glyphicon glyphicon-send"></span></button>
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

                    <!-- Success message -->


                    <!-- Button -->
                    
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
