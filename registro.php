<?php

		include "helpers/database_helper.php";

		if ( isset($_POST["Enviar"] ) )
		{

			$conexion = getConexion();

			$sql = "SELECT * FROM usuarios WHERE email = '" . $_POST["Email"] ."'";

			$resultado = $conexion->query( $sql );

			 if ( $resultado->num_rows == 1  ){

			 	echo "EMAIL YA REGISTRADO";
			 }

			 else {

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
		  
	    }
	  	?>

			

			<?php
			include("nav.php");
			?>


<div class="container mt-5 mb-5">
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
							<input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2" required="required">Acepto Terminos y Condiciones
						</label>
					</div>

					<input type="submit" class="btn btn-primary btn-block" name="Enviar" value="Enviar">
					
				</form>
			</div>
		</div>
	</div>



		<?php
			include("footer.php");
			?>