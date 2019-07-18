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
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <img alt="camisa" id="prod_image" src="images/leche.jpg" />
      <dl class="mt-5">
        <dt>
          Leche Nido
        </dt>
        
        
        <dd class="mt-5">
          Leche Nido Vencimiento 27/05/2021
        </dd>
      </dl> 
      <button type="button" class="btn btn-success">
        Lo Necesito
      </button>
    </div>
    <div class="col-md-4">
      <img alt="camisa" id="prod_image" src="images/arroz.jpg" />
      <dl class="mt-5">
        <dt>
          Arroz
        </dt>
        
        
        <dd class="mt-5">
          Arroz largo fino Vencimiento 02/07/2020.
        </dd>
      </dl> 
      <button type="button" class="btn btn-success">
        Lo Necesito
      </button>
    </div>
    <div class="col-md-4">
      <img alt="camisa" id="prod_image" src="images/arvejas.jpg" />
      <dl class="mt-5">
        <dt>
          Arvejas
        </dt>
        
        
        <dd class="mt-5">
          Arvejas en lata Vencimiento 10/10/2020.
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