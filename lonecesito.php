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

						

									<div class="mt-5 mb-5">
									<h1>Donacion Exitosa</h1>
									<div class="mt-3">									
										<p>Muchas Gracias por utilizar nuestra plataforma!</p></div>
</div>

						





									
				<?php }
				?>
						
						
					
				
			
		</div>
	</div>
</div>


			<?php
			include("footer.php");
			?>
