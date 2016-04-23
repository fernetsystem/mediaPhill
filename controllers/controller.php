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
}
?>
