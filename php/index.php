<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$td = $_POST['td'];
$documento = $_POST['documento'];
$programa = $_POST['programa'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$pregunta1 = $_POST['pregunta1'];
$pregunta2 = $_POST['pregunta2'];
$pregunta3 = $_POST['pregunta3'];
$pregunta4 = $_POST['pregunta4'];
$pregunta5 = $_POST['pregunta5'];
$parentesco_emergencia = $_POST['parentesco_emergencia'];
$nombre_emergencia = $_POST['nombre_emergencia'];
$celular_emergencia = $_POST['celular_emergencia'];
$pregunta6 = $_POST['pregunta6'];
$pregunta7 = $_POST['pregunta7'];
$pregunta8 = $_POST['pregunta8'];
$pregunta9 = $_POST['pregunta9'];
$pregunta10 = $_POST['pregunta10'];


$sql = "INSERT INTO datos_personales (nombre, td, documento, programa, email, celular, parentesco_emergencia, nombre_emergencia, celular_emergencia, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10) VALUES ('$nombre', '$td', '$documento', '$programa', '$email', '$celular', '$parentesco_emergencia', '$nombre_emergencia', '$celular_emergencia', '$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$pregunta5', '$pregunta6', '$pregunta7', '$pregunta8', '$pregunta9', '$pregunta10');";

echo $sql;

$consulta = mysqli_query($con, $sql);

echo $consulta;
if ($consulta > 0) {
    header("Location: page1.php?documento=$documento"   );
}

?>