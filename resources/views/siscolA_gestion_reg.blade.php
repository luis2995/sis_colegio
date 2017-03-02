@extends('layouts.registro')
@section('content')
 
   <form id="empleados" action="/validador">
                                        <div class="form-group">
                          
                                            <label for="reg_codigo" class="control-label col-xs-2">Codigo (DNI)</label>
                                            <div class="col-xs-10">
                                                <input required type=number class="form-control" name="reg_codigo" id="reg_codigo" placeholder="DNI">
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_nombres" class="control-label col-xs-2">Nombres</label>
                                            <div class="col-xs-10" >
                                                <input required type="text" name="reg_nombres" class="form-control" id="reg_nombres" placeholder="Nombres">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_apellidos_p" class="control-label col-xs-2">Apellidos Paterno</label>
                                            <div class="col-xs-10" >
                                                <input required type="text" name="reg_apellidos_p" class="form-control" id="reg_apellidos_p" placeholder="Apellidos Paterno">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_apellidos_m" class="control-label col-xs-2">Apellidos Materno</label>
                                            <div class="col-xs-10" >
                                                <input required type="text" name="reg_apellidos_m" class="form-control" id="reg_apellidos_m" placeholder="Apellidos Materno">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="reg_edad" class="control-label col-xs-2">Edad</label>
                                            <div class="col-xs-10" >
                                                <input required type="number" name="reg_edad" class="form-control" id="reg_edad" placeholder="Edad">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="reg_email" class="control-label col-xs-2">E-mail</label>
                                            <div class="col-xs-10" >
                                                <input required type="email" name="reg_email" class="form-control" id="reg_email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_telf" class="control-label col-xs-2">Nº Telf/Cel</label>
                                            <div class="col-xs-10" >
                                                <input required type="text" name="reg_telf" class="form-control" id="reg_telf" placeholder="Nº Telf/Cel">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_fech" class="control-label col-xs-2">Fecha de Nacimiento</label>
                                            <div class="col-xs-10" >
                                                <input required type="date" name="reg_fech" class="form-control" id="reg_fech" placeholder="Fecha">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_direccion" class="control-label col-xs-2">Direccion</label>
                                            <div class="col-xs-10" >
                                                <textarea required rows="3" name="reg_direccion" class="form-control" id="reg_direccion" placeholder="Direccion"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <label for="cargo" class="control-label col-xs-2">Cargo</label>
                                            <div class="btn-group col-xs-10" data-toggle="buttons" onChange="myFunction()">
                                                <label class="btn btn-primary active">
                                                    <input type="radio" autocomplete="off" checked name="reg_cargo" value="Secretaria" > Secretaria
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" autocomplete="off" name="reg_cargo" value="Docente"> Docente
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" autocomplete="off" name="reg_cargo" value="Auxiliar"> Auxiliar
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div id="demo" >

                                            </div>
                                        </div>

                                        <button type="submit"  name="valor" value="registro" class="btn btn-primary">Guardar</button>
</form>
@stop
@section('content2')
 <form action="/validador">
                                        <div class="form-group">
                                            <label for="reg_codigo" class="control-label col-sm-3">Codigo (DNI)</label>
                                            <div class="col-sm-9">
                                                <input required type=number name="reg_codigo" class="form-control" id="reg_codigo" placeholder="DNI">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_nombres" class="control-label col-sm-3">Nombres</label>
                                            <div class="col-sm-9" >
                                                <input required type="text" name="reg_nombres" class="form-control" id="reg_nombresreg_nombres" placeholder="Nombres">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_apellidos_p" class="control-label col-sm-3">Apellidos Paterno</label>
                                            <div class="col-sm-9" >
                                                <input required type="text" name="reg_apellidos_p" class="form-control" id="reg_apellidos_p" placeholder="Apellidos Paterno">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_apellidos_m" class="control-label col-sm-3">Apellidos Materno</label>
                                            <div class="col-sm-9" >
                                                <input required type="text" name="reg_apellidos_m" class="form-control" id="reg_apellidos_m" placeholder="Apellidos Materno">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="reg_edad" class="control-label col-sm-3">Edad</label>
                                            <div class="col-sm-9" >
                                                <input required type="number" name="reg_edad" class="form-control" id="reg_edad" placeholder="Edad">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_email" class="control-label col-sm-3">E-mail</label>
                                            <div class="col-sm-9" >
                                                <input required type="email" name="reg_email" class="form-control" id="reg_email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_telf" class="control-label col-sm-3">Nº Telf/Cel</label>
                                            <div class="col-sm-9" >
                                                <input required type="number" name="reg_telf" class="form-control" id="reg_telf" placeholder="Nº Telf/Cel">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_fech" class="control-label col-sm-3">Fech Nac.</label>
                                            <div class="col-sm-9" >
                                                <input required type="date" name="reg_fech" class="form-control" id="reg_fech" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_direccion" class="control-label col-sm-3">Direccion</label>
                                            <div class="col-sm-9" >
                                                <textarea required rows="3" name="reg_direccion" class="form-control" id="reg_direccion" placeholder="Direccion"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_sexo" class="control-label col-sm-3 ">Sexo: </label>
                                            <div class="btn-group col-sm-9" data-toggle="buttons" onChange="myFunction()">
                                                <label class="btn btn-primary active">
                                                    <input type="radio" autocomplete="off" checked name="areg_sexo" value="Masculino" > Masculino
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" autocomplete="off" name="areg_sexo" value="Femenino"> Femenino
                                                </label>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_hobbies" class="control-label col-sm-3">Hobbies del estudiante</label>
                                            <div class="col-sm-9" >
                                                <textarea required rows="3" name="reg_hobbies" class="form-control" id="reg_hobbies" placeholder="Hobbies del estudiante"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_observaciones" class="control-label col-sm-3">Observaciones medicas del estudiante</label>
                                            <div class="col-sm-9" >
                                                <textarea required rows="3"  name="reg_observaciones" class="form-control" id="reg_observaciones" placeholder="Observaciones medicas del estudiante"></textarea>
                                            </div>
                                        </div>
                                         <input type="hidden" name="reg_cargo" value="Alumno">

                                        <div class="form-group">
                                            <div class="col-sm-3" ></div>
                                            <div class="col-sm-9" ><button  name="valor" value="registro" type="submit" class="btn btn-primary">Guardar</button> </div>
                                        </div>

                                    </form>
@stop


@section('trabajador')
                            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Cargo</th>
                                        <th>Codigo</th>
                                        <th>Nombres</th>
                                        <th>A Paterno</th>
                                        <th>A Materno</th>
                                        <th>Edad</th>
                                        <th>Telefono</th>
                                        <th>Nacimiento</th>
                                     
                                        <th>Mantenimiento</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Cargo</th>
                                        <th>Codigo</th>
                                        <th>Nombres</th>
                                        <th>A Paterno</th>
                                        <th>A Materno</th>
                                        <th>Edad</th>
                                        <th>Telefono</th>
                                        <th>Nacimiento</th>
                                        
                                        <th>Mantenimiento</th>
                                    </tr>
                                </tfoot>
                                <tbody>  
                   <?php $db=new PDO('mysql:host=sql49.hostinger.es;dbname=u571858794_bd1','u571858794_us1', '8d5C6IwWxQfT');
			      $sql=$db->prepare("call pro_mostrar_todostrabajadores"); 
			      $sql->execute();
			      $filas=$sql->rowCount();   					  									           
				$i=2;
			        for($j=0;$j<$filas;$j++){
			     $value= $sql->fetch(PDO::FETCH_ASSOC); 
							?>
                                        <tr>
                                        <td><?php echo $value['cargo']; ?> </td>
                                        <td><?php echo $value['SGC_secr_dni']; ?> </td>
                                        <td><?php echo $value['SGC_secr_nombres']; ?> </td>
                                        <td><?php echo $value['SGC_secr_apepate']; ?> </td>
                                        <td><?php echo $value['SGC_secr_apemate']; ?> </td>
                                        <td><?php echo $value['SGC_secr_edad']; ?> </td>
                                        <td><?php echo $value['SGC_secr_telefono']; ?> </td>
                                        <td><?php echo $value['SGC_secr_fecha_nac']; ?> </td>
                                        
                                     
                                 
                             
                                    

                                        <td><center><button onclick="editartabla(<?php echo $i;?>)"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                    <button onclick="eliminar(<?php echo $i;?>)"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></center></td>
                                   </tr>
                                  
                              <?php $i++; }
									
									?>
                                </tbody>
                            </table>
@stop
@section('mostraralumno')
  <table id="datosalumnosas" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombres</th>
                                        <th>A Paterno</th>
                                        <th>A Materno</th>
                                        <th>Sexo</th>
                                        <th>Edad</th>
                                        <th>Telefono</th>
                                        <th>Nacimiento</th>                                        
                                        <th>Mantenimiento</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                   
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombres</th>
                                        <th>A Paterno</th>
                                        <th>A Materno</th>
                                        <th>Sexo</th>
                                        <th>Edad</th>
                                        <th>Telefono</th>
                                        <th>Nacimiento</th>                                       
                                        <th>Mantenimiento</th>
                                    </tr>
                                </tfoot>
                                <tbody>
               <?php  $db=new PDO('mysql:host=sql49.hostinger.es;dbname=u571858794_bd1','u571858794_us1', '8d5C6IwWxQfT');
                      $sql=$db->prepare("call pro_mostrar_alumnos"); 
                      $sql->execute();
		      $datos= $sql->fetchAll(); 
		      $i=2;
		      foreach($datos as $value){
											    
		  ?>
                               
                                    <tr>
                                        <td><?php echo $value[0]; ?></td>
                                        <td><?php echo $value[1]; ?></td>
                                        <td><?php echo $value[2]; ?></td>
                                        <td><?php echo $value[3]; ?></td>
                                        <td><?php echo $value[4]; ?></td>
                                        <td><?php echo $value[5]; ?></td>
                                        <td><?php echo $value[6]; ?></td>
                                        <td><?php echo $value[7]; ?></td>                                       
                                        <td><button onclick="editartablaalum(<?php echo $i;?>)"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                            <button onclick="mostrarinfo(<?php echo $i;?>)"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button></td>
                                    </tr>
                                         
                              <?php $i++; }
										
									?>
                              
                                </tbody>
                            </table>
@stop
@section('registro_alumno')
   <table id="datosalumnos" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombres</th>
                                        <th>A Paterno</th>
                                        <th>A Materno</th>
                                        <th>Sexo</th>
                                        <th>Edad</th>
                                        <th>Telefono</th>
                                        <th>Nacimiento</th>                                        
                                        <th>Mantenimiento</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombres</th>
                                        <th>A Paterno</th>
                                        <th>A Materno</th>
                                        <th>Sexo</th>
                                        <th>Edad</th>
                                        <th>Telefono</th>
                                        <th>Nacimiento</th>                                       
                                        <th>Mantenimiento</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $db=new PDO('mysql:host=sql49.hostinger.es;dbname=u571858794_bd1','u571858794_us1', '8d5C6IwWxQfT');
											   $sql=$db->prepare("call pro_mostrar_alumnos"); 
											   $sql->execute();
									           $datos= $sql->fetchAll(); 
									$i=2;
									           foreach($datos as $value){
											    
									?>
                               
                                    <tr>
                                        <td><?php echo $value[0]; ?></td>
                                        <td><?php echo $value[1]; ?></td>
                                        <td><?php echo $value[2]; ?></td>
                                        <td><?php echo $value[3]; ?></td>
                                        <td><?php echo $value[4]; ?></td>
                                        <td><?php echo $value[5]; ?></td>
                                        <td><?php echo $value[6]; ?></td>
                                        <td><?php echo $value[7]; ?></td>        
                                                                         
                                        <td><button onclick="editartablaalum(<?php echo $i;?>)"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
                                    </tr>
                                                    
                              <?php $i++;}
									
									?>
                               


                                </tbody>
                            </table>
@stop