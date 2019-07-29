<?php
include("nav.php")
?>


      <br>


      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <form role="form" enctype="multipart/form-data" action="donar.php" method="GET">
              <div class="form-group">
                 
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
              <input value="Donar" type="submit" name="submit" class="btn btn-primary">
              
            </form>

<?php
  
  include_once "config/config.php";

   if (isset($_GET["submit"])) {
                                               
                                                                                                   
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
                                           
                                           if(move_uploaded_file($fileTmpPath, $dest_path))
                                           {
                                            

                                            include_once "helpers/database_helper.php";

                                            $conexion = getConexion();

                                            $producto = $_GET["producto"];
                                            $descripcion = $_GET["descripcion"];



                                             $sql = "INSERT INTO publicaciones (producto, descripcion, id_cat_pubicacion, img) VALUES ('$producto', '$descripcion', '3', '$newFileName' )";

                                             $conexion->query($sql);


                                        
                                                 
                                         
                                            
                                           }
                                           else
                                           {

                                             $mensaje_form = "ERROR AL SUBIR EL ARCHIVO";
                                             echo $mensaje_form;
                               
                                           }
                                         }
                                         else{
                                             $mensaje_form = "El archivo de imagen no es valido.";
                                              echo $mensaje_form;

                                            
                                         }
                                       }
                                     }

                                     ?>


          </div>
        </div>
      </div>







      <br>  







    <?php
      include("footer.php")
      ?>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>




  </body>
</html>