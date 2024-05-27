<link rel="stylesheet" href="style.css">
<?php
echo "<H1>Uso del ISSET</H1>";
$variable = 'valor';
If (isset($variable)){
echo "Primer variable definida!!!";
}
else{
echo "variable NO definida!!!!";
}
echo "<br>";
echo "<br>";
$variable = 'valor';
$variable2 = 'valor2';
If (isset($variable, $variable2)){
echo "Dos variables definidas!!!";
}
else{
echo "variables NO definidas!!!";
}
echo "<br>";
echo "<br>";
$variable = 'valor';
$variable2 = 'valor2';
If (isset($variable, $variable2, $variable3)){
echo "Tres variables definidas!!!";
}
else{
echo "Faltan Variables que NO están definidas!!!";
}
?>