<?php

function crearHTMLCardPublicacion($titulo, $descripcion, $imagen){
?>	

  <div class="col-md-3 mb-4 text-center d-flex align-items-stretch">

	<div class="card">
		<div class="card-title mb-5 p-4">
		  <?= $titulo ?>
	  	</div>

	    <img class="card-img-top"  alt=""  src="<?= FILES . '/images/pubs/' . $imagen ?>">
	   
	    <div class="card-img-top card-body">

		</div>
	      
	      <div class="card-footer">
	    	  <?= $descripcion ?>
		  </div>

	</div>
  </div>


<?php } 

 ?>

 <?php

function crearHTMLpublicacionalimento($producto, $descripcion, $img){

?>	
		<div class="col-md-4">
                          <img alt="alimento" id="prod_image" style="max-height: 200px; max-width: 200px;" src="<?= PATH_FILE . '/' .  $img  ?>" />
                              <dl class="mt-5">
                                <dt>
                                  <?= $producto ?>
                                </dt>           
                                
                                <dd class="mt-5">
                                  <?= $descripcion ?>
                                </dd>
                              </dl> 
                          <a class="btn btn-success" href="lonecesito.php">Lo Necesito</a>
                    </div>

 <?php  }  ?>



 <?php

function crearHTMLpublicacionmueble($producto, $descripcion, $img){

?>	
		<div class="col-md-4">
                          <img alt="mueble" id="prod_image" style="max-height: 200px; max-width: 200px;" src="<?= PATH_FILE . '/' .  $img  ?>" />
                              <dl class="mt-5">
                                <dt>
                                  <?= $producto ?>
                                </dt>           
                                
                                <dd class="mt-5">
                                  <?= $descripcion ?>
                                </dd>
                              </dl> 
                          <a class="btn btn-success" href="lonecesito.php">Lo Necesito</a>
                    </div>

 <?php  }  ?>


 
 <?php

function crearHTMLpublicacionropa($producto, $descripcion, $img){

?>	
		<div class="col-md-4">
                          <img alt="ropa" id="prod_image" style="max-height: 200px; max-width: 200px;" src="<?= PATH_FILE . '/' .  $img  ?>" />
                              <dl class="mt-5">
                                <dt>
                                  <?= $producto ?>
                                </dt>           
                                
                                <dd class="mt-5">
                                  <?= $descripcion ?>
                                </dd>
                              </dl> 
                          <a class="btn btn-success" href="lonecesito.php">Lo Necesito</a>
                    </div>

 <?php  }  ?>


 