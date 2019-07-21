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
     <link href="css/style.css" rel="stylesheet">   
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>
   
      

      <?php
      include("nav.php")
      ?>


      <br>

  <div class="container-fluid">
      <div class="row">
         <div class="col-md-4">
          <img alt="Campera" id="prod_image" style="max-height: 200px; max-width: 200px;" src="images/campera.jpg"/>
          <dl class="mt-5">
            <dt>
              Campera de Cuero
            </dt>        
            
            <dd class="mt-5">
              Campera de cuero en buen estado.
            </dd>
          </dl> 
          <button type="button" class="btn btn-success">
            Lo Necesito
          </button>
        </div>
    <div class="col-md-4">
      <img alt="zapatos" id="prod_image"  style="max-height: 200px; max-width: 200px;" src="images/zapatos.jpg" />
      <dl class="mt-5">
        <dt>
          Zapatos Negros
        </dt>
        
        
        <dd class="mt-5">
          Zapatos Negros Nº42 listos para usar.
        </dd>
      </dl> 
      <button type="button" class="btn btn-success">
        Lo Necesito
      </button>
    </div>
    <div class="col-md-4">
      <img alt="camisa" id="prod_image" style="max-height: 200px; max-width: 200px;" src="images/camisa.jpg" />
      <dl class="mt-5">
        <dt>
          Camisa Azul
        </dt>
        
        
        <dd class="mt-5">
          Camisa Azul talle L manga corta.
        </dd>
      </dl> 
      <button type="button" class="btn btn-success">
        Lo Necesito
      </button>
    </div>
  </div>
  <br>

  <div class="row">
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