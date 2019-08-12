<?php
include("nav.php")
?>   



<?php  
  include_once "config/config.php";  
  include_once PATH_HELPERS . '/database_helper.php';
  include_once PATH_DAOS . '/mispublicacionesDAO.php';
  include_once PATH_HELPERS .'/html_helper.php';




$pedidos = buscarPedidosUsuario($_SESSION["id_usuario"]); 

                    while ($pedi = $pedidos->fetch_assoc()){

                      crearHTMLpedidosUsuario( $pedi["id"], $pedi["producto"], $pedi["descripcion"], $pedi["img"]);

                    }
                    ?>


?>


  
    <?php
      include("footer.php")
      ?>
