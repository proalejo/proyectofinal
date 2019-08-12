<?php
include("nav.php")
?> 
  <div class="container-fluid m-5">
    <div class="container-fluid">
      <div class="row">
              <?php
                   include_once 'config/config.php';
                   include_once PATH_HELPERS .'/database_helper.php';
                   include_once PATH_DAOS .'/ropaDAO.php';
                   include_once PATH_HELPERS .'/html_helper.php';

                   $ropa = buscarPubliRopa(); 

                    while ($publicropa = $ropa->fetch_assoc()){

                    crearHTMLpublicacionropa ( $publicropa["id"], $publicropa["producto"], $publicropa["descripcion"], $publicropa["img"]);

                    }
                    ?>
      </div>
    </div>
  </div>

    <?php
      include("footer.php")
      ?>