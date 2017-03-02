<?php if(Session::get('usuario')){ ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        {!!Html::style('css/bootstrap.min.css')!!}
        
        {!!Html::style('css/bootstrap-theme.min.css')!!}
        
        {!!Html::style('css/main.css')!!}
        
        {!!Html::style('css/estilos.css')!!}
        
        {!!Html::script('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')!!}
        
        {!!Html::script('js/vendor/jquery-3.1.1.min.js')!!}
        
        {!!Html::script('css/jquery-ui.css')!!}
        
        <!-- datatable -->

          {!!Html::style('media/css/jquery.dataTables.css')!!}
          {!!Html::style('media/css/jquery.dataTables_themeroller.css')!!}
          {!!Html::style('media/css/jquery.dataTables.min.css')!!}
          {!!Html::style('media/css/dataTables.bootstrap.css')!!}
          {!!Html::style('media/css/dataTables.bootstrap.min.css')!!}
          {!!Html::style('media/css/dataTables.bootstrap4.css')!!}
          
          {!!Html::script('media/js/dataTables.bootstrap.js')!!}
          {!!Html::script('media/js/dataTables.bootstrap.min.js')!!}
          {!!Html::script('media/js/dataTables.bootstrap4.js')!!}
		  {!!Html::script('media/js/dataTables.bootstrap4.min.js')!!}
          {!!Html::script('media/js/jquery.js')!!}
          {!!Html::script('media/js/jquery.dataTables.min.js')!!}
          {!!Html::script('media/js/jquery.dataTables.js')!!}
          {!!Html::script('media/js/responsive.bootstrap4.min.js')!!}
          {!!Html::script('media/js/dataTables.responsive.min.js')!!}
          {!!Html::script('media/js/bootstrap.min.js')!!}

    </head>

    <body>

        <!-- Cabecera -->
        <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Sistema de Control de Procesos </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/usuario">Inicio</a></li>
                            <li class="dropdown">
                                <a href="#about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion de Registro<span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <li><a href="registro" >Registro de Alumnos</a></li>
                                    <li><a href="#agregarpar">Registro de trabajores</a></li>
                                    <li><a href="#cursosdoc">Asignacion de Cursos</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Matricula<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#about">Registrar de Matricula</a></li>
                                    <li><a href="#about">Modificar de Matricula</a></li>
                                    <li><a href="#about">Eliminar de Matricula</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Control de Notas<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#about">Registrar Notas</a></li>
                                    <li><a href="#about">Rendimiento de Alumnos</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenimiento del sistema<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#about">Fijar fecha limite para insercion de notas</a></li>
                                    <li><a href="#about">Extender fecha limite</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro de Actividades<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#about">Historial de actividades en el sistema</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Boletas de Notas<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#about">Impresion de Notas por unidad y bimestral</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Configurar cuenta</a></li>

                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Extension</li>
                                    <li><a href="/validador?valor=salir"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Salir</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Cabecera -->



        <!-- Menu otra vista -->
        <div class="container">

            <!-- Nav tabs -->
            <div class="panel-default">
                <div class="panel-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#reg_trab" aria-controls="reg_trab" role="tab" data-toggle="tab">Registro de Trabajadores</a></li>
                        <li role="presentation"><a href="#reg_alumnos" aria-controls="reg_alumnos" role="tab" data-toggle="tab">Registro de Alumnos</a></li>
                        <li role="presentation"><a href="#agregarpar" aria-controls="agregarpar" role="tab" data-toggle="tab">Mostrar alumnnos</a></li>
                        <li role="presentation"><a href="#cursosdoc" aria-controls="cursosdoc" role="tab" data-toggle="tab">Asignacion de curso</a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="reg_trab">
                            <div class="panel panel-default">
                                <div class="panel panel-heading">
                                    Ingrese los datos
                                </div>
                                <div class="panel panel-body">
                                  @yield('content')
                                </div>

                            </div>
                                  @yield('trabajador')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="reg_alumnos">
                            <div class="panel panel-default">
                                <div class="panel panel-heading">
                                    Ingrese los datos
                                </div>
                                <div class="panel panel-body">
                                   @yield('content2')

                                </div>

                            </div>
                         @yield('registro_alumno')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="agregarpar">
                            <div class="panel panel-default">
                                <div class="panel panel-heading">Alumnos en el sistema</div>
                                <div class="panel panel-body">
                                    <div class="panel-group">
                                        <div id="mostrarp"><h1>Seleccione un alumno</h1></div>
                                        <div id="mostrar">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="text-center"><h1>Datos Personales</h1></div>
                                                    <div class="row">
                                                        <h3 class="col-sm-6"><label class="label label-primary" >Nombre:</label></h3>
                                                        <h3 id="dpnombre" class="col-sm-6"><label class="label label-default" >Nombre:</label></h3>
                                                    </div>
                                                    <div class="row">
                                                        <h3 class="col-sm-6"><label class="label label-primary" >Apellido Paterno:</label></h3>
                                                        <h3 id="dpapellidop" class="col-sm-6"><label class="label label-default" >Apellido Paterno:</label></h3>
                                                    </div>
                                                    <div class="row">
                                                        <h3  class="col-sm-6"><label class="label label-primary" >Apellido Materno:</label></h3>
                                                        <h3 id="dpapellidom" class="col-sm-6"><label class="label label-default" >Apellido Materno:</label></h3>
                                                    </div>
                                                    <div class="row">
                                                        <h3 class="col-sm-6"><label class="label label-primary" >Sexo:</label></h3>
                                                        <h3 id="dpsexo" class="col-sm-6"><label class="label label-default" >Sexo:</label></h3>
                                                    </div>
                                                    <div class="row">
                                                        <h3 class="col-sm-6"><label class="label label-primary" >Edad:</label></h3>
                                                        <h3 id="dpedad" class="col-sm-6"><label class="label label-default" >Edad:</label></h3>
                                                    </div>

                                                </div>
                                                <div class="col-sm-4 text-center"><h1>Foto de perfil</h1><br><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxWm1vpBuG1UT7Jfz5hXnesog_EK9nHcDaw_f5YPJjAybFwAC7"/></div>

                                            </div>

                                            <div class="row form-group visible-lg">
                                                <label for="reg_parientes" class="control-label col-sm-3">Parientes</label>
                                                <div class="col-sm-9" ><!-- Button trigger modal -->
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Codigo DNI</th>
                                                                <th>Apellido Paterno</th>
                                                                <th>Apellido Materno</th>
                                                                <th>Telefono</th>
                                                                <th>Edad</th>
                                                                <th>Sexo</th>
                                                                <th>Parentesco</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="cont_t">
                                                        </tbody>
                                                    </table>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                                        Agregar Parientes
                                                    </button>
                                                    <button class="btn btn-primary" onclick="volver()">Volver <span class="glyphicon glyphicon-eject" aria-hidden="true"></span></button>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                          @yield('mostraralumno')
                          



                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Actualizar Datos</h4>
                                        </div>
                                        <div class="modal-body" id="contenido">
                                            <input required type=number class="form-control" id="freg_codigo" placeholder="DNI">
                                            <input required type="text" class="form-control" id="freg_apellidos_p" placeholder="Apellidos Paterno">
                                            <input required type="text" class="form-control" id="freg_apellidos_m" placeholder="Apellidos Materno">
                                            <input required type="text" class="form-control" id="freg_nombres" placeholder="Nombres">
                                            <input required type="number" class="form-control" id="freg_edad" placeholder="Edad">
                                            <label>
                                                <input class="btn btn-primary active" type="radio" autocomplete="off" checked name="fareg_sexo" value="Masculino" > Masculino
                                            </label>
                                            <label>
                                                <input class="btn btn-primary" type="radio" autocomplete="off" name="fareg_sexo" value="Femenino"> Femenino
                                            </label>
                                            <input required type="number" class="form-control" id="freg_telf" placeholder="Celular">
                                            <label>
                                                <input class="btn btn-primary active" type="radio" autocomplete="off" checked name="fareg_par" value="tipo1" > tipo1
                                            </label>
                                            <label>
                                                <input class="btn btn-primary" type="radio" autocomplete="off" name="fareg_par" value="tipo2"> tipo1
                                            </label>
                                            <label>
                                                <input class="btn btn-primary" type="radio" autocomplete="off" name="fareg_par" value="tipo3"> otros
                                            </label>
                                        </div>
                                        <script>
                                            function enviar() {
                                                var dni = $("#freg_codigo").val();
                                                var app = $("#freg_apellidos_p").val();
                                                var apm = $("#freg_apellidos_m").val();
                                                var nom = $("#freg_nombres").val();
                                                var edad = $("#freg_edad").val();
                                                var telf = $("#freg_telf").val();
                                                var sexo = "a";
                                                var par = "a";
                                                var salida = "<tr> <td>" + dni + "</td>" + "<td>" + app + "</td>" + "<td>" + nom + "</td>" + "<td>" + edad + "</td>\n\
                                                " + "<td>" + telf + "</td>" + "<td>" + sexo + "</td>" + "<td>" + par + "</td></tr>";

                                                $("#cont_t").html($("#cont_t").html() + salida);
                                            }

                                        </script>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="enviar()">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="cursosdoc">
                            <div class="panel panel-default">
                                <div class="panel panel-heading">
                                    Ingrese sus datos
                                </div>
                                <div class="panel panel-body">

                                    <div class="form-group">                                        
                                        <label class="control-label col-sm-2">Escoja Docente</label>                                        
                                        <div class="btn-group col-sm-10">
                                            <select name="docente" class=" btn btn-primary" >
                                                <option>Escoja Docente</option>
                                                <option>Juan</option>
                                                <option>Jorge</option>
                                                <option>Enrrique</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group"  id="ver">
                                        <label for="nivel" class="control-label col-sm-2">Nivel Academico: </label>
                                        <div class="btn-group col-sm-10" data-toggle="buttons" >
                                            <label class="btn btn-primary active">
                                                <input type="radio" autocomplete="off"  name="nivel" value="Primaria" > Primaria
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" autocomplete="off" name="nivel" value="Secundaria"> Secundaria
                                            </label>

                                        </div>
                                    </div>
                                    <div class="form-group" id = "group_Grado" style='display:none;'>                                        
                                        <label class="control-label col-sm-2">Escoja Grado</label>                                        
                                        <div class="btn-group col-sm-10">
                                            <select name="grado" id="selecgrado" style='display:none;' class=" btn btn-primary">  
                                                <option>ver</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group"  id = "group_Area" style='display:none;'>                                        
                                        <label class="control-label col-sm-2">Escoja Area</label>                                        
                                        <div class="btn-group col-sm-10">
                                            <select name="area" id="selecarea" style='display:none;' class=" btn btn-primary">  

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id = "group_curso" style='display:none;'>                                      
                                        <label class="control-label col-sm-2">Escoja Curso</label>                                        
                                        <div class="btn-group col-sm-10">
                                            <select name="curso" id="seleccurso" style='display:none;' class=" btn btn-primary">  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="guardar">
                                        <div class="col-sm-2" ></div>
                                        <div class="col-sm-10" ><button type="submit" class="btn btn-primary">Guardar</button> </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>



        <!-- Modal -->
        <div class="modal fade" id="editarempleados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Llenar Datos</h4>
                    </div>
                    <div class="modal-body" id="contenido">
                        <form id="empleados" class="" >                                           
                            <div class="form-group " id="gcodigo">
                                <label for="reg_codigo" class="control-label col-sm-3">Codigo (DNI)</label>
                                <div class="col-sm-9 " id="ccodigo" >
                                    <input required type="text" class="form-control" id="edreg_codigo" placeholder="DNI" maxlength="8" aria-describedby="inputSuccess3Status" disabled>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reg_nombres" class="control-label col-sm-3 ">Nombres</label>
                                <div class="col-sm-9" >
                                    <input required type="text" class="form-control" id="edreg_nombres" placeholder="Nombres">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reg_apellidos_p" class="control-label col-sm-3">Ap. Paterno</label>
                                <div class="col-sm-9" >
                                    <input required type="text" class="form-control" id="edreg_apellidos_p" placeholder="Apellidos Paterno">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reg_apellidos_m" class="control-label col-sm-3">Ap. Materno</label>
                                <div class="col-sm-9" >
                                    <input required type="text" class="form-control" id="edreg_apellidos_m" placeholder="Apellidos Materno">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="reg_edad" class="control-label col-sm-3">Edad</label>
                                <div class="col-sm-9" >
                                    <input required type="text" class="form-control"  maxlength="2" id="edreg_edad" placeholder="Edad">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="reg_telf" class="control-label col-sm-3">Nº Telf/Cel</label>
                                <div class="col-sm-9" >
                                    <input required type="email" class="form-control" id="edreg_telf" maxlength="9" placeholder="Nº Telf/Cel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reg_fech" class="control-label col-sm-3">Fecha Nac.</label>
                                <div class="col-sm-9" >
                                    <input required type="text" class="form-control" id="edreg_fech">
                                </div>
                            </div>




                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="actualizar()">Actualizar</button>
                        </div>
                            </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="editaralumnos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Llenar Datos</h4>
                    </div>
                    <div class="modal-body" id="contenido">
                        <form id="empleados" class="" >                                           
                            <div class="form-group " id="gcodigo">
                                <label for="reg_codigo" class="control-label col-sm-3">Codigo (DNI)</label>
                                <div class="col-sm-9 " id="ccodigo" >
                                    <input required type="text" class="form-control" id="edareg_codigo" placeholder="DNI" maxlength="8" aria-describedby="inputSuccess3Status" disabled>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reg_nombres" class="control-label col-sm-3 ">Nombres</label>
                                <div class="col-sm-9" >
                                    <input required type="text" class="form-control" id="edareg_nombres" placeholder="Nombres">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reg_apellidos_p" class="control-label col-sm-3">Ap. Paterno</label>
                                <div class="col-sm-9" >
                                    <input required type="text" class="form-control" id="edareg_apellidos_p"  placeholder="Apellidos Paterno">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reg_apellidos_m" class="control-label col-sm-3">Ap. Materno</label>
                                <div class="col-sm-9" >
                                    <input required type="text" class="form-control" id="edareg_apellidos_m" placeholder="Apellidos Materno">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reg_sexo" class="control-label col-sm-3 ">Sexo: </label>
                                <div class="btn-group col-sm-9" data-toggle="buttons" id="sexsel">


                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reg_edad" class="control-label col-sm-3">Edad</label>
                                <div class="col-sm-9" >
                                    <input required type="number" class="form-control"  maxlength="2" id="edareg_edad" placeholder="Edad">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="reg_telf" class="control-label col-sm-3">Nº Telf/Cel</label>
                                <div class="col-sm-9" >
                                    <input required type="email" class="form-control" id="edareg_telf" maxlength="9" placeholder="Nº Telf/Cel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reg_fech" class="control-label col-sm-3">Fecha Nac.</label>
                                <div class="col-sm-9" >
                                    <input required type="date" class="form-control" id="edareg_fech" placeholder="E-mail">
                                </div>
                            </div>




                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="actualizar()">Actualizar</button>
                        </div>
                            </form>
                    </div>
                </div>
            </div>

        </div>




        <div class="container">
            <!-- Example row of columns -->
            <hr>
            <footer>
                <p>&copy; Company 2015</p>
            </footer>
        </div> <!-- /container -->        


          {!!Html::script('js/script.js')!!}

        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
<?php }
else{
	Session::forget('usuario');
	 return redirect()->to('/')->send();			
			}
?>