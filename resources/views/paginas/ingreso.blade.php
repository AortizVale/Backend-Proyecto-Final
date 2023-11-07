@extends('layout_admin.main')

@section('content')

    <body>
        <div class="text-center">
            <legend>
                <h1> Ingreso Pacientes </h1>
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
                                        <h2>Información Personal</h2>
                                    </div>
                                    
                                    <label class="col-md-4 control-label text-right">Nombres y Apellidos</label>

                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name="first_name" placeholder="Nombres" class="form-control"
                                                type="text">

                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name= "last_name" placeholder="Apellidos" class="form-control"
                                                type="text">

                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->

                                <!-- Text input-->
                                <div class="form-group mb-3">
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

                                <div class="form-group mb-3">
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

                                <div class="form-group mb-3">
                                    <label class="col-md-4 control-label">Ciudad</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input name="city" placeholder="Bogotá" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
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

                                <div class="form-group mb-3">
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
                        <label class="col-md-4 control-label">
                            <h2> Prioridad </h2>
                        </label>
                        <div class="col-md-8">
                            <div class="radio mb-2">
                                
                                <label>
                                    <input type="radio" name="hosting" value="yes" /> Adulto Mayor
                                </label>
                            </div>
                            
                            <div class="radio mb-2">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> Embarazo
                                </label>
                            </div>
                            
                            <div class="radio mb-2">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> Discapacidad
                                </label>
                            </div>
                           
                            <div class="radio mb-2">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> Alta ceguera
                                </label>
                            </div>
                            
                            <div class="radio mb-2">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> No aplica
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Text area -->
                    
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
