<div class="container">
    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:1px 4px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:1px 4px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yzt1{background-color:#efefef;vertical-align:top}
.tg .tg-bsv2{background-color:#efefef}
.tg .tg-yw4l{vertical-align:top}
</style>
<div class="page-header">
    <h1>Consultas</h1>
</div>    
<?php foreach ($consultas as $getConsulta){ ?>
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
    <th class="tg-yzt1" colspan="4">FECHA</th>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $getConsulta['idconsulta']; ?></td>
    <td class="tg-yw4l" colspan="4"><?php echo $getConsulta['fecha'];?></td>
  </tr>
  <tr>
    <td class="tg-yzt1" colspan="2">PESO</td>
    <td class="tg-yzt1" colspan="2">ESTATURA</td>
    <td class="tg-yzt1">TEMPERATURA</td>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="2"><?php echo $getConsulta['peso'];?></td>
    <td class="tg-yw4l" colspan="2"><?php echo $getConsulta['estatura'];?></td>
    <td class="tg-yw4l"><?php echo $getConsulta['temperatura'];?></td>
  </tr>
  <tr>
    <td class="tg-yzt1" colspan="3">OBSERVACIONES</td>
    <td class="tg-yzt1" colspan="2">TRATAMIENTO</td>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="3"><?php echo $getConsulta['observaciones'];?></td>
    <td class="tg-yw4l" colspan="2"><?php echo $getConsulta['tratamiento'];?></td>
  </tr>
</table>
<br/><br/>
<?php }?>
</div>