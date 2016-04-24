<div class="container">
    <h1>Iniciar sesión</h1>
    <div class="row">    
        <div class="col-xs-12 col-sm-6 col-md-4">
            <form role="form" action="index.php?c=controller&a=valida&email=email&pass=pass; ?>" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Introduzca su email" required="">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass"  placeholder="Introduzca su password" required="">
                </div>
                <input type="submit" value="Aceptar" class="btn btn-primary pull-right"/>
                
            </form>                    
        </div>        
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <center>
                <a href="index.php?c=controller&a=registrarDoctor&; ?" class="btn btn-link">Registrate</a>               
            </center>
        </div>
    </div>


</div>