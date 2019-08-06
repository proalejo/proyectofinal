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
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<img alt="producto" id="prod_image" style="max-height: 200px; max-width: 200px;" src="<?= PATH_FILE . '/' .  $img  ?>" />
					<dl class="mt-5">
                                <dt>
                                  <?= $producto ?>
                                </dt>           
                                
                                <dd class="mt-5">
                                  <?= $descripcion ?>
                                </dd>
                              </dl> 
				</div>
				<div class="col-md-6">
					<form role="form">
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Usuario
							</label>
							<input type="text" class="form-control" id="inputtext" />
						</div>
						<div class="form-group">
							 
							<label for="exampleInputPassword1">
								Direccion
							</label>
							<input type="text" class="form-control" id="inputtext" />
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" /> Acuerdo con el Donante
							</label>

							<label>
								<input type="checkbox" /> Retiro en Persona
							</label>
							 
							<label>
								<input type="checkbox" /> Envio
							</label>
						</div> 
						<button type="submit" class="btn btn-primary">
							Aceptar
						
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


			<?php
			include("footer.php");
			?>
