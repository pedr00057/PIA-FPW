<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Ejemplo de operadores Logicos en PHP</title>
</head>
<body>
<?php
$a=8;
$b=8;
$c= 10;
echo ($a== $b) && ($c > $b),"<br>";
echo ($a == $b) || ($b== $c),"<br>";
echo ($b <= $c),"<br>";
?>
</body>
</html>