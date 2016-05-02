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
    public function closeSession(){	
	session_destroy();
	$myController = new controller();
	$myController->Index();	
    }
    public function registrarDoctor(){
        require_once 'views/headeri.inc';	
        require_once 'views/registrarDoctor.php';        
        require_once 'views/footer.inc';        
    }
    
    public function registrarPaciente(){
        require_once 'views/header.inc';	
        require_once 'views/registrarPaciente.php';        
        require_once 'views/footer.inc';        
    }
    
    public function login(){
        require_once 'views/headeri.inc';	
        require_once 'views/login.php';        
        require_once 'views/footer.inc';        
    }

    public function valida(){		        
        $idDoctor=null;
        $nombreDoctor=null;
	$encontrar = $this->myModel->get_login($_REQUEST['email'],$_REQUEST['pass']);
	if($encontrar > 0){            
            $datosDoctor = $this->myModel->get_datos_doctor($_REQUEST['email'],$_REQUEST['pass']);
            foreach ($datosDoctor as $dato) {
                $idDoctor = $dato['iddoctor'];                	            
            	$nombreDoctor=$dato['nombre'];
            }              
            $_SESSION['iddoctor']=$idDoctor;
            $_SESSION['nombreDoctor']=$nombreDoctor;
//            require_once 'views/header.inc';
//            require_once 'views/menu.php';
//            require_once 'views/footer.inc';
            require_once 'views/header.inc';
                    $myController = new controller();
                    $myController->listadoPacientes();
	
	}else{
            require_once 'views/headeri.inc';
            echo '<div class="alert alert-danger fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>ERROR!</strong> El usuarioa ingresado no se ha encontrado.'.
                  '</div>';
            require_once 'views/login.php';        
            require_once 'views/footer.inc';
        }
    }  
    public function listadoPacientes(){               
        $datosPacientes = $this->myModel->get_datos_pacientes($_SESSION['iddoctor']);
        require_once 'views/pacientes.php';                           
        require_once 'views/footer.inc';
    }
    public function listadoPacientes2(){               
            require_once 'views/header.inc';
        $datosPacientes = $this->myModel->get_datos_pacientes($_SESSION['iddoctor']);
        require_once 'views/pacientes.php';                           
        require_once 'views/footer.inc';
    }
    public function buscarPacientes(){        
        require_once 'views/header.inc';	
        $datosPacientes = $this->myModel->search_pacientes($_SESSION['iddoctor'],$_REQUEST['palabra']);
        require_once 'views/pacientes.php';                                                          
        require_once 'views/footer.inc';
    }
    public function agregarPaciente(){       
       $datos = $this->myModel->add_pacientes($_SESSION['iddoctor'],$_REQUEST['nombre'],$_REQUEST['paterno'],$_REQUEST['materno'],$_REQUEST['tel'],$_REQUEST['email'],$_REQUEST['nimss'],$_REQUEST['fechan'],$_REQUEST['curp'],$_REQUEST['sangre'],$_REQUEST['alergias'],$_REQUEST['enfermedades']);
       if($datos > 0){
           require_once 'views/header.inc';
           echo '<div class="container"><div class="alert alert-success fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>Operacion exitosa!</strong> paciente registrado .'.
                  '</div></div>';
        $myController = new controller();
        $myController->listadoPacientes();	
	
	//echo '<div class="alert alert-dismissible alert-danger">  <button type="button" class="close" data-dismiss="alert">&times;</button>  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.</div>';
	}else{
	//echo '<div class="alert alert-dismissible alert-danger">  <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.</div>';
        $myController = new controller();
        $myController->listadoPacientes();	
	echo "ERROR";

	}
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
    public function detallePaciente(){        
        $_SESSION['idpaciente'] = $_REQUEST['idpaciente'];
        require_once 'views/header.inc';	
        $datosPacientes = $this->myModel->get_datos_paciente($_SESSION['idpaciente']);
        require_once 'views/detallePaciente.php';                           
        $myController = new controller();
        $myController->cons();
        
    }
    public function cons(){
        $consultas = $this->myModel->get_datos_consultas($_SESSION['idpaciente']);
        require_once 'views/detallePacienteConsultas.php';                        	
        require_once 'views/footer.inc';
    }

    public function formEditarPaciente(){        
        require_once 'views/header.inc';	        
        $datosPacientes = $this->myModel->get_datos_paciente($_SESSION['idpaciente']);        
        require_once 'views/editPaciente.php';	        
        require_once 'views/footer.inc';
    }
    public function formEditarDoctor(){        
        require_once 'views/header.inc';	        
        //$datosPacientes = $this->myModel->get_datos_paciente($_SESSION['idpaciente']);        
        require_once 'views/editDoctor.php';	        
        require_once 'views/footer.inc';        
    }
    public function editarPaciente(){                
        $datos = $this->myModel->update_paciente($_SESSION['idpaciente'],$_REQUEST['nombre'],$_REQUEST['paterno'],$_REQUEST['materno'],$_REQUEST['tel'],$_REQUEST['email'],$_REQUEST['nimss'],$_REQUEST['fechan'],$_REQUEST['curp'],$_REQUEST['sangre'],$_REQUEST['alergias'],$_REQUEST['enfermedades']);        
        if($datos > 0){
        require_once 'views/header.inc';
	echo '<div class="container"><div class="alert alert-success fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>Operacion exitosa!</strong> cambios realizados correctamente .'.
                  '</div></div>';           
        $myController = new controller();
        $myController->listadoPacientes();	

	}else{
	echo '<div class="alert alert-danger fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>ERROR!</strong> Ocurrio un error, intentelo de nuevo.'.
                  '</div>';
	}
    }
    public function eliminarPaciente(){        
//        echo $_REQUEST['idpaciente'];
        $datos = $this->myModel->delete_paciente($_REQUEST['idpaciente']);
        if($datos > 0){
        require_once 'views/header.inc';    
        echo '<div class="container"><div class="alert alert-success fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>Operacion exitosa!</strong> Usuario eliminado .'.
                  '</div></div>';            
         $myController = new controller();
        $myController->listadoPacientes();	

	}else{
	echo '<div class="alert alert-danger fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>ERROR!</strong> Ocurrio un error, intentelo de nuevo.'.
                  '</div>';
	}
        require_once 'views/footer.inc';
    }
    public function formConsulta(){
        $_SESSION['idpaciente'] = $_REQUEST['idpaciente'];
        require_once 'views/header.inc';	
        require_once 'views/formConsulta.php';        
        require_once 'views/footer.inc';        
    }
    public function agregarConsulta(){
        $datos = $this->myModel->add_consulta($_SESSION['idpaciente'],$_REQUEST['peso'],$_REQUEST['estatura'],$_REQUEST['temperatura'],$_REQUEST['observaciones'],$_REQUEST['tratamiento']);
        if($datos > 0){
            require_once 'views/header.inc';
            echo '<div class="container"><div class="alert alert-success fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>Operacion exitosa!</strong> Documento generado .'.
                  '</div></div>';
            $datosReport = $this->myModel->get_data_report($_SESSION['iddoctor'],$_SESSION['idpaciente']);            
            
            echo "<div class='container'>";
            require_once 'views/generateConsultaPDF.php';  
            echo '<embed src="views/recent.pdf" width="100%" height="475"><br/>';            
            echo '<center> <a href="index.php?c=controller&a=listadoPacientes2&; ?" class="btn btn-primary">REGRESAR</a></center>';
            echo "</div>";
            require_once 'views/footer.inc';
	}else{
	echo '<div class="alert alert-danger fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>ERROR!</strong> Ocurrio un error, intentelo de nuevo.'.
                  '</div>';
	}             
    }
    public function borradorPDF(){
        require_once 'views/borrador.php';          
    }
}
?>