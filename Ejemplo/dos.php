<?php

$edad = $_REQUEST['edad'];
$sexo = $_POST['sexo'];
$extras = $_POST['extras'];
$aceptar = $_POST['enviar'];
//$actualizar = $_REQUEST['actualizar datos'];
$color = $_POST['color'];
$idiomas = $_POST['idiomas'];
//$file = $_FILES['fileToUpload'];

/*
if ($aceptar) {
	echo "Has aceptado <br>";
} elseif ($actualizar) {
	echo "Has actualizado<br>";
}

echo "La edad es $edad<br>";

echo "El valor del sexo es $sexo<br>";

//print_r($extras);

echo "Has elegido las extras:<br>";

foreach ($extras as $extra) {
	echo $extra."<br>";
}

echo "Este es tu color: $color<br>";

echo "Este es tu idioma: ";
foreach ($idiomas as $idioma) {
	echo $idioma."<br>";
}
*/

//print_r($_FILES['fileToUpload']);

$tmp_name = $_FILES['fileToUpload']['tmp_name'];
$nombreFichero = $_FILES['fileToUpload']['name'];

if (is_uploaded_file ($tmp_name))
{

 $carpeta = getcwd();
 $nombreDirectorio = "img/";

 move_uploaded_file ($tmp_name, $nombreDirectorio . $nombreFichero);
} else
 print ("No se ha podido subir el fichero\n");

?>