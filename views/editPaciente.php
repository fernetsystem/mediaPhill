<div class="container">
    <div class="page-header">
        <h1>Modificar Paciente</h1>
    </div>
    <?php  foreach ($datosPacientes as $datos){?>
    <div class="row col-xs-12">            
            <form role="form" action="index.php?c=controller&a=editarPaciente&nombre=nombre&paterno=paterno&materno=materno&tel=tel&email=email&nimss=nimss&fechan=fechan&curp=curp&sangre=sangre&alergias=alergias&enfermedades=enfermedades; ?>" method="post">
                <div class="row">
                <div class="form-group col-md-4 col-sm-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value=<?php echo "".$datos['nombre']; ?>>
                </div>    
                <div class="form-group col-md-4 col-sm-4">
                    <label for="paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="paterno" name="paterno" value=<?php echo $datos['paterno']; ?>>
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="materno">Apellido Materno</label>
                    <input type="text" class="form-control" id="materno" name="materno" value=<?php echo $datos['materno']; ?>>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-sm-4">
                    <label for="tel">Telefono</label>
                    <input type="text" class="form-control" id="tel" name="tel" value=<?php echo $datos['telefono']; ?>>
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value=<?php echo $datos['email']; ?>>
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="fechan">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fechan" name="fechan" value=<?php echo $datos['fechan']; ?>>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-sm-4">
                    <label for="nimss">Numero de afiliacion</label>
                    <input type="text" class="form-control" id="nimss" name="nimss" value=<?php echo $datos['nimss']; ?>>
                </div>               
                <div class="form-group col-md-4 col-sm-4">
                    <label for="curp">CURP</label>
                    <input type="text" class="form-control" id="curp" name="curp" value=<?php echo $datos['curp']; ?>>
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="sangre">Tipo de sangre</label>
<!--                    <input type="text" class="form-control" id="sangre" name="sangre" placeholder="repita su password">-->
                    <select class="form-control" id="select" name="sangre">
                        <option selected><?php echo $datos['sangre']; ?></option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                    Alergias<br/>
                    <textarea class="form-control" rows="3" id="alergias" name="alergias"><?php echo $datos['alergias']; ?></textarea>                    
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    Enfermedades cronicas<br>
                    <textarea class="form-control" rows="3" id="enfermedades" name="enfermedades"><?php echo $datos['alergias']; }?></textarea>                    
                </div>
            </div>
                <input type="submit" value="Aceptar" class="btn btn-primary"/>      
                <a href="index.php?c=controller&a=listadoPacientes2&; ?" class="btn btn-danger">Cancelar</a>
            </form>    
        </div>
    
</div>
<!--<span class="label label-danger"><?php echo $_SESSION['idpaciente'] ?> </span>-->

