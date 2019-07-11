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

<div class="container">
		<div class="row mt-3">
			<div class="col">
				<form action="">
					
					<div class="form-group">
						<label for="nombre">Email</label>
						<input type="Email" class="form-control" placeholder="Email" name="Email" id="Email">
					</div>
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" class="form-control" placeholder="password" name="password" id="password">
					</div>
					
					

					<input type="submit" class="btn btn-primary btn-block" value="Aceptar">
					<br>
				</form>
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