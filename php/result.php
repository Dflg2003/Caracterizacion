<?php
session_start();
include 'conexion.php';
$user = $_SESSION["user"];
$sql = "SELECT * FROM usuarios WHERE nombre ='$user'";


$consulta = mysqli_query($con, $sql);
if (mysqli_num_rows($consulta) > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Style/result.css">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
      $("input").ready(function(){
    var codigo = $("#table").html();
    $("#codigo").attr("value", codigo);
  });
    </script>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nobre completo</th>
                <th scope="col">Tipo de documento</th>
                <th scope="col">No. de documento</th>
                <th scope="col">Programa inscrito</th>
                <th scope="col">Correo electronico</th>
                <th scope="col">Numero de telefono</th>
                <th scope="col">Nombre de contacto de emergencia</th>
                <th scope="col">Numero de contacto de emergencia</th>
                <th scope="col">Otras preguntas</th>
              </tr>
            </thead>
            <tbody id="table">
            <?php
include 'conexion.php';

$sql = "SELECT * FROM datos_personales";
  $consulta = mysqli_query($con, $sql);
  if (mysqli_num_rows($consulta) > 0) {
    while($row = mysqli_fetch_assoc($consulta)) {
?>

              <tr>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["td"]; ?></td>
                <td><?php echo $row["documento"]; ?></td>
                <td><?php echo $row["programa"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["celular"]; ?></td>
                <td><?php echo $row["nombre_emergencia"]; ?></td>
                <td><?php echo $row["celular_emergencia"]; ?></td>
                <td>
                <form action="download.php" method="post">
                  <input type="hidden" name="documento" value="<?php echo $row["documento"]; ?>">
                  <button class="btn btn-success" type="submit" name="action" onclick="codigo()">Descargar Respuestas
                </button>
                </form>
                </td>
              </tr>
            </tbody>
            <?php
        }
    }else{
      echo "No se encontraron Resultados";
    }
  
  ?>
          </table>
          
    </article>
    <form action="download.php" method="post">
    <button class="btn btn-success" type="submit" name="action" onclick="codigo()">Descargar Respuestas
  </button>
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

    
  </form>
    
</body>
</html>
<?php

}else{
  die("No tienes acceso a esta pagina.");
}
?>