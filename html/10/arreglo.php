<link rel="stylesheet" href="style.css">

<?php
$apartamentos=[
[
'precio/noche'=> 40, 
'ciudad'=> 'Valencia',
'wifi' => True,
'pagina web' => "https://hotel.com"
],
[
'precio/noche' => 87,
'ciudad'=> 'Calpe',
'wifi'=> True,
'pagina web' => 'https://calpe.com'
],
[
'precio/noche' => 67,
'ciudad' => 'Valencia',
'wifi'=> False,
'pagina web'=> 'https://denia.com'
],
[
'precio/noche' => 105,
'ciudad'=> 'Benidorm',
'wifi'=> False,
'pagina web' => 'https://benidorm.com'
],
];
$media = array_reduce($apartamentos, function ($acumulador, $apartamento){
    return $apartamento['precio/noche'] + $acumulador;
}, 0)/ count($apartamentos);
echo("media aritmética: $media");
?>