<?php
include("nav.php")
?>

<?php  
  include_once "config/config.php";  
  include_once PATH_HELPERS . '/database_helper.php';
  include_once PATH_DAOS . '/mispublicacionesDAO.php';
  include_once PATH_HELPERS .'/html_helper.php';

  if (isset($_GET["submit"])) {


    include_once PATH_HELPERS . "/database_helper.php";
  
    //$conexion = getConexion();

      //  $sql = "SELECT id_usuario FROM 'publicaciones' WHERE  'id =  $id_publicacion'"

        //  $id_usuario = $conexion->query($sql);

          //        return $id_usuario;


                                      if (isset($_GET["id_receptor"])) {
                                        $id_receptor = $_SESSION["id_receptor"];
                                      }

                                      if (isset($_GET["id_publicacion"])) {
                                        $id_publicacion = $_GET["id_publicacion"];
                                      }

                                    //  if (isset($_GET["id_usuario"])) {
                                      //  $id_usuario = $_GET["id_usuario"];
                                      //}

                                      
                                      if (isset($_GET["id_metodoenvio"])) {
                                        $id_metodoenvio = $_GET["id_metodoenvio"];
                                      }

    
  include_once PATH_HELPERS . "/database_helper.php";
  
    $conexion = getConexion();

        

        $sql = "INSERT INTO donaciones (id_receptor, fecha, id_publicacion, id_metodoenvio) 
                VALUES ('" . $_SESSION["id_receptor"] . "' , now(), '$id_publicacion', '$id_metodoenvio')";

        

        $conexion->query($sql);

    }


  ?>


<div class="container-fluid mb-5 mt-5">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-12">
        <?php
          if (isset($sql)){
          ?>
          

            

                  <div class="mt-5 mb-5">
                  <h1>Donacion Exitosa</h1>
                  <div class="mt-3">                  
                    <p>Muchas Gracias por utilizar nuestra plataforma!</p></div>
</div>

            





                  
        <?php }
        ?>
            
            
          
        
      
    </div>
  </div>
</div>


      <?php
      include("footer.php");
      ?>