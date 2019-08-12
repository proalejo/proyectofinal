<?php

function buscarPedidosUsuario( $id_usuario ){
        $conexion = getConexion();

        $consulta = "SELECT * " . 
                  "FROM donaciones " . 
                  "WHERE id_receptor = " . $id_usuario;


        $resultado = $conexion->query( $consulta );

        return $resultado;
    }