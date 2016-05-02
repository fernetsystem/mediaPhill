<?php 
class model{
    
    private $db;
    private $myDataGet=array();
    
    public function __construct(){
	$this->db=Conectar::conexion();
	$this->myDataGet=array();
    }
    
    public function get_login($email,$pass){
        $contador=0;
        $consulta=$this->db->query("select * from doctores where email='".$email."' and password='".$pass."'");
        while ($filas=$consulta->fetch_assoc()) {
            $contador++;
        }
        if($contador>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function get_datos_doctor($email,$pass){
        $consulta=$this->db->query("select * from doctores where email='".$email."' and password='".$pass."';");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function get_datos_pacientes($idDoctor){
        $consulta=$this->db->query("select * from pacientes where iddoctor=".$idDoctor.";");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function search_pacientes($idDoctor,$palabra){
        $consulta=$this->db->query("select * from pacientes where iddoctor=".$idDoctor." and nombre like '%".$palabra."%' or paterno like '%".$palabra."%' or materno like '%".$palabra."%' ;");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function get_datos_paciente($idPaciente){
        $consulta=$this->db->query("select * from pacientes where idpaciente=".$idPaciente.";");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function get_data_report($iddoctor,$idPaciente){
        $consulta=$this->db->query("select t1.nombre as nombred, t1.paterno as paternod, t1.materno as maternod, t1.telefono, t1.email, t2.nombre, t2.paterno, t2.materno from doctores t1 inner join pacientes t2 on t1.iddoctor=t2.iddoctor where t2.iddoctor=".$iddoctor." and idpaciente=".$idPaciente.";");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function get_datos_consultas($idPaciente){
        $consulta=$this->db->query("select * from consultas where idpaciente=".$idPaciente." order by fecha desc;");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function add_pacientes($iddoctor,$nombre,$paterno,$materno,$tel,$email,$nimss,$fechan,$curp,$sangre,$alergias,$enfermedades){
        $consulta=$this->db->query("insert into pacientes values(null,'$iddoctor','$nombre','$paterno','$materno','$tel','$email','$nimss','$fechan','$curp','$sangre','$alergias','$enfermedades');");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function update_paciente($idpaciente,$nombre,$paterno,$materno,$tel,$email,$nimss,$fechan,$curp,$sangre,$alergias,$enfermedades){
        $consulta=$this->db->query("update pacientes set nombre='$nombre', paterno='$paterno', materno='$materno', "
                                . "telefono='$tel', email='$email', nimss='$nimss', fechan='$fechan', curp='$curp', sangre='$sangre', "
                                . "alergias='$alergias', enfermedades='$enfermedades' where idpaciente=$idpaciente;");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function add_doctor($nombre,$paterno,$materno,$tel,$email,$pass,$cedula,$fechan,$curp){
        $consulta=$this->db->query("insert into doctores values(null,'$nombre','$paterno','$materno','$tel','$email','$pass','$cedula','$fechan','$curp');");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function add_consulta($idhistorial,$peso,$estatura,$temperatura,$observaciones,$tratamiento){
        $consulta=$this->db->query("insert into consultas values(null,$idhistorial,now(),'$peso','$estatura','$temperatura','$observaciones','$tratamiento');");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function delete_paciente($idpaciente){
        $consulta=$this->db->query("delete from pacientes where idpaciente=$idpaciente;");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
}
?>