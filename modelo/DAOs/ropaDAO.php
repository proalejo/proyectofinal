<?php

	function buscarPubliRopa(){

				$conexion = getConexion();

 				$consulta = "SELECT * FROM publicaciones, tipos_publicaciones WHERE id_cat_publicacion = 2 AND id_tipo_pub = 2";


                	$resultado = $conexion->query($consulta);

                	return $resultado;






	}