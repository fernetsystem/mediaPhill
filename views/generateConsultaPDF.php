<?php
require_once("dompdf_config.inc.php");
foreach ($datosReport as $datos){
 $html ='
    <div class="container">
    <style type="text/css">
        *{
            font-family: Arial;
        }
        .container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-size:14px;padding:1px 4px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-size:14px;font-weight:normal;padding:1px 4px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yzt1{background-color:#efefef;vertical-align:top}
.tg .tg-bsv2{background-color:#efefef}
.tg .tg-yw4l{vertical-align:top}
</style>
<div class="container">
<div class="page-header">
    <h1>Consulta <small>medica</small></h1>
</div>
<p>DOCTOR: '.$datos['paternod'].' '.$datos['maternod'].' '.$datos['nombred'].'</p>
<p>TELEFONO: '.$datos['telefono'].'</p>
<p>E-MAIL: '.$datos['email'].'</p>
<br/>
<p>FECHA DE CONSULTA: '.Date('Y-m-d').'</p>
<br/><br/><br/><br/><br/><br/>
<table class="tg" style="width: 100%">
<colgroup>
<col style="width: 67px">
<col style="width: 84px">
<col style="width: 78px">
<col style="width: 85px">
<col style="width: 163px">
</colgroup>
  <tr>
    <th class="tg-bsv2">No.</th>
    <th class="tg-yzt1" colspan="4">PACIENTE</th>
  </tr>
  <tr>
    <td class="tg-031e"></td>
    <td class="tg-yw4l" colspan="4">'.$datos['paterno'].' '.$datos['materno'].' '.$datos['nombre'].'</td>
  </tr>
  <tr>
    <td class="tg-yzt1" colspan="2">PESO</td>
    <td class="tg-yzt1" colspan="2">ESTATURA</td>
    <td class="tg-yzt1">TEMPERATURA</td>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="2">'.$_REQUEST['peso'].'</td>
    <td class="tg-yw4l" colspan="2">'.$_REQUEST['estatura'].'</td>
    <td class="tg-yw4l">'.$_REQUEST['temperatura'].'</td>
  </tr>
</table>
<br/><br/>
<div>
    <h4>OBSERVACIONES:</h4>'.$_REQUEST['observaciones'].'     
</div>
<div>
    <h4>TRATAMIENTO:</h4>'.$_REQUEST['tratamiento'].'    
</div>
<br/><br/><br/>
<br/><br/>
<p>______________________________</p>
<h5>FIRMA DEL DOCTOR</h5>
<small>
El objetivo del presente Aviso de Privacidad es delimitar los alcances y condiciones generales del tratamiento 
de los Datos Personales y darlos a conocer a los Titulares, a fin de que est&eacute;n en posibilidad de tomar decisiones 
informadas sobre el uso de sus Datos Personales, manteniendo el control y disposici&oacute;n sobre ellos. 
Asimismo, el Aviso de Privacidad permite a MediPhill transparentar dicho tratamiento y con ello 
fortalecer el nivel de confianza de los Titulares.
</small>
</div>';
}
   $dompdf = new DOMPDF();
   //$dompdf->set_paper('letter','landscape');
   //$dompdf->set_paper('legal','landscape');
   $dompdf->load_html($html);
   $dompdf->render();
    //$dompdf->stream("consulta09797".Date('Y-m-d').".pdf",array("Attachment" => 0));        
    $output = $dompdf->output();
    file_put_contents('views/recent.pdf', $output);
?>