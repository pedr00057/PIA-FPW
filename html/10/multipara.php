<link rel="stylesheet" href="style.css">
<?php
function saludar(string $nombre = 'Anónimo', string $profesion = 'ninguna'): string
{
return 'Hola, persona llamada '. $nombre .'. Por lo que veo tu nombre mide '. strlen($nombre).' carácteres. De profesión '. $profesion.".";
}
echo saludar();
echo '<br>';
echo saludar('Espartaco');
echo '<br>';
echo saludar('Picasso', 'pintor');
?>