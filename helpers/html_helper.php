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

                                <?php
                                  if ( !isset($_SESSION["usuario"]) ){
                                ?>
                                <div class="col-md-8">
                                <p><strong>Para solicitar esta donacion usted debe estar Registrado y Logueado</strong></p>
                                </div>


                                <?php
                                }
                                else {
                                ?>

                                <form action="lonecesito.php" method="GET">
                                <input type="hidden" name="id_publicacion" value="<?= $id ?>">                                
                                <input type="submit" name="submit" class="btn btn-success" value="Lo Necesito">

                                <div class="col-md-4 mt-5">
                                  <div class="radio">
                                      <label for="radios-0">
                                        <input type="radio" name="id_metodoenvio" id="radios-0" value="1" checked="checked">
                                       Envio
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label for="radios-1">
                                        <input type="radio" name="id_metodoenvio" id="radios-1" value="2">
                                       Retiro en persona
                                      </label>
                                  </div>
                                </div>
                              
                          
                        </form>

                        <?php }
                    ?>
                    </div>

 <?php  }  ?>



 <?php

function crearHTMLpublicacionmueble($id, $producto, $descripcion, $img){

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

                                <?php
                                  if ( !isset($_SESSION["usuario"]) ){
                                ?>
                                <div class="col-md-8">
                                <p><strong>Para solicitar esta donacion usted debe estar Registrado y Logueado</strong></p>
                                </div>


                                <?php
                                }
                                else {
                                ?>

                                <form action="lonecesito.php" method="GET">
                                <input type="hidden" name="id_publicacion" value="<?= $id ?>">                                
                                <input type="submit" name="submit" class="btn btn-success" value="Lo Necesito">

                                <div class="col-md-4 mt-5">
                                  <div class="radio">
                                      <label for="radios-0">
                                        <input type="radio" name="id_metodoenvio" id="radios-0" value="1" checked="checked">
                                       Envio
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label for="radios-1">
                                        <input type="radio" name="id_metodoenvio" id="radios-1" value="2">
                                       Retiro en persona
                                      </label>
                                  </div>
                                </div>
                              
                          
                        </form>

                        <?php }
                    ?>
                    </div>

 <?php  }  ?>



 <?php

function crearHTMLpublicacionropa($id, $producto, $descripcion, $img){

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

                                <?php
                                  if ( !isset($_SESSION["usuario"]) ){
                                ?>
                                <div class="col-md-8">
                                <p><strong>Para solicitar esta donacion usted debe estar Registrado y Logueado</strong></p>
                                </div>


                                <?php
                                }
                                else {
                                ?>

                                <form action="lonecesito.php" method="GET">
                                <input type="hidden" name="id_publicacion" value="<?= $id ?>">                                
                                <input type="submit" name="submit" class="btn btn-success" value="Lo Necesito">

                                <div class="col-md-4 mt-5">
                                  <div class="radio">
                                      <label for="radios-0">
                                        <input type="radio" name="id_metodoenvio" id="radios-0" value="1" checked="checked">
                                       Envio
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label for="radios-1">
                                        <input type="radio" name="id_metodoenvio" id="radios-1" value="2">
                                       Retiro en persona
                                      </label>
                                  </div>
                                </div>
                              
                          
                        </form>

                        <?php }
                    ?>
                    </div>

 <?php  }  ?>



 <?php
function crearHTMLmisdonaciones($id, $producto, $descripcion, $img){

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

function crearHTMLcardProdu($id, $producto, $descripcion, $img){

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
                          <?php
                                  if ( !isset($_SESSION["usuario"]) ){
                                ?>
                                <div class="col-md-8">
                                <p><strong>Para solicitar esta donacion usted debe estar Registrado y Logueado</strong></p>
                                </div>


                                <?php
                                }
                                else {
                                ?>

                                <form action="lonecesito.php" method="GET">
                                <input type="hidden" name="id_publicacion" value="<?= $id ?>">                                
                                <input type="submit" name="submit" class="btn btn-success" value="Lo Necesito">

                                <div class="col-md-4 mt-5">
                                  <div class="radio">
                                      <label for="radios-0">
                                        <input type="radio" name="id_metodoenvio" id="radios-0" value="1" checked="checked">
                                       Envio
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label for="radios-1">
                                        <input type="radio" name="id_metodoenvio" id="radios-1" value="2">
                                       Retiro en persona
                                      </label>
                                  </div>
                                </div>
                              
                          
                        </form>

                        <?php }
                    ?>
                    </div>
 <?php  }  ?>



 <?php

 
function crearHTMLpedidosUsuario($id, $producto, $descripcion, $img){

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
                                                    
    </div>

 <?php  }  ?>