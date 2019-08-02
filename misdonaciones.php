<?php
include("nav.php")
?>


     
			<div class="container-fluid mt-5">
					<div class="row">
						<div class="col-md-4">
							 
							<button type="button" name="modificar" class="btn btn-success">
								Modificar
							</button> 
							<button type="button" name="eliminar" class="btn btn-danger">
								Eliminar
							</button><img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
							<dl>
								<dt>
									Description lists
								</dt>
								<dd>
									A description list is perfect for defining terms.
								</dd>
								<dt>
									Euismod
								</dt>
								<dd>
									Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
								</dd>
								<dd>
									Donec id elit non mi porta gravida at eget metus.
								</dd>
								<dt>
									Malesuada porta
								</dt>
								<dd>
									Etiam porta sem malesuada magna mollis euismod.
								</dd>
								<dt>
									Felis euismod semper eget lacinia
								</dt>
								<dd>
									Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
								</dd>
							</dl>
						</div>
						<div class="col-md-4">
							 
							<button type="button" name="modificar" class="btn btn-success">
								Modificar
							</button> 
							<button type="button" name="eliminar" class="btn btn-danger">
								Eliminar
							</button><img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
							<dl>
								<dt>
									Description lists
								</dt>
								<dd>
									A description list is perfect for defining terms.
								</dd>
								<dt>
									Euismod
								</dt>
								<dd>
									Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
								</dd>
								<dd>
									Donec id elit non mi porta gravida at eget metus.
								</dd>
								<dt>
									Malesuada porta
								</dt>
								<dd>
									Etiam porta sem malesuada magna mollis euismod.
								</dd>
								<dt>
									Felis euismod semper eget lacinia
								</dt>
								<dd>
									Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
								</dd>
							</dl>
						</div>
						<div class="col-md-4">
							 
							<button type="button" name="modificar" class="btn btn-success">
								Modificar
							</button> 
							<button type="button" name="eliminar" class="btn btn-danger">
								Eliminar
							</button><img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
							<dl>
								<dt>
									Description lists
								</dt>
								<dd>
									A description list is perfect for defining terms.
								</dd>
								<dt>
									Euismod
								</dt>
								<dd>
									Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
								</dd>
								<dd>
									Donec id elit non mi porta gravida at eget metus.
								</dd>
								<dt>
									Malesuada porta
								</dt>
								<dd>
									Etiam porta sem malesuada magna mollis euismod.
								</dd>
								<dt>
									Felis euismod semper eget lacinia
								</dt>
								<dd>
									Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
								</dd>
							</dl>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<nav>
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link" href="#">Previous</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">4</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">5</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>

<?php 

function buscarPublicacionesUsuario( $id_usuario ){
        $conexion = getConexion();

        $consulta = "SELECT pub_id, pub_producto, SUBSTRING(pub_descripcion, 1, 100) AS pub_descripcion, pub_id_categoria, pub_img, pub_id_usuario " . 
                  "FROM publicaciones " . 
                  "WHERE pub_id_usuario = " . $id_usuario;


        $resultado = $conexion->query( $consulta );

        return $resultado;
    }



function modificarPublicacion( $publicacion ){

        $conexion = getConexion();

        $sql = "UPDATE publicaciones SET " . 
                    "pub_producto= \"" . $publicacion["producto"] . "\"" .
                    ", pub_descripcion=\"" . $publicacion["descripcion"] . "\"". 
                    ", pub_id_categoria=" . $publicacion["id_categoria"] .
                    ", pub_img=" . $publicacion["img"] .
                    ", pub_id_usuario=" . $publicacion["id_usuario"];

        if ( $publicacion["imagen"] ){
            $sql .= ", pub_imagen=\"" . $publicacion["imagen"] . "\"";
        }
        
        $sql .= " WHERE pub_id = " . $publicacion["id"];



        $conexion->query( $sql );



    }


    function eliminarPublicacion( $id_publicacion ){

        $conexion = getConexion();

        $sql = "DELETE FROM publicaciones " .         
               " WHERE pub_id = " . $id_publicacion;

        $resultado = $conexion->query( $sql );

    }

?>



    <?php
      include("footer.php")
      ?>
