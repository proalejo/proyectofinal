<?php
include("nav.php")
?>   

<div class="container-fluid m-5">
     <div class="container-fluid">
        <div class="row">  

<?php  
  include_once "config/config.php";  
  include_once PATH_HELPERS . '/database_helper.php';
  include_once PATH_DAOS . '/mispublicacionesDAO.php';
  include_once PATH_HELPERS .'/html_helper.php';

  $publica = buscarPublicacionesUsuario($_SESSION["id_usuario"]); 

                    while ($publis = $publica->fetch_assoc()){

                      crearHTMLpublicacionUsuario( $publis["id"], $publis["producto"], $publis["descripcion"], $publis["img"]);

                    }
                    ?>


        </div>
    </div>
</div>

<?php
if (isset($_GET["eliminar"])) {

	$id_publicacion_el = $_GET["eliminar"];

	include_once "config/config.php";  
  	include_once PATH_HELPERS . '/database_helper.php';



	$conexion = getConexion();

        $sql = "DELETE FROM publicaciones " .         
               " WHERE id = " . $id_publicacion_el;

        $conexion->query( $sql );

    }
?>





<?php


function modificarPublicacion( $publicacion ){

        $conexion = getConexion();

        $sql = "UPDATE publicaciones SET " . 
                    "producto= \"" . $publicacion["producto"] . "\"" .
                    ", descripcion=\"" . $publicacion["descripcion"] . "\"". 
                    ", id_categoria=" . $publicacion["id_categoria"] .
                    ", img=" . $publicacion["img"] .
                    ", id_usuario=" . $publicacion["id_usuario"];

        if ( $publicacion["img"] ){
            $sql .= ", img=\"" . $publicacion["img"] . "\"";
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
