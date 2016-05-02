<div class="container">    
    
    <br><br>
    <form action="index.php?c=controller&a=buscarPacientes&palabra=palabra; ?>" method="post" class="form-inline">     
        <span class="pull-left" style="font-size:40px; font-family: sans-serif">PACIENTES</span>
    <div class="pull-right">    
        <input type="text" placeholder="Nombre del paciente" name="palabra" required="" class="form-control">
        <input type="submit" value="Buscar" class="form-control btn btn-default "> 
                    <a class="btn btn-primary " href="index.php?c=controller&a=registrarPaciente&; ?">AGREGAR PACIENTE</a>
                    </div>
    </form><br>
    <br><br><br>

<table class="table table-hover table-responsive">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Telefono</th>
              <th>Email</th>
              <th>N. Imss</th>
              <th>CURP</th>
              <th>Tipo de sangre</th>
              <th></th>
              <th></th>
              <th></th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($datosPacientes as $datos){
            echo "<tr>";
	    echo "<td> ".$datos['nombre']." ".$datos['paterno']." ".$datos['materno']." </td>";            
            echo "<td> ".$datos['telefono']."</td>";
            echo "<td> ".$datos['email']."</td>";
            echo "<td> ".$datos['nimss']."</td>";
            echo "<td> ".$datos['curp']."</td>";
            echo "<td> ".$datos['sangre']."</td>";
            echo "<td><a href='index.php?c=controller&a=detallePaciente&idpaciente=".$datos['idpaciente']."&; ?' class='btn btn-primary btn-xs'>Ver</a></td>";
            echo "<td><a href='index.php?c=controller&a=formConsulta&idpaciente=".$datos['idpaciente']."&; ?' class='btn btn-default btn-xs'>Crear consulta</a></td>";
            echo "<td><a href='index.php?c=controller&a=eliminarPaciente&idpaciente=".$datos['idpaciente']."&; ?' class='btn btn-danger btn-xs'>Eliminar</a></td>";

            echo "</tr>";  }
        	 ?>
        </tbody>
</table>
</div>
</div>



