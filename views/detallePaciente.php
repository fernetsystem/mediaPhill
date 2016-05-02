<!--TABLE-->
<div class="container">
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-yzt1{background-color:#efefef;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
.tg .tg-3we0{background-color:#ffffff;vertical-align:top}
</style>
<div class="page-header">
    <h1>Historial</h1>
</div>
<table class="tg" style="width: 100%">
<?php        foreach ($datosPacientes as $datos){?>    
  <tr>
    <th class="tg-yw4l" colspan="4">NOMBRE DEL PACIENTE</th>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="4"><?php echo $datos['nombre']." ".$datos['paterno']." ".$datos['materno']; ?></td>
  </tr>
  <tr>
    <td class="tg-yzt1" colspan="2">CURP</td>
    <td class="tg-yzt1" colspan="2">NÚMERO DE AFILIACIÓN</td>
  </tr>
  <tr>
    <td class="tg-3we0" colspan="2"><?php echo $datos['curp'];?></td>
    <td class="tg-yw4l" colspan="2"><?php echo $datos['nimss'];?></td>
  </tr>
  <tr>
    <td class="tg-yzt1">TELEFONO</td>
    <td class="tg-yzt1">EMAIL</td>
    <td class="tg-yzt1">FECHA DE NACIMIENTO</td>
    <td class="tg-yzt1">TIPO DE SANGRE</td>
  </tr>
  <tr>
    <td class="tg-yw4l"><?php echo $datos['telefono'];?></td>
    <td class="tg-yw4l"><?php echo $datos['email'];?></td>
    <td class="tg-yw4l"><?php echo $datos['fechan'];?></td>
    <td class="tg-yw4l"><?php echo $datos['sangre'];?></td>
  </tr>
  <tr>
    <td class="tg-yzt1" colspan="2">ALERGIAS</td>
    <td class="tg-yzt1" colspan="2">ENFERMEDADES</td>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="2"><?php echo $datos['alergias'];?></td>
    <td class="tg-yw4l" colspan="2"><?php echo $datos['enfermedades'];}?></td>
  </tr>
</table>    <br/>
<a class="btn btn-primary pull-right noPrint" href="index.php?c=controller&a=formEditarPaciente&; ?">EDITAR DATOS</a>  
<input type="button" name="imprimir" value="IMPRIMIR" class="btn btn-default noPrint" onclick="window.print();">
</div>

<!-- <span class="label label-danger"><?php echo $_SESSION['idpaciente'] ?> </span>-->


