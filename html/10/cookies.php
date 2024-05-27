<link rel="stylesheet" href="style.css">

<?php
if(isset($_COOKIE['contador']))
{
setcookie('contador'. $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
$mensaje = 'Número de visitas: '.$_COOKIE['contador'];
}
else{
setcookie('contador', 1, time() + 365 * 24 * 60 *60);
$mensaje = 'Bienvenido a nuestra página web';
}
?>
<?php echo $mensaje ?>