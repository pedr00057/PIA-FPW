<link rel="stylesheet" href="style.css">
<?php
$a= 10;
$b= 20;
function miPrueba(){
global $a,$b;
$b= $a + $b;
}
miPrueba();
echo $b;
?>