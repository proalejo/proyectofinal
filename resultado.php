<?php
include("nav.php")
?>
	<div class="container-fluid m-5">
		<div class="row">
			
		
	<?php
	include_once PATH_HELPERS . "/html_helper.php";
	include_once PATH_HELPERS . "/database_helper.php";

	function buscarProdu($busqueda){

    $conexion = getConexion();

    $consulta = "SELECT * FROM `publicaciones` WHERE producto LIKE '%". $busqueda ."%'";
    //"SELECT * 
                //FROM publicaciones 
                //WHERE producto LIKE '% ". $busqueda . "%' ";

    
    $resultado = $conexion->query($consulta);

    return $resultado;

}
	
	if ( isset( $_GET["submit"])) {
         

         		$busqueda = $_GET["busqueda"];
         		 

         		$resultadoprodu = buscarProdu($busqueda);

         		while( $produ = $resultadoprodu->fetch_assoc()){
         			crearHTMLcardProdu($produ["id"],$produ["producto"], $produ["descripcion"], $produ["img"]);

         		}


         }


 



	?>

</div>
	</div>







      <?php
      include("footer.php")
      ?>
    