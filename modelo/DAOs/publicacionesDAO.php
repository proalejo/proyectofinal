<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarPublicaciones($busqueda, $id_categoria, $orden){

        $conexion = getConexion();

        $consulta = "SELECT id, producto, SUBSTRING(descripcion, 1, 100) AS descripcion, id_categoria, id_usuario, img " . 
                  "FROM publicaciones ";

        if ( $busqueda != "" ){

           $consulta .= " WHERE (producto LIKE '%" . $busqueda . "%' OR descripcion LIKE '%" . $busqueda . "%')";
        }

        

        if ( $id_categoria >= 0 )
        {
            
            else
            {
                $consulta .= " WHERE ";
            }

            $consulta .= " id_categoria = " . $id_categoria;

        }

        $consulta .= " ORDER BY " . $orden;

        $resultado = $conexion->query( $consulta );


        return $resultado;
	}

    function buscarPublicacion( $id_publicacion ){
        $conexion = getConexion();

        $consulta = "SELECT * " . 
                  "FROM publicaciones " . 
                  "WHERE pub_id = " . $id_publicacion;

        $resultado = $conexion->query( $consulta );

        return $resultado;
    }

    