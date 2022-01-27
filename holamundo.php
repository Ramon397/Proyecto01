<?php
	print "Hola mundo";
	//variables
	$numero=5;
	$cadena="Hola que haces";$respuesta="nada pendejo <br>";
	print $cadena .' - '.$respuesta;	
	echo "cuanto dinero tienes:$ $numero ";
	$bol=true;
	echo "<br> esta pendejo: $bol";
	$colores=array("rojo","azul","verde");
	echo "<br> este en una variable del arreglo: $colores[0]";
	//arregllo con propiedades
	$verduras=array("verdura1"=>"lechuga","verdura2"=>"cebolla");
	echo "<br> Esto es una variable array con propiedades: $verduras[verdura2]";
	//variable objeto
	$frutas=(object)["fruta1"=>"pera","fruta2"=>"manzana"];
	echo "<br>Esto es una variable objeto:$frutas->fruta1";
	//var_dum arroja el tipo de variable a usar
	echo "<br>";
	 var_dump($numero);
?>
