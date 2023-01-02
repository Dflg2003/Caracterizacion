<?php
session_start();
include 'conexion.php';
$user = $_SESSION["user"];
$sql = "SELECT * FROM usuarios WHERE nombre ='$user'";


$consulta = mysqli_query($con, $sql);
if (mysqli_num_rows($consulta) > 0) {}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Style/result.css">
    <link rel="stylesheet" href="../Style/menu.css">
    
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
      $("input").ready(function(){
    var codigo = $("#table").html();
    $("#codigo").attr("value", codigo);
  });
    </script>
</head>
<body class="fondo">
    <div class="tablaR">
        <table class="table" style="margin-top: 50px;">
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
  if(!empty($_REQUEST["nume"])){ $_REQUEST["nume"] = $_REQUEST["nume"];}else{ $_REQUEST["nume"] = '1';}
            if($_REQUEST["nume"] == "" ){$_REQUEST["nume"] = "1";}
            $articulos=mysqli_query($con,"SELECT * FROM datos_personales  ;");
            $num_registros=@mysqli_num_rows($articulos);
            $registros= '5';
            $pagina=$_REQUEST["nume"];
            if (is_numeric($pagina))
            $inicio= (($pagina-1)*$registros);
            else
            $inicio=0;
            $busqueda=mysqli_query($con,"SELECT * FROM datos_personales LIMIT $inicio,$registros;");
            $paginas=ceil($num_registros/$registros);
            while ($row = mysqli_fetch_assoc($busqueda)){ ?>
              <tr>
                <td class="border border-dark"><?php echo $row["nombre"]; ?></td>
                <td class="border border-dark"><?php echo $row["td"]; ?></td>
                <td class="border border-dark"><?php echo $row["documento"]; ?></td>
                <td class="border border-dark"><?php echo $row["programa"]; ?></td>
                <td class="border border-dark"><?php echo $row["email"]; ?></td>
                <td class="border border-dark"><?php echo $row["celular"]; ?></td>
                <td class="border border-dark"><?php echo $row["nombre_emergencia"]; ?></td>
                <td class="border border-dark"><?php echo $row["celular_emergencia"]; ?></td>
                <td class="border border-dark">
                <form action="download.php" method="post">
                  <input type="hidden" name="documento" value="<?php echo $row["documento"]; ?>">
                  <button class="btn btn-success" type="submit" name="action" onclick="codigo()">Descargar Respuestas
                </button>
                </form>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          
    </article>
    <form action="download.php" method="post">
    <button class="btn btn-success" type="submit" name="action" onclick="codigo()">Descargar Respuestas
  </button>
  <nav aria-label="Page navigation example">
  <div class="container-fluid  col-12">
        <ul class="pagination pg-dark justify-content-center pb-5 pt-5 mb-0" style="float: none;" >
            <li class="page-item">
            <?php
            if($_REQUEST["nume"] == "1" ){
            $_REQUEST["nume"] == "0";
            echo  "";
            }else{
            if ($pagina>1)
            $ant = $_REQUEST["nume"] - 1;
            echo "<a class='page-link' aria-label='Previous' href='result.php?nume=1'><span aria-hidden='true'>&laquo;</span><span class='sr-only'>Previous</span></a>"; 
            echo "<li class='page-item '><a class='page-link' href='result.php?nume=". ($pagina-1) ."' >".$ant."</a></li>"; }
            echo "<li class='page-item active'><a class='page-link' >".$_REQUEST["nume"]."</a></li>"; 
            $sigui = $_REQUEST["nume"] + 1;
            $ultima = $num_registros / $registros;
            if ($ultima == $_REQUEST["nume"] +1 ){
            $ultima == "";}
            if ($pagina<$paginas && $paginas>1)
            echo "<li class='page-item'><a class='page-link' href='result.php?nume=". ($pagina+1) ."'>".$sigui."</a></li>"; 
            if ($pagina<$paginas && $paginas>1)
            echo "
            <li class='page-item'><a class='page-link' aria-label='Next' href='result.php?nume=". ceil($ultima) ."'><span aria-hidden='true'>&raquo;</span><span class='sr-only'>Next</span></a>
            </li>";
            ?>
        </ul>
    </div>
</nav>
  </form>
</body>
</html>