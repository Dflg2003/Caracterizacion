<?php

$documento = $_GET['documento'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/Slider.css">
    <link rel="stylesheet" href="../Style/menu.css">
    <link rel="stylesheet" href="../Style/parallax.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Page3</title>
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
        <article>
        <form action="page7.php" method="POST">
            <p>
            <h2>Autoconocimiento</h2><hr>
<?php
echo "<input type='hidden' name='documento' value='$documento'>";
?>
           
            
            <label for="">Identifica qué tanto te describen con las siguientes frases:</label>
            <br><br>
            <label value="1. Reconozco mis emociones y puedo expresarlas de la mejor manera">1. Reconozco mis emociones y puedo expresarlas de la mejor manera</label>
            <select class="btn btn-outline-dark" name="pregunta49" id="" class="form-select" required>
                
                <option value="No me describe nada">No me describe nada</option>
                <option value="Me describe un poco">Me describe un poco</option>
                <option value="Me describe ocasionalmente">Me describe ocasionalmente </option>
                <option value="Me describe casi siempre">Me describe casi siempre</option>
                <option value="Me describe totalmente">Me describe totalmente</option>
            </select><br><br>
            <label value="2. Expreso mis ideas, deseos y opiniones de forma clara y respetuosa">2. Expreso mis ideas, deseos y opiniones de forma clara y respetuosa</label>
            <select class="btn btn-outline-dark" name="pregunta50" id="" class="form-select" required>
                
                <option value="No me describe nada">No me describe nada</option>
                <option value="Me describe un poco">Me describe un poco</option>
                <option value="Me describe ocasionalmente">Me describe ocasionalmente </option>
                <option value="Me describe casi siempre">Me describe casi siempre</option>
                <option value="Me describe totalmente">Me describe totalmente</option>
            </select><br><br>
            <label value="3. Me adapto fácilmente a las nuevas situaciones">3. Me adapto fácilmente a las nuevas situaciones</label>
            <select class="btn btn-outline-dark" name="pregunta51" id="" class="form-select" required>
                
                <option value="No me describe nada">No me describe nada</option>
                <option value="Me describe un poco">Me describe un poco</option>
                <option value="Me describe ocasionalmente">Me describe ocasionalmente </option>
                <option value="Me describe casi siempre">Me describe casi siempre</option>
                <option value="Me describe totalmente">Me describe totalmente</option>
            </select><br><br>
            <label value="4. Suelo estar tranquilo">4. Suelo estar tranquilo</label>
            <select class="btn btn-outline-dark" name="pregunta52" id="" class="form-select" required>
                
                <option value="No me describe nada">No me describe nada</option>
                <option value="Me describe un poco">Me describe un poco</option>
                <option value="Me describe ocasionalmente">Me describe ocasionalmente </option>
                <option value="Me describe casi siempre">Me describe casi siempre</option>
                <option value="Me describe totalmente">Me describe totalmente</option>
            </select><br><br>
            <label value="5. Me es fácil relacionarme con mis compañeros">5. Me es fácil relacionarme con mis compañeros</label>
            <select class="btn btn-outline-dark" name="pregunta53" id="" class="form-select" required>
                
                <option value="No me describe nada">No me describe nada</option>
                <option value="Me describe un poco">Me describe un poco</option>
                <option value="Me describe ocasionalmente">Me describe ocasionalmente </option>
                <option value="Me describe casi siempre">Me describe casi siempre</option>
                <option value="Me describe totalmente">Me describe totalmente</option>
            </select><br><br>
            <label value="6. Suelo estar agresivo o enojado">6. Suelo estar agresivo o enojado</label>
            <select class="btn btn-outline-dark" name="pregunta54" id="" class="form-select" required>
                
                <option value="No me describe nada">No me describe nada</option>
                <option value="Me describe un poco">Me describe un poco</option>
                <option value="Me describe ocasionalmente">Me describe ocasionalmente </option>
                <option value="Me describe casi siempre">Me describe casi siempre</option>
                <option value="Me describe totalmente">Me describe totalmente</option>
            </select><br><br>

            <label for="">El área de bienestar tiene el servicio de orientación psicopedagógica donde te brindan acompañamientos personal y académico ¿te gustaría participar en este proceso y que uno de nuestros psicólogos se comunique contigo?</label>
            <label for="Si">Si</label>
            <input type="radio" name="pregunta55" id="" class="radioButtonP" value="Si" required>
            <label for="No">No</label>
            <input type="radio" name="pregunta55" id="" class="radioButtonP" value="No" required><br><br>

            <label for="texto">En el siguiente espacio puede ampliar sus respuestas y plantear sugerencias a UniEm; agradecemos sus aportes, ¡feliz día!.</label>
                <input  type="text" id="texto" name="pregunta56" onkeyup="validar()" onblur="validar()"  placeholder="Escribe aquí" value="En el siguiente espacio puede ampliar sus respuestas y plantear sugerencias a UniEm; agradecemos sus aportes, ¡feliz día!." required/>
                <div id="message" style="position: absolute; left: 10px; top: 50px; background-color: Yellow; z-index: 10" hidden>
                  </div>
            <br><br>
            <label value="Comprendo y me es facil acatar las normas en los grupos sociales (colegio, casa, universidad, empresa)">Comprendo y me es facil acatar las normas en los grupos sociales (colegio, casa, universidad, empresa)</label>
            <select class="btn btn-outline-dark" name="pregunta57" id="" class="form-select" required>
                
                <option value="Muy frecuente">Muy frecuente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>
            <label value="Cumplo las normas porque estoy convencido que tienen un sentido para mi vida y no por temor a ser sancionado">Cumplo las normas porque estoy convencido que tienen un sentido para mi vida y no por temor a ser sancionado</label>
            <select class="btn btn-outline-dark" name="pregunta58" id="" class="form-select" required>
                
                <option value="Muy frecuente">Muy frecuente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>
            <label>Lo importante al saltarme una norma es que no "me pillen"</label>
            <select class="btn btn-outline-dark" name="pregunta59" id="" class="form-select" required>
                
                <option value="Muy frecuente">Muy importante</option>
                <option value="Frecuentemente">importante</option>
                <option value="Ocasioalmente">moderadamente importante</option>
                <option value="Raramente">de poca importancia</option>
                <option value="Nunca">sin importancia</option>
            </select><br><br>
            <label value="Cuando me trazo una tarea u objetivo, lo logro...">Cuando me trazo una tarea u objetivo, lo logro...</label>
            <select class="btn btn-outline-dark" name="pregunta60" id="" class="form-select" required>
              
                <option value="Muy frecuente">Muy frecuente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>
            <label value="Conozco las condiciones de la etapa de coformación en Uniempresarial">Conozco las condiciones de la etapa de coformación en Uniempresarial</label>
            <select class="btn btn-outline-dark" name="pregunta61" id="" class="form-select" required>
                
                <option value="Muy frecuente">Muy frecuente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>
            <label value="Antes de presentar una entrevista, me preocupo por buscar información sobre la organización?">Antes de presentar una entrevista, me preocupo por buscar información sobre la organización?</label>
            <select class="btn btn-outline-dark" name="pregunta62" id="" class="form-select" required>
                
                <option value="Muy frecuente">Muy frecuente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>
            <label value="Cuido mi presentacion personal al momento de desenvolverne en un entorno empresarial">Cuido mi presentacion personal al momento de desenvolverne en un entorno empresarial</label>
            <select class="btn btn-outline-dark" name="pregunta63" id="" class="form-select" required>
                
                <option value="Muy frecuente">Muy frecuente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>
            <label value="Cuando llego a un nuevo proyecto o lugar de trabajo, me intereso por conocer muy bien mis funciones y/o responsabilidades">Cuando llego a un nuevo proyecto o lugar de trabajo, me intereso por conocer muy bien mis funciones y/o responsabilidades</label>
            <select class="btn btn-outline-dark" name="pregunta64" id="" class="form-select" required>
              
                <option value="Muy frecuente">Muy frecuente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>   
            <label value="cuando tengo dificultades en un entorno, suelo buscar a la persona encargada y plantearle lo que me está pasando">cuando tengo dificultades en un entorno, suelo buscar a la persona encargada y plantearle lo que me está pasando</label>
            <select class="btn btn-outline-dark" name="pregunta65" id="" class="form-select" required>
                
                <option value="Muy frecuente">Muy frecuente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>
            <label value="Cuando llego nuevo a algún lugar, me intereso por conocer las personas y los roles que tienen en su interacción conmigo">Cuando llego nuevo a algún lugar, me intereso por conocer las personas y los roles que tienen en su interacción conmigo</label>
            <select class="btn btn-outline-dark" name="pregunta66" id="" class="form-select" required>
                
                <option value="Muy frecuente">Muy frecuente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>
            <label value="Cuando encuentro un problema o dificultad en un proyecto, busco alternativas y propongo posibles soluciones">Cuando encuentro un problema o dificultad en un proyecto, busco alternativas y propongo posibles soluciones</label>
            <select class="btn btn-outline-dark" name="pregunta67" id="" class="form-select" required>
               
                <option value="Muy frecuente">Muy frecuente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>

            <label for="">¿Elegiste este programa como tu primera opción para la formación superior?</label>
            <label style="margin-left: 15px;" for="Si">Si</label>
            <input type="radio" name="pregunta68" id="" class="radioButtonE" value="Si" required>
            <label for="No">No</label>
            <input type="radio" name="pregunta68" id="" class="radioButtonE" value="No" required><br><br>
            
            <label value="conozco el contenido (materias) del programa que elegí">conozco el contenido (materias) del programa que elegí</label>
            <select class="btn btn-outline-dark" name="pregunta69" id="" class="form-select" required>
                <option value="totalmente">totalmente</option>
                <option value="En gran medida">En gran medida</option>
                <option value="Medianamente">Medianamente</option>
                <option value="Poco">Poco</option>
                <option value="Nada">Nada</option>
            </select><br><br>
            <label for="eleccionC" class="form-label">Al momento de elegir carrera profesional, lo mas importante fue mi propio interés y voluntad </label>
            <select class="btn btn-outline-dark" name="pregunta70" id="" class="form-select" required>
                <option value="totalmente de acuerdo">totalmente de acuerdo</option>
                <option value="De acuerdo">De acuerdo</option>
                <option value="Indeciso">Indeciso</option>
                <option value="En desacuerdo">En desacuerdo</option>
                <option value="totalmente en desacuerdo">totalmente en desacuerdo</option>
            </select><br><br>

            <label for="">¿Realizaste proceso de orientación vocacional para la elección de tu carrera</label>
            <label style="margin-left: 15px;" for="Si">Si</label>
            <input type="radio" name="pregunta71" id="" class="radioButtonE" value="Si" required>
            <label for="No">No</label>
            <input type="radio" name="pregunta71" id="" class="radioButtonE" value="No" required><br><br>
             </article>
            <article>
                <h2>Conocimiento</h2><hr>
             <label value="Para elegir este programa, tuve la oportunidad de conversar con personas graduadas que me compartieron información valiosa para tomar mi desición">Para elegir este programa, tuve la oportunidad de conversar con personas graduadas que me compartieron información valiosa para tomar mi desición</label>
            <select class="btn btn-outline-warning" name="pregunta72" id="" class="form-select" required>
                
                <option value="Muy Frecuentemente">Muy Frecuentemente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>
            <label value="Cuento con las habildades personales o aprendizajes que facilitan el desarrollo del programa que elegi">Cuento con las habildades personales o aprendizajes que facilitan el desarrollo del programa que elegi</label>
            <select class="btn btn-outline-warning" name="pregunta73" id="" class="form-select" required>
                
                <option value="totalmente">totalmente</option>
                <option value="En gran medida">En gran medida</option>
                <option value="Medianamente">Medianamente</option>
                <option value="Poco">Poco</option>
                <option value="Nada">Nada</option>
            </select><br><br>
            <label value="He tenido experiencias agradables y positivas relacionadas con el programa que escogi">He tenido experiencias agradables y positivas relacionadas con el programa que escogi</label>
            <select class="btn btn-outline-warning" name="pregunta74" id="" class="form-select" required>
                
                <option value="Muy Frecuentemente">Muy Frecuentemente</option>
                <option value="Frecuentemente">Frecuentemente</option>
                <option value="Ocasioalmente">Ocasioalmente</option>
                <option value="Raramente">Raramente</option>
                <option value="Nunca">Nunca</option>
            </select><br><br>
            <center><button type="submit" class="btn btn-primary">Siguiente Pagina <i class="fa fa-angle-right"></i></button> </center>
</p> 
        </article>
       
 </form> 

<article>
    <button type="submit" class="enviar"  onclick="verificar()">Enviar</button>
</article>


     
  
    </div>
    <script src="./Script/Validaciones.js"></script>
</body>
</html> 