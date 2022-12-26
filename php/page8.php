<?php
$documento = $_GET['documento'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/parallax.css">
    <link rel="stylesheet" href="../Style/menu.css">
    <link rel="stylesheet" href="../Style/Slider.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./">
    <title>page 4</title>
</head>
<body class="fondo">
    <header>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#" class="enlace">
            <img src="./assets/img/LogoUni.jpg" alt="" class="logo">
        </a>
        <ul>
            <li><a class="active" href="#">Formulario General de ingreso</a></li>
            
        </ul>
    </nav>
</header>
<div class="contenedor">
<form action="page9.php" method="POST">
    <article>
        <h3>Autoconocimiento</h3>
<?php
echo "<input type='hidden' name='documento' value='$documento'>";
?>
        <hr>
        <label for="sustancias" class="form-label">Consumo mucha azúcar, sal, comida chatarra o grasosa: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta75" required>
            
            <option value="Ninguna de estas">Ninguna de estas</option>
            <option value="Alguna de estas">Alguna de estas</option>
            <option value="Todas estas">Todas estas</option>
        </select>
        <br>
        <br>
        <label for="sustancias" class="form-label">En cuanto a mi peso ideal: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta76" required>
            
            <option value="Estoy normal o 4 kilos por encima o por debajo">Estoy normal o 4 kilos por encima o por debajo</option>
            <option value="De 5 a 8 kilos por encima o por debajo">De 5 a 8 kilos por encima o por debajo</option>
            <option value="Más de 8 kilos por encima o por debajo">Más de 8 kilos por encima o por debajo</option>
        </select>
        <br>
        <br>

        <div class="col">
            <label for="td" class="form-label">¿Tienes alguna condición médica, física o psicológica particular?</label>
            <div class="form-check">
                <input type="radio"  required class="form-check-input" id="radio1" name="pregunta77" value="Si" checked>Si
                <label class="form-check-label" for="radio1"></label>
              </div>

              <div class="form-check">
                <input type="radio"  required class="form-check-input" id="radio2" name="pregunta77" value="No">No
                <label class="form-check-label" for="radio2"></label>
              </div>
        </div><br><br>

        <label for="sustancias" class="form-label">Perteneces a alguno de los siguientes grupos o poblaciones: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta78"  required>
            
            <option value="Victima del conflicto armado">Victima del conflicto armado</option>
            <option value="Indigena">Indigena</option>
            <option value="Afrocolombiano">Afrocolombiano</option>
            <option value="Raizal">Raizal</option>
            <option value="Gitano">Gitano</option>
            <option value="LGBTIG+">LGBTIG+</option>
            <option value="Ninguno+">Ninguno</option>
            <option value="OTRO">OTRO</option>
        </select>    
        <br>

    </article>
    <article>
        <h3>¿Con qué frecuencia ha consumido alguna de estas sustancias? (en los últimos 6 meses)</h3><hr>
        <div class="botones">
        <label for="sustancias" class="form-label">Cafeína: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta79"  required>
            
            <option value="Nunca">Nunca</option>
            <option value="Esporádicamente">Esporádicamente</option>
            <option value="mensualmente">mensualmente</option>
            <option value="Diario">Diario</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">Marihuana: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta80"  required>
            
            <option value="Nunca">Nunca</option>
            <option value="Esporádicamente">Esporádicamente</option>
            <option value="mensualmente">mensualmente</option>
            <option value="Diario">Diario</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">Cigarrillo: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta81"  required>
            
            <option value="Nunca">Nunca</option>
            <option value="Esporádicamente">Esporádicamente</option>
            <option value="mensualmente">mensualmente</option>
            <option value="Diario">Diario</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">Alcohól: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta82"  required> 
            
            <option value="Nunca">Nunca</option>
            <option value="Esporádicamente">Esporádicamente</option>
            <option value="mensualmente">mensualmente</option>
            <option value="Diario">Diario</option></select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">Cocaína: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta83"  required>
            
            <option value="Nunca">Nunca</option>
            <option value="Esporádicamente">Esporádicamente</option>
            <option value="mensualmente">mensualmente</option>
            <option value="Diario">Diario</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">LSD: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta84"  required>
            
            <option value="Nunca">Nunca</option>
            <option value="Esporádicamente">Esporádicamente</option>
            <option value="mensualmente">mensualmente</option>
            <option value="Diario">Diario</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">Anfetamina, Metanfetamina, Extasis: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta85"  required>
            
            <option value="Nunca">Nunca</option>
            <option value="Esporádicamente">Esporádicamente</option>
            <option value="mensualmente">mensualmente</option>
            <option value="Diario">Diario</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">Inhalables (Popper): </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta86"  required>
            
            <option value="Nunca">Nunca</option>
            <option value="Esporádicamente">Esporádicamente</option>
            <option value="mensualmente">mensualmente</option>
            <option value="Diario">Diario</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">Medicamentos no recetados: </label>
        <select class="btn btn-outline-dark"  class="form-select" name="pregunta87"  required>
            
            <option value="Nunca">Nunca</option>
            <option value="Esporádicamente">Esporádicamente</option>
            <option value="mensualmente">mensualmente</option>
            <option value="Diario">Diario</option>
        </select>
        </div>
        <br>
        <div class="botones">
            <label for="sustancias" class="form-label">Bebidas enegizantes: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta88"  required>
            
            <option value="Nunca">Nunca</option>
            <option value="Esporádicamente">Esporádicamente</option>
            <option value="mensualmente">mensualmente</option>
            <option value="Diario">Diario</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">Si consumes café, ¿Cuántas tazas consumes al día?: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta89"  required>
            
            <option value="Menos de 3 por día">Menos de 3 por día</option>
            <option value="Entre 4 y 6">Entre 4 y 6</option>
            <option value="Más de 6 al día">Más de 6 al día</option>
            <option value="No consumo café diariamente">No consumo café diariamente</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">Si consumes cigarrillo, ¿Cuántos consumes al día?: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta90"  required>
            
            <option value="1">1</option>
            <option value="Entre 2 a 5">Entre 2 a 5</option>
            <option value="Más de 5">Más de 5</option>
            <option value="No fumo diariamente">No fumo diariamente</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">En dado caso de consumir licor semanalmente. Tu número promedio de tragos es de: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta91"  required>
            <option value="1 a 7 tragos">1 a 7 tragos</option>
            <option value="8 a 12 tragos">8 a 12 tragos</option>
            <option value="Más de 12 tragos">Más de 12 tragos</option>
        </select>
        </div>
        <br>
        <div class="botones">
        <label for="sustancias" class="form-label">Bebo más de 4 tragos en una ocasión: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta92"  required>
            
            <option value="Nunca">Nunca</option>
            <option value="ocasionalmente">ocasionalmente </option>
            <option value="A menudo">A menudo</option>
        </select>
        </div>
        <br>
        <!-- <div class="botones">
        <label for="sustancias" class="form-label">Suelo conducir después de consumir alguna bebida alcohólica: </label>
        <select class="btn btn-outline-dark" class="form-select" name="pregunta93"  required>
            
            <option value="Siempre">Siempre</option>
            <option value="A veces">solo rara vez</option>
            <option value="A menudo">A menudo</option>
        </select>
        </div>
        <br>
        <div class="botones">
            <label for="sustancias" class="form-label">Uso el cinturón de seguridad / Utilizo el casco abrochado: </label>

        <select class="btn btn-outline-dark" name="pregunta94" id="" class="form-select" required>
            <option value=":" ></option>
            <option value="Siempre">Siempre</option>
            <option value="A veces">A veces</option>
            <option value="Casi nunca">Casi nunca</option>
        </select><br><br> -->
        </div><br><br>
        <center><button type="submit" class="btn btn-primary">Siguiente Pagina <i class="fa fa-angle-right"></i></button> </center>

</article>

</form>
<br><br>
</div>

</body>
</html>