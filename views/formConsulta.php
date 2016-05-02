<div class="container">
    <div class="page-header">
        <h1>Consulta <small>doctors control</small></h1>
    </div>
    <form action="index.php?c=controller&a=agregarConsulta&peso=peso&estatura=estatura&temperatura=temperatura&observaciones=observaciones&tratamiento=tratamiento; ?>" method="post">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                Peso<br/>
                <input type="text" class="form-control" placeholder="Ingrese el peso" name="peso" required="">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                Estatura<br/>
                <input type="text" class="form-control" placeholder="Ingrese la estatura" name="estatura" required="">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                Temperatura<br/>
                <input type="text" class="form-control" placeholder="Ingrese la temperatura" name="temperatura" required="">
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                Observaciones<br/>
                <textarea rows="3" class="form-control" name="observaciones" required=""></textarea>
            </div>
            <div class="col-xs-12 col-sm-6">
                Tratamiento<br/>
                <textarea rows="3" class="form-control" name="tratamiento" required=""></textarea>
            </div>
        </div>
        <br/>
        <input type="submit"  class="btn btn-primary"value="Aceptar">
        <a href="index.php?c=controller&a=listadoPacientes2&; ?" class="btn btn-danger">Cancelar</a>
    </form>
</div>
<!--<span class="label label-danger"><?php echo $_SESSION['idpaciente'] ?> </span>-->