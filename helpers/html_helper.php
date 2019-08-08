

 <?php

function crearHTMLpublicacionalimento($id, $producto, $descripcion, $img){

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
                              <form action="lonecesito.php" method="GET">
                                <input type="hidden" name="pub" value="<?= $id ?>">
                                <input type="submit" name="submit" class="btn btn-success" value="Lo Necesito">
                              
                          
                        </form>
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
                          <form action="lonecesito.php?m=<?= $id ?>" method="GET">

              <button type="submit" name="lonecesito" value="<?= $id ?>"class="btn btn-success">
                Lo Necesito
              </button></form>
                    </div>

 <?php  }  ?>

 <?php

function crearHTMLmisdonaciones($producto, $descripcion, $img){

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
                          <div class="mt-2">
                          	<button type="button" name="modificar" class="btn btn-success">
              								Modificar
              							</button> </div>
                            <div class="mt-2">
              							<button type="button" name="eliminar" class="btn btn-danger">
              								Eliminar
              							</button></div>
                          
    </div>

 <?php  }  ?>

<?php

function crearHTMLpublicacionUsuario( $id, $producto, $descripcion, $img ){

        
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
                              <div class="container fluid">
                                <div class="row">
                                  <div class="mt-2 mr-2"> 
                                    <a href="modificar.php?m=<?= $id ?>">
                                  	<button type="button" name="modificar" class="btn btn-success">
                      								Modificar
                      							</button></a>
                                  </div>
                                  <div class="mt-2 ml-2">
                      							<form action="misdonaciones.php" method="GET">
                      							<button type="submit" name="eliminar" value="<?= $id ?>"class="btn btn-danger">
                      								Eliminar
                      							</button></form> 
                                  </div>
                                </div>
                              </div>
    </div>

      <?php  }  ?>
<?php

function crearHTMLcardProdu($producto, $descripcion, $img){

?>  
    <div class="col-md-4">
                          <img alt="producto" id="prod_image" style="max-height: 200px; max-width: 200px;" src="<?= PATH_FILE . '/' .  $img  ?>" />
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
