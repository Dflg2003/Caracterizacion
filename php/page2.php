<?php

include 'conexion.php';

$documento = $_POST['documento'];
$pregunta11 = $_POST['pregunta11'];
$pregunta12 = $_POST['pregunta12'];
$pregunta13 = $_POST['pregunta13'];
$pregunta14 = $_POST['pregunta14'];
$pregunta15 = $_POST['pregunta15'];
$pregunta16 = $_POST['pregunta16'];
$pregunta17 = $_POST['pregunta17'];
$pregunta18 = $_POST['pregunta18'];
$pregunta19 = $_POST['pregunta19'];
$pregunta20 = $_POST['pregunta20'];
$pregunta21 = $_POST['pregunta21'];
$pregunta22 = $_POST['pregunta22'];
$pregunta23 = $_POST['pregunta23'];
$pregunta24 = $_POST['pregunta24'];
$pregunta25 = $_POST['pregunta25'];
$pregunta26 = $_POST['pregunta26'];
$pregunta27 = $_POST['pregunta27'];
$pregunta28 = $_POST['pregunta28'];
$pregunta29 = $_POST['pregunta29'];
$pregunta30 = $_POST['pregunta30'];
$pregunta31 = $_POST['pregunta31'];
$pregunta32 = $_POST['pregunta32'];
$pregunta33 = $_POST['pregunta33'];

echo $documento;

$sql = "UPDATE datos_personales SET pregunta11 = '$pregunta11', pregunta12 = '$pregunta12', pregunta13 = '$pregunta13', pregunta14 = '$pregunta14', pregunta15 = '$pregunta15', pregunta16 = '$pregunta16', pregunta17 = '$pregunta17', pregunta18 = '$pregunta18', pregunta19 = '$pregunta19', pregunta20 = '$pregunta20', pregunta21 = '$pregunta21', pregunta22 = '$pregunta22', pregunta23 = '$pregunta23', pregunta24 = '$pregunta24', pregunta25 = '$pregunta25', pregunta26 = '$pregunta26', pregunta27 = '$pregunta27', pregunta28 = '$pregunta28', pregunta29 = '$pregunta29', pregunta30 = '$pregunta30', pregunta31 = '$pregunta31', pregunta32 = '$pregunta32', pregunta33 = '$pregunta33' WHERE documento = '$documento'";

echo $sql;
$consulta = mysqli_query($con, $sql);

if ($consulta > 0) {
    header("Location: page3.php?documento=$documento"   );
}

?>