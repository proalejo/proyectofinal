<?php
include("nav.php")
?>

<?php  
  include_once "config/config.php";  
  include_once PATH_HELPERS . '/database_helper.php';
  include_once PATH_DAOS . '/mispublicacionesDAO.php';
  include_once PATH_HELPERS .'/html_helper.php';
  ?>


<div class="container-fluid mb-5 mt-5">
	<div class="row justify-content-center align-items-center">
		<div class="col-md-12">
				<?php
					if ( !isset($_SESSION["usuario"]) ){
					?>
					<div class="iniciarsesion">
						<h1>Porfavor Iniciar Sesion</h1>
					</div>
						<?php
						}
						else {
						?>
						<h1>Donacion Exitosa</h1>
						<p>Porfavor elija el metodo de envio</p>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
						  <label class="form-check-label" for="exampleRadios1">
						    Retiro En Persona
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						  <label class="form-check-label" for="exampleRadios2">
						    Envio
						  </label>
						</div>

							<button type="submit" class="btn btn-primary">
							Aceptar
								
							</button>					
				<?php }
				?>
						
						
					
				
			
		</div>
	</div>
</div>


			<?php
			include("footer.php");
			?>
