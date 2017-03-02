<?php

$modo=isset($_GET['valor'])? $_GET['valor']:'default';
switch ($modo){
  case 'registro'  :
include('metodos/funciones.php');if($_GET['reg_cargo']=='Auxiliar'){
          $registro=new funciones($_GET['reg_codigo'],$_GET['reg_nombres'],$_GET['reg_apellidos_p'],$_GET['reg_apellidos_m'],$_GET['reg_edad'],
				$_GET['reg_email'],$_GET['reg_telf'],$_GET['reg_fech'],$_GET['reg_direccion'],$_GET['reg_nivel']);
		$registro->registro_trabajador_auxiliar();
  }
		if($_GET['reg_cargo']=='Secretaria'){
          $registro=new funciones($_GET['reg_codigo'],$_GET['reg_nombres'],$_GET['reg_apellidos_p'],$_GET['reg_apellidos_m'],$_GET['reg_edad'],
				$_GET['reg_email'],$_GET['reg_telf'],$_GET['reg_fech'],$_GET['reg_direccion'],'');
		     $registro->registro_trabajador_secretaria();
			
		redirect("usuario/registro");
  }
			if($_GET['reg_cargo']=='Docente'){
          $registro=new funciones($_GET['reg_codigo'],$_GET['reg_nombres'],$_GET['reg_apellidos_p'],$_GET['reg_apellidos_m'],$_GET['reg_edad'],
		$_GET['reg_email'],$_GET['reg_telf'],$_GET['reg_fech'],$_GET['reg_direccion'],'');
		$registro->registro_trabajador_docente();
  }
		if($_GET['reg_cargo']=='Alumno'){
       $registro=new funciones( $_GET['reg_codigo'],$_GET['reg_nombres'],$_GET['reg_apellidos_p'],$_GET['reg_apellidos_m'],$_GET['reg_edad'],
	$_GET['reg_email'],$_GET['reg_telf'],$_GET['reg_fech'],$_GET['reg_direccion'],'');			
		$registro->registro_alumno($_GET['areg_sexo'],$_GET['reg_hobbies'],$_GET['reg_observaciones']);
	 return redirect()->to('usuario/registro')->send();	
		}
		break;
case 'login'  :include('metodos/funcion_login.php');
		if(isset($_GET['Codigo']) and isset($_GET['Contraseña']))
		{   	$registro2=new funcion_login($_GET['Codigo'],$_GET['Contraseña']);
		     	$registro2->login_usuario();
			
		}
		break;
                
  case 'modificar'  : echo 'estas en modificar';break;
case 'salir'  : Session::forget('usuario');
		Session::forget('error');
	 return redirect()->to('/')->send(); break;
	default:	
}
