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

$sql = "UPDATE datos_personales SET pregunta34 = '$pregunta34', pregunta35 = '$pregunta35', pregunta36 = '$pregunta36', pregunta37 = '$pregunta37', pregunta38 = '$pregunta38', pregunta39 = '$pregunta39', pregunta40 = '$pregunta40', pregunta41 = '$pregunta41', pregunta42 = '$pregunta42', pregunta43 = '$pregunta43', pregunta44 = '$pregunta44', pregunta45 = '$pregunta45', pregunta46 = '$pregunta46', pregunta47 = '$pregunta47', pregunta48 = '$pregunta48', WHERE documento = '$documento'";

echo $sql;
$consulta = mysqli_query($con, $sql);

if ($consulta > 0) {
    header("Location: page5.php?documento=$documento"   );
}

?>