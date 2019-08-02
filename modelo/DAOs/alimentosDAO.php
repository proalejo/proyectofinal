<?php

	function buscarPubliAlimento(){

				$conexion = getConexion();

 				$consulta = "SELECT * FROM publicaciones, tipos_publicaciones WHERE id_cat_publicacion = 3 AND id_tipo_pub = 3";


                	$resultado = $conexion->query($consulta);

                	return $resultado;






	}