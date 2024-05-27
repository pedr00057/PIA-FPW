<link rel="stylesheet" href="style.css">
<?php
function calculaMedia($arg1, $arg2, $arg3= "aritmética"){
if ($arg3 =="aritmética"){
$media =($arg1 + $arg2)/2;
}
elseif ($arg3 == "geométrica"){
$media = sqrt($arg1 * $arg2)/2;
}
elseif ($arg3=="armónica"){
$media = 2 *($arg1 *$arg2)/ ($arg1 + $arg2);
return $media;
}
}
$dato1 = 12;
$dato2= 16;
$media = calculaMedia($dato1, $dato2, "geométrica");
print "<p>La media geométrica de $dato1 y $dato2 es $media. </p>\n";
$media = calculaMedia($dato1, $dato2);
print "<p>La media aritmética de $dato1 y $dato2 es $media. </p>ln";
?>