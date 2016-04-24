<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Media Pill</title>
        <link rel="stylesheet" href="css/bootstrap.css">
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!--         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
               <script type="text/javascript" src="js/bootstrap.js"></script>
<!--        <script type="text/javascript" src="js/npm.js"></script>-->

    </head>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php?c=controller&a=listadoPacientes2&; ?">Media Phill</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <p class="navbar-text pull-left"><?php echo "Bienvenido ".$_SESSION['nombreDoctor'];?></p>
                <li class="active"><a href="index.php?c=controller&a=listadoPacientes2&; ?">Home</a></li>
<!--                <li><a href="index.php?c=controller&a=formEditarDoctor&; ?">Perfil</a></li>-->
                <li><a href="index.php?c=controller&a=closeSession&; ?">Cerrar sesion</a></li> 
            </ul>
        </div>
    </nav>
    <body>
<!--<div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
         <div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>-->