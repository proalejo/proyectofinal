<?php
include("nav.php")
?> 
  <div class="container-fluid m-5">
     <div class="container-fluid">
        <div class="row">
              <?php
                  include_once 'config/config.php';
                  include_once PATH_HELPERS .'/database_helper.php';
                  include_once PATH_DAOS .'/alimentosDAO.php';
                  include_once PATH_HELPERS .'/html_helper.php';

                  $alimento = buscarPubliAlimento(); 

                    while ($publicalimento = $alimento->fetch_assoc()){

                      crearHTMLpublicacionalimento ( $publicalimento["id"], $publicalimento["producto"], $publicalimento["descripcion"], $publicalimento["img"]);

                    }
                    ?>
        </div>
    </div>
</div>  

    <?php
      include("footer.php")
      ?>  