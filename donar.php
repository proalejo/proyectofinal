<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Don-Arte</title>   
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>
   
			

			<?php
			include("nav.php")
			?>


      <br>


      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <form role="form">
              <div class="form-group">
                 
                <label for="inputprod">
                  Producto
                </label>
                <input type="text" class="form-control" id="inputprod" />
              </div>
              <div class="form-group">
                 
                <label for="exampleInputPassword1">
                  Descripcion
                </label>
                <input type="text" class="form-control" id="inputdescrip" />
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
                <input type="file" class="form-control-file" id="exampleInputFile" />
                
              </div>
              <div class="checkbox">
                 
                
              </div> 
              <button type="submit" class="btn btn-primary">
                Donar
              </button>
            </form>
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