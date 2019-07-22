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
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>
   
		<?php

		include "helpers/database_helper.php";

		if ( isset($_POST["Enviar"] ) )
		{

			$conexion = getConexion();

	        $registro = 'INSERT INTO usuarios (nombre_usuario, password, email, direccion) ' . 
	        			"VALUES('" . $_POST["nombre"] . "'" .
	        			", '" . $_POST["password"] . "'" .
	        			", '" . $_POST["Email"] . "'" .
	        			", '" . $_POST["direccion"] . "')";


	        $resultado = $conexion->query( $registro );

	        if ($resultado) {

	        	echo 'REGISTRO CORRECTO';
	        	# code...
	        }

		  
	    }
	  	?>

			

			<?php
			include("nav.php");
			?>


<div class="container">
		<div class="row mt-3">
			<div class="col">
				<form action="registro.php" method="POST">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
					</div>
					<div class="form-group">
						<label for="nombre">Email</label>
						<input type="Email" class="form-control" placeholder="Email" name="Email" id="Email">
					</div>
					<div class="form-group">
						<label for="direccion">Direccion</label>
						<input type="text" class="form-control" placeholder="Direccion" name="direccion" id="direccion">
					</div>

					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" class="form-control" placeholder="Password" name="password" id="password">
					</div>
					
									
					<div class="form-check mb-3">
						<label class="form-check-label">
							<input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2">Acepto Terminos y Condiciones
						</label>
					</div>

					<input type="submit" class="btn btn-primary btn-block" name="Enviar" value="Enviar">
					<br>
				</form>
			</div>
		</div>
	</div>



		<?php
			include("footer.php");
			?>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



  </body>


</html>