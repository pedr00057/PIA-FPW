<link rel="stylesheet" href="style.css">
<?php
function promediotres($cal1, $cal2, $cal3){
$promedio = ($cal1 + $cal2 + $cal3)/3;
return $promedio;
}
$matricula =1556789;
$nombre ='García Juarez José de Jesús';
$c1 = 100;
$c2=90;
$c3= 80;
$promedio = promediotres($c1, $c2, $c3);
echo "Matricula";
echo $matricula;
echo "<br>";
echo "Nombre:";
echo $nombre;
echo "<br>";
echo "Calificación 1";
echo $c1;
echo "<br>";
echo "Calificación 2";
echo $c2;
echo "<br>";
echo "Calificación 3: ";
echo "<p>el promedio es: $promedio.</p>\n";
echo $c3;
if ($promedio>=70);{
echo "EI alumno aprobó la materia";
echo "<br>";
}
if ($promedio<70){
echo "El alumno NO APROBÓ la materia";
}
?>