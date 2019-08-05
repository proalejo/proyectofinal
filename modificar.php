<?php
include("nav.php")
?>   

<?php
  
  include_once "config/config.php";                                                 
                                                                                                 
            //Guardo la imagen de la publicacion
                                  if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                                        

                                       $fileTmpPath = $_FILES['foto']['tmp_name'];
                                        $fileName = $_FILES['foto']['name'];

                                        $fileNameCmps = explode(".", $fileName);
                                        $fileExtension = strtolower(end($fileNameCmps));

                                         $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

                                         $allowedfileExtensions = array('jpg', 'gif', 'png', 'webp');

                                        if (in_array($fileExtension, $allowedfileExtensions)) {
                                                      
                                           $dest_path = UPLOAD_IMAGE_PATH . "/" . $newFileName;
                                           
                                           $foto = $newFileName;
                                          move_uploaded_file($fileTmpPath, $dest_path);
                                        
                                         }
                                         else{
                                             $mensaje_form = "El archivo de imagen no es valido.";
                                              echo $mensaje_form;

                                            
                                         }
                                       }
                if (isset($_POST["submit"])) {                              

                                if (isset($_POST["producto"])) {

                                        $producto = $_POST["producto"];

                                      }
                                      if (isset($_POST["descripcion"])) {
                                        $descripcion = $_POST["descripcion"];
                                      }
                                      if (isset($_POST["categoria"])) {
                                        $categoria = $_POST["categoria"];
                                      }
                                       if (isset($_POST["m"])) {
                                        $id_produ = $_POST["m"];
                                      }
                          
include_once PATH_HELPERS . '/database_helper.php';
      
      $conexion = getConexion();

        $sql = "UPDATE publicaciones " . 

                "SET producto = '" . $producto . "'" .
                 ",  descripcion = '" . $descripcion . "'" .
                  ",  id_cat_publicacion = '" . $categoria . "'" .
                  ",  img = '" . $foto .
                  
                "' WHERE id = " . $id_produ; 
                       
        $conexion->query( $sql );

        header( 'Location: misdonaciones.php' );





    }

?>
    




      <div class="container-fluid mt-5 mb-5">
        <div class="row">
          <div class="col-md-12">
          <?php if (isset($_GET["m"])) {

          	$id_produ = $_GET["m"];
          } ?>
            <form role="form" enctype="multipart/form-data" action="modificar.php" method="POST">
              <div class="form-group">
              	<input type="hidden" name="m" value="<?= $id_produ ?>">
                 
                <label for="inputprod">
                  Producto
                </label>
                <input type="text" name="producto" class="form-control" id="inputprod" />
              </div>
              <div class="form-group">
                 
                <label for="exampleInputPassword1">
                  Descripcion
                </label>
                <input type="text" class="form-control" id="inputdescrip" name="descripcion" />
              </div>
              
              <select name="categoria">
                 <option value="1">Muebles</option> 
                 <option value="2">Ropa</option> 
                 <option value="3">Alimentos</option>                  
              </select>          


              <div class="form-group">
                 
                <label for="exampleInputFile">
                  Imagen Producto
                </label>
                <input type="file" name="foto" class="form-control-file" id="exampleInputFile" />
                
              </div>
              <div class="checkbox">
                 
                
              </div> 
              <input type="submit" name="submit" class="btn btn-success" value="Modificar">
              
            </form>



          </div>
        </div>
      </div>








  <?php
  include("footer.php")
  ?>