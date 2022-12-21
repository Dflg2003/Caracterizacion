<?php

$documento = $_GET['documento'];

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/parallax.css">
    <link rel="stylesheet" href="./Style/menu.css">
    <link rel="stylesheet" href="./Style/Slider.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./">
    <title>page2</title>
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
        <h2>Economico</h2><hr>
<form action="/action_page4.php" class="formulario"></form>
    <div class="col">
        <label for="td" class="form-label">¿Alguién depende económicamente de ti?</label>
        <div class="form-check">
            <input type="radio"  required  class="form-check-input" id="radio1" name="pregunta34" value="SI" checked>
            <label class="form-check-label" for="radio1">SI</label>
      </div>
      <div class="form-check">
        <input type="radio"  required class="form-check-input" id="radio2" name="pregunta34" value="NO">
        <label class="form-check-label" for="radio2">NO</label>
      </div>
    </div> 

    <div class="row">
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="¿Cuántas personas dependen de ti?">¿Cuántas personas dependen de ti?</label>
            <select  required class="form-select" name="pregunta35">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">+4</option>
                    <option value="5">N/A</option>
            </select>
        </div>
    </div>

    <div class="col">
        <label for="td" class="form-label">¿Consideras que tus ingresos son suficientes y estables?</label>
        <div class="form-check">
            <input type="radio"  required  class="form-check-input" id="radio1" name="pregunta36" value="SI" checked>
            <label class="form-check-label" for="radio1">SI</label>
      </div>
      <div class="form-check">
        <input type="radio"  required class="form-check-input" id="radio2" name="pregunta36" value="NO">
        <label class="form-check-label" for="radio2">NO</label>
      </div>
    </div> 
    </article>
    
    <article>
        <h3>Autoconocimiento</h3><hr>

        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Tengo con quien hablar de las cosas que son importantes">Tengo con quien hablar de las cosas que son importantes</label>
            <select  required class="form-select" name="pregunta37">
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Doy y recibo cariño">Doy y recibo cariño</label>
            <select  required class="form-select" name="pregunta38">
               
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Realizo actividad física (caminar, subir escaleras...)">Realizo actividad física (caminar, subir escaleras...)</label>
            <select  required class="form-select" name="pregunta39">
                
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Mi alimentación es balanceada">Mi alimentación es balanceada</label>
            <select  required class="form-select" name="pregunta40">
                
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Duermo bien y me siento descansado">Duermo bien y me siento descansado</label>
            <select  required class="form-select" name="pregunta41">
                
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Me siento capaz de manejar el estrés o tensión  en mi vida">Me siento capaz de manejar el estrés o tensión  en mi vida</label>
            <select  required class="form-select" name="pregunta42">
              
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Me relajo y disfruto de mi tiempo libre">Me relajo y disfruto de mi tiempo libre</label>
            <select  required class="form-select" name="pregunta43">
               
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Soy un pensador positivo y optimista">Soy un pensador positivo y optimista</label>
            <select  required class="form-select" name="pregunta44">
                
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Me siento tenso">Me siento tenso</label>
            <select  required class="form-select" name="pregunta45">
                
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Me siento deprimido o triste">Me siento deprimido o triste</label>
            <select  required class="form-select" name="pregunta46">
                
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Me siento satisfecho con mi trabajo o actividades">Me siento satisfecho con mi trabajo o actividades</label>
            <select  required class="form-select" name="pregunta47">
                
                <option value="Casi siempre">Casi siempre</option>
                <option value="A veces">A veces</option>
                <option value="Casi nunca">Casi nunca</option>
            </select>
        </div>
        <div class="col">
            <label for="td" class="form-label"></label>
            <label value="Hago ejercicio de forma activa al menos 20 minutos (correr, montar en bicicleta, zumba,...)">Hago ejercicio de forma activa al menos 20 minutos (correr, montar en bicicleta, zumba,...)</label>
            <select  required class="form-select" name="pregunta48">
               
                <option value="4 o más veces por semana">4 o más veces por semana</option>
                <option value="1 a 3 veces por semana">1 a 3 veces por semana</option>
                <option value="Menos de una vez por semana">Menos de una vez por semana</option>
            </select>
        </div>

        </article>
 </form>
 <article class="Diseño">
 
    <a href="index.html">
    <button>
        
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        1
    </button>
    </a>

    <a href="page1.html">
    <button>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        2
    </button>
    </a>

    <a href="page2.html">
    <button>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        3
    </button>
    </a>

        <a href="page3.html">
        <button>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        4
    </button>
    </a>
    <a href="page4.html">
    
    <button>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        5
    </button>
    </a>
    <a href="page5.html">
    
        <button>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            6
        </button>
        </a>
 
</article>

<br><br>
</div>
</body>
</html>