<link rel="stylesheet" href="style.css">
<?php
date_default_timezone_set('America/Mexico_City');
echo "<h4>Uso de la función Date </h4>";
echo date("1"). "<br>";
echo date("1 jS \of F Y h:i:s A"). "<br>";

echo "<h1>Uso de la función getdate</h1>";
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month], $mydate[mday], $mydate[year]"."<br>";

echo "<h4>Uso de la funcion time </h4>";
$t= time();
echo "Sin formato: ".$t."<br>";
echo "Con formato: ";
echo(date("y-m-d,$t"));
?>