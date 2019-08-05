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
                          	<button type="button" name="modificar" class="btn btn-success">
								Modificar
							</button> 
							<button type="button" name="eliminar" class="btn btn-danger">
								Eliminar
							</button><img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
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
                            <a href="modificar.php?m=<?= $id ?>">
                          	<button type="button" name="modificar" class="btn btn-success">
								Modificar
							</button></a>
							<form action="misdonaciones.php" method="GET">

							<button type="submit" name="eliminar" value="<?= $id ?>"class="btn btn-danger">
								Eliminar
							</button></form> 
                    </div>

      <?php  }  ?>

      <?php

// function modificarPublicacion( $publicacion ){

//         $conexion = getConexion();

//         $sql = "UPDATE publicaciones SET " . 
//                     "producto= \"" . $publicacion["producto"] . "\"" .
//                     ", descripcion=\"" . $publicacion["descripcion"] . "\"". 
//                     ", id_categoria=" . $publicacion["id_categoria"] .
//                     ", img=" . $publicacion["img"] .
//                     ", id_usuario=" . $publicacion["id_usuario"];

//         if ( $publicacion["img"] ){
//             $sql .= ", img=\"" . $publicacion["img"] . "\"";
//         }
        
//         $sql .= " WHERE pub_id = " . $publicacion["id"];



//         $conexion->query( $sql );



//     }


    // function eliminarPublicacion( $id_publicacion ){

    //     $conexion = getConexion();

    //     $sql = "DELETE FROM publicaciones " .         
    //            " WHERE pub_id = " . $id_publicacion;

    //     $resultado = $conexion->query( $sql );

    // }


