<?php
include("nav.php")
?>

<?php  
  include_once "config/config.php";  
  include_once PATH_HELPERS . '/database_helper.php';
  include_once PATH_DAOS . '/mispublicacionesDAO.php';
  include_once PATH_HELPERS .'/html_helper.php';

  if (isset($_GET["aceptar"])) {

  	$usuarioreceptor = $_SESSION["id_usuario"];
  	
  	
  
  
  	$conexion = getConexion();

        $sql = "INSERT INTO donaciones (id_receptor, fecha, id_publicacion, id_usuario, id_metodoenvio) VALUES ('$producto', '$descripcion', '$categoria','$foto', '" . $_SESSION["id_usuario"] . "')";

        $conexion->query($sql);

    }


  ?>


<div class="container-fluid mb-5 mt-5">
	<div class="row justify-content-center align-items-center">
		<div class="col-md-12">
				<?php
					if ( !isset($_SESSION["usuario"]) ){
					?>
					<div class="row justify-content-center align-items-center mt-5 mb-5 w-100">
						<div class="alert alert-danger" role="alert">
							  Porfavor Inicie Sesion
						</div>
					</div>
						<?php
						}
						else {
						?>

						


									<h1>Donacion Exitosa</h1>
									<p>Porfavor elija el metodo de envio</p>

						





									<form class="form-horizontal" action="lonecesito.php" method="GET">
									<fieldset>

									

									<!-- Multiple Radios -->
									<div class="form-group">
									  
									  <div class="col-md-4">
									  <div class="radio">
									    <label for="radios-0">
									      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
									     Envio
									    </label>
										</div>
									  <div class="radio">
									    <label for="radios-1">
									      <input type="radio" name="radios" id="radios-1" value="2">
									     Retiro en persona
									    </label>
										</div>
									  </div>
									</div>
									<button type="submit" name="aceptar" class="btn btn-primary">
											Aceptar								
									</button>	
									</fieldset>
									</form>
				<?php }
				?>
						
						
					
				
			
		</div>
	</div>
</div>


			<?php
			include("footer.php");
			?>
