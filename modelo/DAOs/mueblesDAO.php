<?php

	function buscarPubliMueble(){

				$conexion = getConexion();

 				$consulta = "SELECT * FROM publicaciones, tipos_publicaciones WHERE id_cat_publicacion = 1 AND id_tipo_pub = 1";


                	$resultado = $conexion->query($consulta);

                	return $resultado;






	}