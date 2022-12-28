<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE nombre ='$nombre' AND contraseña ='$password'";


$consulta = mysqli_query($con, $sql);
if (mysqli_num_rows($consulta) > 0) {
    session_start();
    $_SESSION["user"]=$nombre;
    header("Location: result.php");
}else{
    die("No tienes acceso a esta pagina.");
}

?>