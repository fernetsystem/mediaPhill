<div class="container">
    <div class="page-header">
        <h1>REGISTRAR <small>paciente</small></h1>
    </div>
    <div class="row col-xs-12">    
        <form role="form" action="index.php?c=controller&a=agregarPaciente&nombre=nombre&paterno=paterno&materno=materno&tel=tel&email=email&nimss=nimss&fechan=fechan&curp=curp&sangre=sangre&alergias=alergias&enfermedades=enfermedades; ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4 col-sm-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca nombre" required="El nombre es obligatorio">
                </div>    
                <div class="form-group col-md-4 col-sm-4">
                    <label for="paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Introduzca apellido paterno" required="El apellido es obligatorio">
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="materno">Apellido Materno</label>
                    <input type="text" class="form-control" id="materno" name="materno" placeholder="Introduzca apellido materno" required="El apellido es obligatorio">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-sm-4">
                    <label for="tel">Telefono</label>
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="telefono fijo o movil">
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email del paciente">
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="fechan">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fechan" name="fechan" placeholder="fecha de nacimiento" required="La fecha de nacimiento es requerido">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-sm-4">
                    <label for="nimss">Numero de afiliacion</label>
                    <input type="text" class="form-control" id="nimss" name="nimss" placeholder="numero del imss">
                </div>               
                <div class="form-group col-md-4 col-sm-4">
                    <label for="curp">CURP</label>
                    <input type="text" class="form-control" id="curp" name="curp" placeholder="curp del paciente">
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="sangre">Tipo de sangre</label>
<!--                    <input type="text" class="form-control" id="sangre" name="sangre" placeholder="repita su password">-->
                    <select class="form-control" id="select" name="sangre">
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
                    <textarea class="form-control" rows="3" id="alergias" name="alergias"></textarea>                    
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    Enfermedades cronicas<br>
                    <textarea class="form-control" rows="3" id="enfermedades" name="enfermedades"></textarea>                    
                </div>
            </div>
                <input type="submit" value="Aceptar" class="btn btn-primary"/>            
                <a href="index.php?c=controller&a=listadoPacientes2&; ?" class="btn btn-danger">Cancelar</a>
            </form>    
    </div>
</div>
