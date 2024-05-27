<link rel="stylesheet" href="style.css">

<?php

function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos 
    $datos = stripslashes($datos); // Elimina backslashes
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades
    return $datos;
}
if(isset($_POST["submit"]) && $_SERVER ["REQUEST_METHOD"] = "POST"){
    if(empty($_POST["nombre"])){
        $errores[] = "El nombre es requerido";
    }
    if(empty($_POST["password"]) || strlen($_POST["password"]) < 5){ 
        $errores[] = "La contraseña es requerida y ha de ser mayor a 5 caracteres";
    }
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
        $errores[] = "No se ha indicado email o el formato no es correcto";
    }
    if(!filter_var($_POST["sitioweb"], FILTER_VALIDATE_URL) || empty($_POST["sitioweb"])){
        $errores[ ] = "No se ha indicado sitio web o el formato no es correcto";
    }
    if(empty($errores)) {
    $nombre = filtrado($_POST["nombre"]);
    $password =filtrado($_POST["password"]);
    $educacion= filtrado($_POST["educacion"]);
    // Utilizamos implode para pasar el array a string
    $idiomas =filtrado(implode(", ", $_POST["idiomas"]));
    $email= filtrado($_POST["email"]);
    $sitioweb= filtrado($_POST["sitioweb"]);
}
}
?>

<ul>
    <?php if(isset($errores)) {
        foreach ($errores as $error) {
            echo "<li> $error </li>";
        }
    }
    ?>
</ul> <br>
<?php if(isset($_POST["submit"])): ?> 
    <div class="pehp">
    <h2>Mostrar datos enviados</h2>
    <p>Nombre:</p> <?php isset($nombre) ? print $nombre: " "; ?> <br>
    <p>Contraseña:</p> <?php isset($password) ? print $password : " "; ?> <br>
    <p>Educación:</p> <?php isset($educacion) ? print $educacion : " "; ?> <br> 
    <p>Lenguajes preferidos:</p> <?php isset($idiomas) ? print $idiomas: " "; ?> <br>
    <p>Email:</p> <?php isset($email)? print $email: " "; ?> <br>
    <p>Sitio web:</p> <?php isset($sitioweb)? print $sitioweb: " "; ?> <br>
    </div>
<?php endif; ?>