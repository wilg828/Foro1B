<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foro 1B</title>
</head>
<body>
<header>
	<h1>
		Cálculo del IVA.
	</h1>
</header>
<nav>
	<a href="index.php">Inicio</a>
	<a href="formulario.html">Validar</a>
	<a href="contacto.html">Contacto</a>
</nav>
<section>
	<h2>
		Resultados para el cálculo el IVA.
	</h2>

<!--Validar el cálculo del IVA utilizando programación en PHP-->
<?php
$cedula=$_POST['cedula']; //ingreso de la cédula
$valor=$_POST['monto'];//ingreso del monto de la compra, no incluye iva
$descuento=0.2;//porcentaje del descuento
$iva=0.12;//porcentaje del iva
//Condicional, si el cliente realiza compras por montos mayores a USD 100, se le da un descuento del 20%
if ($valor>=100) {
	$resultado=($valor*(1+$iva))*(1-$descuento);
echo "El cliente con número de cédula: " .$cedula. "," ." por el monto de su compra obtiene un descuento del 20%. El valor final a cancelar incluido el IVA es de " .$resultado. ".";}
elseif ($valor<100){
	$resultado=$valor*(1+$iva);
	echo "El cliente con número de cédula: " .$cedula. "," ." por su compra debe cancelar un total de " .$resultado. ","." incluye el valor del iva"."." ;}
?>
</section>
<footer><br><br><br><br>
	<div class="container">
    &copy; 2022 - Todos los derechos reservados. Desarrollo Web W.G.
     </div>
</footer>