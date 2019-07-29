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


      <div class="row">
            <div class="col-md-12">
                
                <h1 id="nosotros">Nosotros</h1>


            <p id="intro">Somos una fundación sin fines de lucro, con ganas de incursionar en el arte de donar. Queremos que todos los que necesiten algo lo tengan, sin necesidad de invertir nada solo esfuerzo y ganas de demostrar porque deberían recibir ese producto. 
            Hoy esta pagina inicia como un proyecto final de un curso de desarrollador full stack para <strong>COMUNIDADIT</strong>. 
            Aquí contaremos historias de vida de personas reales, como vos y como yo, que hoy en día necesitan algo o quieren ayudar a alguien!</p>








          </div>
      </div>
    

    <?php
      include("footer.php")
      ?>
    

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



  </body>
</html>