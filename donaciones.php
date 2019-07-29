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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" alt="Muebles" src="images/mueble.jpeg"/>
            <div class="card-block">
              <h4 class="card-title">
                Muebles
              </h4>
              <p class="card-text">
               Usados en buen estado o para restaurar.
              </p>
              <p>
                <a class="btn btn-primary" href="muebles.php">Entrar</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" alt="Ropa" src="images/ropa.jpeg"/>
            <div class="card-block">
              <h4 class="card-title">
                Ropa
              </h4>
              <p class="card-text">
                Usada en condiciones.
              </p>
              <p>
                <a class="btn btn-primary" href="ropa.php">Entrar</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" alt="Alimentos" src="images/alimentos.jpeg"/>
            <div class="card-block">
              <h4 class="card-title">
                Alimentos
              </h4>
              <p class="card-text">
                Alimentos no perecederos
              </p>
              <p>
                <a class="btn btn-primary" href="alimentos.php">Entrar</a>
              </p>
            </div>
          </div>
        </div>
      </div>
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