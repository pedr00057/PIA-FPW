<link rel="stylesheet" href="style.css">
<?php
function miPrueba()
{
Static $c =0;
$c= $c+1;
echo "$c";
}
miPrueba();
miPrueba();
miPrueba();
?>