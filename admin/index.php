<?php
    session_start();

    include('../config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]) )
    {
        switch( $_REQUEST["m"] ){

            case "productos":
                $modulo = "productos";
                break;

            case "tipos_de_producto":
                $modulo = "tipos_de_producto";
                break;

            case "logout":
                $modulo = "logout";
                break;
                    
            case "default":
                echo "error404";

        }
    }

    include( PATH_VIEWS .'/admin/' . $modulo . '/index.php'); 

?>