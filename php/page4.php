<?php

include 'conexion.php';

$documento = $_POST['documento'];
$pregunta34 = $_POST['pregunta34'];
$pregunta35 = $_POST['pregunta35'];
$pregunta36 = $_POST['pregunta36'];
$pregunta37 = $_POST['pregunta37'];
$pregunta38 = $_POST['pregunta38'];
$pregunta39 = $_POST['pregunta39'];
$pregunta40 = $_POST['pregunta40'];
$pregunta41 = $_POST['pregunta41'];
$pregunta42 = $_POST['pregunta42'];
$pregunta43 = $_POST['pregunta43'];
$pregunta43 = $_POST['pregunta43'];
$pregunta44 = $_POST['pregunta44'];
$pregunta45 = $_POST['pregunta45'];
$pregunta46 = $_POST['pregunta46'];
$pregunta47 = $_POST['pregunta47'];
$pregunta48 = $_POST['pregunta48'];

echo $documento;


//esto no es un update si no un insert into respuestas

$sql = "INSERT INTO respuestas (id_user, pregunta34, pregunta35, pregunta36, pregunta37, pregunta38, pregunta39, pregunta40, pregunta41, pregunta42, pregunta43, pregunta44, pregunta45, pregunta46, pregunta47, pregunta48) VALUES ('$documento', '$pregunta34', '$pregunta35', '$pregunta36', '$pregunta37', '$pregunta38', '$pregunta39', '$pregunta40', '$pregunta41', '$pregunta42', '$pregunta43', '$pregunta44', '$pregunta45', '$pregunta46', '$pregunta47', '$pregunta48')";
//recuerden que el campo id_user sera el documento de identidad


echo $sql;
$consulta = mysqli_query($con, $sql);

if (mysqli_num_rows($consulta) > 0) {
    header("Location: page6.php?documento=$documento"   );
}

?>