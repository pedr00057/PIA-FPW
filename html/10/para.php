<link rel="stylesheet" href="style.css">
<?php
function saludar(string $nombre = 'Anónimo'): string
{
return 'Hola, persona llamada '. $nombre .'. Por lo que veo tu nombre mide ' .strlen($nombre).' carácteres.';
}
echo saludar();
?>