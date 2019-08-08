<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Don-Arte</title>   
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">    
  </head>
  <body>

  	<?php
        include_once 'config/config.php';
        include_once PATH_HELPERS .'/database_helper.php';

        ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo"alt="Logo"></a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="navbar-nav">
								<li class="nav-item active">
									 <a class="nav-link" href="nosotros.php">Nosotros</a>
								</li>
								<li class="nav-item">
									 <a class="nav-link" href="donaciones.php">Donaciones</a>
								</li>
								
							</ul>
									<form class="form-inline" action="resultado.php" method="GET">
										<input class="form-control mr-sm-2" type="text" name="busqueda"> 
										
										<input type="submit" name="submit" value="Buscar" class="btn btn-primary">
									</form>
							<ul class="navbar-nav ml-md-auto">
									<li class="nav-item dropdown">
									 

									<?php
										$label = "Cuenta";

										if ( isset($_SESSION["usuario"]) ){
											$label = $_SESSION["usuario"];
										}
									?>

									 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><?=$label?></a>
									

									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

										<?php
											if ( !isset($_SESSION["usuario"]) ){
										?>
											<a class="dropdown-item" href="login.php">Login</a>
										 	<a class="dropdown-item" href="registro.php">Registro</a> 
										 	
										<?php
										}
										else {
										?>
											<a class="dropdown-item" href="donar.php">Donar</a>
										 	<a class="dropdown-item" href="misdonaciones.php">Mis Donaciones</a>
										 	<a class="dropdown-item" href="mispedidos.php">Mis Pedidos</a> 	

											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="logout.php">Cerrar Sesion</a>
										<?php }
										?>
									</div>
								</li>
							</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>


<script src="<?= PATH_VENDOR ?>/jquery/jquery-3.4.1.min.js"></script>
<!-- <script src="<?= PATH_VENDOR ?>/bootstrap/js/bootstrap.min.js"></script> -->
<script src="<?= PATH_VENDOR ?>/popper/popper.min.js"></script>
