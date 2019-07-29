<?php

		include "helpers/database_helper.php";

		if ( isset($_REQUEST["Email"] ) && isset($_REQUEST["password"] ) )
		{

			$conexion = getConexion();

	        $consulta = "SELECT * " . 
	                    "FROM usuarios " .
	                    "WHERE email = '" . $_REQUEST["Email"] . "'" .
	                  " AND password = '" . $_REQUEST["password"] . "'";

	        $resultado = $conexion->query( $consulta );


	        if ( $resultado->num_rows == 1  ){

	            //Obtengo el nombre del usuario

	            $usuario = $resultado->fetch_assoc();

	            $_SESSION["usuario"] = $usuario["nombre_usuario"];
	            $_SESSION["id_usuario"] = $usuario["id"];
	            
	            header("Location: index.php");

			}
			else{
				echo "LOGIN INCORRECTO";
			}
		}

	?>


	<?php
	include("nav.php")
	?>

<br>

<div class="container">
		<div class="row mt-3">
			<div class="col">
				<form action="" method="GET">
					
					<div class="form-group">
						<label for="nombre">Email</label>
						<input type="text" class="form-control" placeholder="Email" name="Email" id="Email">
					</div>
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" class="form-control" placeholder="Password" name="password" id="password">
					</div>
					
					

					<input type="submit" class="btn btn-primary btn-block" value="Aceptar">
					<br>
				</form>
			</div>
		</div>
	</div>

</div>

<br>

		<?php
			include("footer.php")
			?>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



  </body>
</html>