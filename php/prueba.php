<?php 
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

<script src="../Alert/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../Alert/sweetalert.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

 <!-- ESTILO CURSOS DE PROGRAMACION -->
 <link rel="stylesheet" href="../css/style_cp.css">


<title>Consulta basica</title>
</head>
<body>



<style>
.container_card{
    margin: 0 auto;
    padding:  0px 20px 20px 20px;
    display: grid;
    /* width: 800px; */
    grid-template-columns: 1fr 1fr ;
    grid-gap:1em;
        /* grid-row-gap: 60px; */
}

.blog-post{
    position: relative;
    margin-bottom: 15px;
    margin: 30px;
}

.blog-post img{
    width: 100%;
    height: 450px;
    object-fit: cover;
    border-radius: 10px;
    }

.blog-post .category{
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 10px 15px;
  font-size: 14px;    text-decoration: none;
    background-color: #e67e22;
    color: #fff;
    border-radius: 5px;
    box-shadow: 1px 1px 8px rgba(0,0,0,0.1);
    text-transform: uppercase;
}
.text-content{
    position: absolute;
    bottom: -30px;
    padding: 20px;
    background-color: #fff;
    width: calc(100% - 20px);
    left: 50%;
    transform: translateX(-50%);
    border-radius: 10px;
    box-shadow: 1px 1px 8px rgba(0,0,0,0.08);
    padding-top: 50px;
}

.text-content h2{
    font-size: 20px;
    font-weight: 400;
    /* margin-bottom: 30px; */
}

.text-content img{
    height: 70px;
    width: 70px;
    border: 5px solid rgba(0,0,0,0.1);
    border-radius: 50%;
    position: absolute;
    top: -35px;
    left: 35px;
}

.tags a{
    color: #888;
    font-weight: 700;
    text-decoration: none;
    margin-right: 15px;
    transition: 0.3s ease;
}

.tags a:hover{
    color: #000;
}

@media screen and (max-width: 1100px) {
    .container_card{
        grid-template-columns: 1fr 1fr;
        grid-row-gap: 60px;
    }
}

@media screen and (max-width: 600px) {
    .container_card{
        grid-template-columns: 1fr;
        grid-row-gap: 60px;
    }
}
</style>







<!-- vista A -->
<div class="center mt-5">
    <div class="card pt-3" >
        <div class="container-fluid p-2 col-12">
            <?php 
  if(!empty($_REQUEST["nume"])){ $_REQUEST["nume"] = $_REQUEST["nume"];}else{ $_REQUEST["nume"] = '1';}
            if($_REQUEST["nume"] == "" ){$_REQUEST["nume"] = "1";}
            $articulos=mysqli_query($con,"SELECT * FROM datos_personales;");
            $num_registros=@mysqli_num_rows($articulos);
            $registros= '5';
            $pagina=$_REQUEST["nume"];
            if (is_numeric($pagina))
            $inicio= (($pagina-1)*$registros);
            else
            $inicio=0;
            $busqueda=mysqli_query($con,"SELECT * FROM datos_personales LIMIT $inicio,$registros;");
            $paginas=ceil($num_registros/$registros);
            ?>
            <h5 class="card-tittle">Resultados (<?php echo $num_registros; ?>)</h5>
            <div class="container_card">
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
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){ ?>
                    <tr>
                <td><?php echo $resultado["nombre"]; ?></td>
                <td><?php echo $resultado["td"]; ?></td>
                <td><?php echo $resultado["documento"]; ?></td>
                <td><?php echo $resultado["programa"]; ?></td>
                <td><?php echo $resultado["email"]; ?></td>
                <td><?php echo $resultado["celular"]; ?></td>
                <td><?php echo $resultado["nombre_emergencia"]; ?></td>
                <td><?php echo $resultado["celular_emergencia"]; ?></td>
                <td>
                <form action="download.php" method="post">
                  <input type="hidden" name="documento" value="<?php echo $resultado["documento"]; ?>">
                  <button class="btn btn-success" type="submit" name="action" onclick="codigo()">Descargar Respuestas
                </button>
                </form>
                </td>
              </tr>
                <?php } ?>
            </div>
        </div>


        <!-- paginacion //////////////////////////////////////-->
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
            echo "<a class='page-link' aria-label='Previous' href='prueba.php?nume=1'><span aria-hidden='true'>&laquo;</span><span class='sr-only'>Previous</span></a>"; 
            echo "<li class='page-item '><a class='page-link' href='prueba.php?nume=". ($pagina-1) ."' >".$ant."</a></li>"; }
            echo "<li class='page-item active'><a class='page-link' >".$_REQUEST["nume"]."</a></li>"; 
            $sigui = $_REQUEST["nume"] + 1;
            $ultima = $num_registros / $registros;
            if ($ultima == $_REQUEST["nume"] +1 ){
            $ultima == "";}
            if ($pagina<$paginas && $paginas>1)
            echo "<li class='page-item'><a class='page-link' href='prueba.php?nume=". ($pagina+1) ."'>".$sigui."</a></li>"; 
            if ($pagina<$paginas && $paginas>1)
            echo "
            <li class='page-item'><a class='page-link' aria-label='Next' href='prueba.php?nume=". ceil($ultima) ."'><span aria-hidden='true'>&raquo;</span><span class='sr-only'>Next</span></a>
            </li>";
            ?>
        </ul>
    </div>

<!-- end paginacion ///////////////////////// -->




    </div>
    
</div>
<!-- END vista A -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

</body>
</html>









<?php 
 if(!empty($_REQUEST["insert"])){ 
if ($_REQUEST["insert"] == 'ok'){
  echo '
  <script>
    JSalert("Insertado correctamente");
  </script>
  ';
}
 }
?>