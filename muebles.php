<?php
include("nav.php")
?>
    <div class="container-fluid m-5">
      <div class="container-fluid">
        <div class="row">
                <?php
                      include_once 'config/config.php';
                      include_once PATH_HELPERS .'/database_helper.php';
                      include_once PATH_DAOS .'/mueblesDAO.php';
                      include_once PATH_HELPERS .'/html_helper.php';

                      $mueble = buscarPubliMueble(); 

                      while ($publicmueble = $mueble->fetch_assoc()){

                      crearHTMLpublicacionmueble ( $publicmueble["id"], $publicmueble["producto"], $publicmueble["descripcion"], $publicmueble["img"]);
                        }
                        ?>

        </div>
      </div>
    </div>
    
<?php
  include("footer.php")
      ?>
