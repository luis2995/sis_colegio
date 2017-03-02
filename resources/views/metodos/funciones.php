<?php
class funciones {
    protected $dni;
    protected $nombres;
    protected $apellidoma;
	protected $apellidopa;
	protected $edad;
	protected $email;
	protected $telefono;
	protected $fenacimiento;
	protected $direccion;
	protected $nivel;	
    public function __construct($dni,$nombres,$apellidoma,$apellidopa,$edad,$email,$telefono,$fenacimiento,$direccion,$nivel) {
        $this->dni=$dni ;
		$this->nombres=$nombres ;
		$this->apellidoma=$apellidoma;
		$this->apellidopa=$apellidopa;
		$this->edad=$edad ;
		$this->email=$email ;
		$this->telefono=$telefono;
		$this->fenacimiento=$fenacimiento;
		$this->direccion=$direccion ;      
		$this->nivel=$nivel; 
    }

    public function registro_trabajador_secretaria(){
		
		$db=new PDO('mysql:host=sql49.hostinger.es;dbname=u571858794_bd1','u571858794_us1', '8d5C6IwWxQfT');
		$sql=$db->prepare('call pro_ingreso_secretaria(?,?,?,?,?,?,?,?,?)');	
		 $sql->bindParam(1, $this->dni);
       $sql->bindParam(2, $this->nombres);
       $sql->bindParam(3, $this->apellidopa);
       $sql->bindParam(4, $this->apellidoma);
	    $sql->bindParam(5,$this->edad);
       $sql->bindParam(6, $this->direccion);
       $sql->bindParam(7, $this->telefono);
       $sql->bindParam(8, $this->email);
	    $sql->bindParam(9, $this->fenacimiento);
		$sql->execute();
		return redirect()->to('usuario/registro')->send();

}
	 public function registro_trabajador_auxiliar(){
		 	$db=new PDO('mysql:host=sql49.hostinger.es;dbname=u571858794_bd1','u571858794_us1', '8d5C6IwWxQfT');
		$sql=$db->prepare('call pro_ingreso_auxiliar(?,?,?,?,?,?,?,?,?,?)');	
		 $sql->bindParam(1, $this->dni);
       $sql->bindParam(2, $this->nombres);
       $sql->bindParam(3, $this->apellidopa);
       $sql->bindParam(4, $this->apellidoma);
	    $sql->bindParam(5,$this->edad);
       $sql->bindParam(6, $this->email);
       $sql->bindParam(7, $this->telefono);
       $sql->bindParam(8, $this->fenacimiento);
	   $sql->bindParam(9, $this->direccion);
	   $sql->bindParam(10,$this->nivel);
		$sql->execute();
		 return redirect()->to('usuario/registro')->send();
	 }
	    public function registro_trabajador_docente(){
		
		$db=new PDO('mysql:host=sql49.hostinger.es;dbname=u571858794_bd1','u571858794_us1', '8d5C6IwWxQfT');
		$sql=$db->prepare('call pro_ingreso_docente(?,?,?,?,?,?,?,?,?)');	
		 $sql->bindParam(1, $this->dni);
       $sql->bindParam(2, $this->nombres);
       $sql->bindParam(3, $this->apellidopa);
       $sql->bindParam(4, $this->apellidoma);
	    $sql->bindParam(5,$this->edad);
       $sql->bindParam(6, $this->telefono);
       $sql->bindParam(7, $this->direccion);
       $sql->bindParam(8, $this->email);
	    $sql->bindParam(9, $this->fenacimiento);
		$sql->execute();
		return redirect()->to('usuario/registro')->send();
}
	  public function registro_alumno($sexo,$hobbie,$observaciones){
		
		$db=new PDO('mysql:host=sql49.hostinger.es;dbname=u571858794_bd1','u571858794_us1', '8d5C6IwWxQfT');
	   $sql=$db->prepare('call pro_ingreso_alumno(?,?,?,?,?,?,?,?,?,?,?,?)');	
	   $sql->bindParam(1, $this->dni);
       $sql->bindParam(2, $this->nombres);
       $sql->bindParam(3, $this->apellidopa);
       $sql->bindParam(4, $this->apellidoma);
	   $sql->bindParam(5,$this->edad);
       $sql->bindParam(6, $this->email);
       $sql->bindParam(7, $this->direccion);
       $sql->bindParam(8, $this->fenacimiento);
	   $sql->bindParam(9, $sexo);
	   $sql->bindParam(10, $this->telefono);
	   $sql->bindParam(11, $hobbie);
	   $sql->bindParam(12, $observaciones);		
       $sql->execute();
	
		
}
  public function registro_familiar($id,$ap,$am,$nom,$age,$tl,$sex,$parentesco){
		$apoderaado='si';
		$db=new PDO('mysql:host=sql49.hostinger.es;dbname=u571858794_bd1','u571858794_us1', '8d5C6IwWxQfT');
	   $sql=$db->prepare('call pro_ingresar_familiares(?,?,?,?,?,?,?,?,?,?)');	
	   $sql->bindParam(1, $id);
       $sql->bindParam(2, $nom);
       $sql->bindParam(3, $ap);
       $sql->bindParam(4, $am);
	   $sql->bindParam(5,$tl);
       $sql->bindParam(6, $age);
       $sql->bindParam(7, $sex);
       $sql->bindParam(8, $parentesco);	
	  $sql->bindParam(9,$apoderaado);	
	  $sql->bindParam(10, $this->dni);
       $sql->execute();
	  
		
}

	
}
?>

