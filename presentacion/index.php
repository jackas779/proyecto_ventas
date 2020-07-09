<?php
 require_once('../datos/conexion.php'); 
 ?>
 <?php
 $variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}

$query_DatosConsulta = sprintf("SELECT * FROM productos");
$DatosConsulta = mysqli_query($con,  $query_DatosConsulta) or die(mysqli_error($con));
$row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
$totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);

//FINAL DE LA PARTE SUPERIOR
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Claud-Ventas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php 
	include ("../includes/cabecera-index.php");
	?>
  </head>
  <body class="goto-here">
  <?php 
	include ("../includes/header.php");
	?>
	<?php 
	include ("../includes/slider.php");
	?>
	<?php 
	include ("../includes/etiquetas.php");
	?>
	<?php 
	include ("../includes/productos.php");
	?>
	<?php 
	include ("../includes/productos_destacados2.php");
	?>  
	<?php 
	include ("../includes/testimonios.php");
	?>  
	<?php 
	include ("../includes/footer.php");
	include ("../includes/js_footer.php");
	?>  
   
  </body>
</html>
<?php
//AÑADIR AL FINAL DE LA PÁGINA
mysqli_free_result($DatosConsulta);
?>