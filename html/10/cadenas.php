<link rel="stylesheet" href="style.css">

<?php
echo "<h3>Funciones de Cadenas</h3>";
echo "<strong>La cadena original es:</strong> uso de funciones cadenas en php";
$texto="uso de funciones cadenas en php";
echo "<br><br>";
echo "<strong>Convertir cadena a MAYUSCULAS:</strong> ".strtoupper($texto);
echo "<br>";
echo "<strong>Convierte la primer letra de la cadena en Mayuscula:</strong> ";
echo ucfirst($texto);
echo "<br>";
echo "<strong> Convierte la primer letra de cada palabra de la cadena en mayuscula:</strong>";
echo ucwords($texto);
echo "<br>";
echo "<strong>Elimina espacios al inicio y final de la cadena:</strong>";
echo trim($texto);
echo "<br>";
echo "<strong>Repite una cadena varias veces:</strong>","<br>";
echo str_repeat($texto,3);
echo "<br>";
echo "<strong>Devuelve la longitu de la cadena:</strong>";
echo strlen($texto);
echo "<br>";
echo "<strong>Busca una cadena dentro de otra cadena:</strong>";
$buscar = "cadenas";
echo strstr($texto,$buscar);
echo "<br>";
echo "<strong>Extraer una parte de una cadena contando ios caracteres desde inicio a fin:</strong>";
echo substr($texto,0,9);
echo "<br>";
echo "<strong>Identifica la posición de la cadena buscada dentro de una cadena:</strong>";
$buscar = "funciones";
echo strpos($texto,$buscar);
?>
