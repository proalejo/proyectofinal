<?php

	include "helpers/database_helper.php";

	function crearCombo( $resultado, $campo_id, $campo_descripcion, $nombreCombo ){

		echo '<select name="' . $nombreCombo . '">';

		while( $tp = $resultado->fetch_assoc() ){
			echo '<option value="' . $tp["$campo_id"] . '">' . $tp["$campo_descripcion"] . '</option>';

		}

		echo '</select>';

	}

	$conexion = getConexion();

	$consulta = "SELECT * FROM tipos_publicaciones";

	$consulta2 = "SELECT * FROM usuarios";

	$resultado = $conexion->query($consulta);

	$resultado2 = $conexion->query($consulta2);


	echo '<form action="guardar.php">';

	crearCombo( $resultado, "id", "descripcion", "categoria" );

	crearCombo( $resultado2, "id", "nombre_usuario", "usuario" );


	echo '<input type="submit"></form>';

	






