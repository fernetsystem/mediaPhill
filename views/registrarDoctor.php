<div class="container">
    <div class="page-header">
        <h1>REGISTRAR <small>doctor</small></h1>
    </div>
    <div class="row col-xs-12">    
            <form role="form" action="index.php?c=controller&a=agregarDoctor&nombre=nombre&paterno=paterno&materno=materno&tel=tel&email=email&pass=pass&cedula=cedula&fechan=fechan&curp=curp; ?>" method="post">
                <div class="row">
                    <div class="form-group col-md-4 col-sm-4  ">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca su nombre" required="">
                    </div>    
                    <div class="form-group col-md-4 col-sm-4  ">
                        <label for="paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Introduzca su apellido paterno" required="">
                    </div>
                    <div class="form-group col-md-4 col-sm-4 ">
                        <label for="materno">Apellido Materno</label>
                        <input type="text" class="form-control" id="materno" name="materno" placeholder="Introduzca su apellido materno" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Introduzca su correo electronico " required="">
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control " id="pass" name="pass" placeholder="Introduzca su password" required="">
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="rpass">Repitas su password</label>
                        <input type="password" class="form-control " id="rpass" name="rpass" placeholder="repita su password" required="">
                    </div>
                </div>                    
                <div class="row">
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="tel">Telefono</label>
                        <input type="tel" class="form-control" id="tel" name="tel" placeholder="Introduzca su telefono fijo o movil" required="">
                    </div>
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="cedula">Cedula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Introduzca el numero de cedula porfecional" required="">
                    </div>                
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="curp">CURP</label>
                        <input type="text" class="form-control" id="curp" name="curp" placeholder="Introduzca su curp" required="">
                    </div>
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="fechan">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechan" name="fechan" required="">
                    </div>
                </div>
                <input type="submit" value="Aceptar" class="btn btn-primary"/>            
            </form>    
    </div>
</div>