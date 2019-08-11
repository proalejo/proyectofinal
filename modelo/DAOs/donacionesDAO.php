<?php

	function donaciones(){


$conexion = getConexion();

        $sql = "INSERT INTO donaciones (id_receptor, fecha, id_publicacion, id_usuario, id_metodoenvio) VALUES ('$id_receptor', '$fecha', '$id_publicacion','$id_usuario','$id_metodoenvio')";

        $conexion->query($sql);

    }


  ?>