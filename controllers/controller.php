<?php 

require_once("models/models.php");

class controller{

    private $Mymodel;
    private $idDotor;
    public function __construct(){
	$this->myModel = new model();
    }
    
    public function Index(){
        require_once 'views/headeri.inc';	
        require_once 'views/main.php';        
        require_once 'views/footer.inc';
    }
    public function registrarDoctor(){
        require_once 'views/headeri.inc';	
        require_once 'views/registrarDoctor.php';        
        require_once 'views/footer.inc';        
    }
    public function agregarDoctor(){      
       $datos = $this->myModel->add_doctor($_REQUEST['nombre'],$_REQUEST['paterno'],$_REQUEST['materno'],$_REQUEST['tel'],$_REQUEST['email'],$_REQUEST['pass'],$_REQUEST['cedula'],$_REQUEST['fechan'],$_REQUEST['curp']);
       if($datos > 0){
           	
        $myController = new controller();
        $myController->login();	
        echo '<div class="container"><div class="alert alert-success fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>OPERACION EXITOSA!</strong> Ahora ya puede iniciar sersión .'.
                  '</div></div>';
	}else{
	echo '<div class="alert alert-danger fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>ERROR!</strong> Ocurrio un error, intentelo de nuevo.'.
                  '</div>';
	}
    }
}
?>