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

                      crearHTMLpublicacionmueble ( $publicmueble["producto"], $publicmueble["descripcion"], $publicmueble["img"]);

                    }
                    ?>

    </div>
 </div>
</div>

  <div class="row mb-3 mt-3">
        <div class="col-md-12 d-flex flex-row-reverse bd-highlight">
            <nav>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
        </div>
  </div>

    <?php
      include("footer.php")
      ?>
