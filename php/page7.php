<?php

include 'conexion.php';

$documento = $_POST['documento'];
$pregunta49 = $_POST['pregunta49'];
$pregunta50 = $_POST['pregunta50'];
$pregunta51 = $_POST['pregunta51'];
$pregunta52 = $_POST['pregunta52'];
$pregunta53 = $_POST['pregunta53'];
$pregunta54 = $_POST['pregunta54'];
$pregunta55 = $_POST['pregunta55'];
$pregunta56 = $_POST['pregunta56'];
$pregunta57 = $_POST['pregunta57'];
$pregunta58 = $_POST['pregunta58'];
$pregunta59 = $_POST['pregunta59'];
$pregunta60 = $_POST['pregunta60'];
$pregunta61 = $_POST['pregunta61'];
$pregunta62 = $_POST['pregunta62'];
$pregunta63 = $_POST['pregunta63'];
$pregunta64 = $_POST['pregunta64'];
$pregunta65 = $_POST['pregunta65'];
$pregunta66 = $_POST['pregunta66'];
$pregunta67 = $_POST['pregunta67'];
$pregunta68 = $_POST['pregunta68'];
$pregunta69 = $_POST['pregunta69'];
$pregunta70 = $_POST['pregunta70'];
$pregunta71 = $_POST['pregunta71'];
$pregunta72 = $_POST['pregunta72'];
$pregunta73 = $_POST['pregunta73'];
$pregunta74 = $_POST['pregunta74'];

echo $documento;

$sql = "UPDATE respuestas SET pregunta49 = '$pregunta49', pregunta50 = '$pregunta50', pregunta51 = '$pregunta51', pregunta52 = '$pregunta52', pregunta53 = '$pregunta53', pregunta54 = '$pregunta54', pregunta55 = '$pregunta55', pregunta56 = '$pregunta56', pregunta57 = '$pregunta57', pregunta58 = '$pregunta58', pregunta59 = '$pregunta59', pregunta60 = '$pregunta60', pregunta61 = '$pregunta61', pregunta62 = '$pregunta62', pregunta63 = '$pregunta63', pregunta64 = '$pregunta64', pregunta65 = '$pregunta65', pregunta66 = '$pregunta66', pregunta67 = '$pregunta67', pregunta68 = '$pregunta68', pregunta69 = '$pregunta69', pregunta70 = '$pregunta70', pregunta71 = '$pregunta71', pregunta72 = '$pregunta72', pregunta73 = '$pregunta73', pregunta74 = '$pregunta74', WHERE documento = '$documento'";

echo $sql;
$consulta = mysqli_query($con, $sql);

if ($consulta > 0) {
    //De aca nos debe votar a la ultima del formulario no a la pagina 8
    header("Location: page8.php?documento='$documento'"   );
}

?>