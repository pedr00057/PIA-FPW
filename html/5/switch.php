<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Ejemplo de PHP con el SWITCH</title>
</head>
<body>
<?php
$posicion = "arriba";
switch($posicion){
 case "arriba" : //Bloque 1
   echo "La variable contiene ";
   echo "el valor arriba";
   break;
 case "abajo": //Bloque 2
   echo "La variable contiene ";
   echo "el valor abajo";
   break;
   default:
   break;
}
?>
</body>
</html>