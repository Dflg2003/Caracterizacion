<?php

include 'conexion.php';


$pregunta75 = $_POST['pregunta75'];
$pregunta76 = $_POST['pregunta76'];
$pregunta77 = $_POST['pregunta77'];
$pregunta78 = $_POST['pregunta78'];
$pregunta79 = $_POST['pregunta79'];
$pregunta80 = $_POST['pregunta80'];
$pregunta81 = $_POST['pregunta81'];
$pregunta82 = $_POST['pregunta82'];
$pregunta83 = $_POST['pregunta83'];
$pregunta84 = $_POST['pregunta84'];
$pregunta85 = $_POST['pregunta85'];
$pregunta86 = $_POST['pregunta86'];
$pregunta87 = $_POST['pregunta87'];
$pregunta88 = $_POST['pregunta88'];
$pregunta89 = $_POST['pregunta89'];
$pregunta90 = $_POST['pregunta90'];
$pregunta91 = $_POST['pregunta91'];
$pregunta92 = $_POST['pregunta92'];
$pregunta93 = $_POST['pregunta93'];
$pregunta94 = $_POST['pregunta94'];


$sql = "INSERT INTO page4 ( pregunta75, pregunta76, pregunta77, pregunta78, pregunta79, pregunta80, pregunta81, pregunta82, pregunta83, pregunta84,pregunta85, pregunta86, pregunta87, pregunta88, pregunta89, pregunta90, pregunta91, pregunta92, pregunta93, pregunta94) VALUES ('$pregunta75', '$pregunta76', '$pregunta77', '$pregunta78', '$pregunta79', '$pregunta80', '$pregunta81', '$pregunta82', '$pregunta83', '$pregunta84','$pregunta85', '$pregunta86', '$pregunta87', '$pregunta88', '$pregunta89', '$pregunta90', '$pregunta91', '$pregunta92', '$pregunta93', '$pregunta94');";

echo $sql;

$consulta = mysqli_query($con, $sql);

echo $consulta;
if ($consulta > 0) {
    header("Location: page1.php?documento=$documento");
}

?>