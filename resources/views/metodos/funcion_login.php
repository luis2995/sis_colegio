<?php
class funcion_login {
  protected	$email;
  protected	$password;
	
   public function __construct($email,$password){
	  $this->email=$email;
	  $this->password=$password;
  }	
	 public function login_usuario(){
        
		 /*$db=new PDO('mysql:host=sql49.hostinger.es;dbname=u571858794_bd1','u571858794_us1', '8d5C6IwWxQfT');
		if	($sql=$db->prepare("call pro_login(?,?)")){
		 $sql=$db->prepare("call pro_login(?,?)");	
		 $sql->bindParam(1, $this->email);
		 $sql->bindParam(2, $this->password);
	   	 $sql->execute();
		$dato=$sql->fetchAll();
		 foreach($dato as $value){
			if( $value[0]=='correcto' and $value[1]=='usuario'){
	*/	
		 if( $this->email=='admin' and  $this->password=='admin' ){
		Session::set('usuario', $this->email);
		 return redirect()->to('usuario')->send();		 
		 }else{
			 Session::set('error', 'Acceso no Autorizado');
			 return redirect()->to('/')->send();			 
		 }
		  		
	/*		}
			 else{
		     Session::set('error', $value[0]);
			 return redirect()->to('/')->send();			
			 }
		 }//fin del foreach
		}else{
			 return redirect()->to('/')->send();			
			
		}
		 */
		 
		 
		 
		 
	 }
	
}
?>