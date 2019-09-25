<?php
	//methods:
	//"a" -> añadir al final.
	//"w" -> machaca el text per l'actual.
	//"r" -> llegir.

	$ar = fopen("datos.txt", "w") or die("Problemas en la creación.");

	for ($i=0; $i < 100; $i++) { 
		echo "Grabando linea $i<br>";
		fputs($ar,"linea$i\n");
	}

	fclose($ar);

	echo "<hr>";
	echo "Leyendo fichero ... <br>";

	$fp = fopen("datos.txt", "r") or die("Problemas en leer el archivo.");
	echo "<br>";
	
	while (!feof($fp)) {
		$linea = fgets($fp);
		echo "$linea<br>";
	}

	fclose($fp);
?>