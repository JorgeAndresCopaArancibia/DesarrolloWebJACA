<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        if(isset($_COOKIE['ingresos_a_la_pagina'])) {
            $count = $_COOKIE['ingresos_a_la_pagina'];
            $count ++;
        } else {
            $count = 1;
        }
        setcookie('ingresos_a_la_pagina', $count); 
        
        echo "Veces Ingresados: " . $count;
    ?>
    <div class="contenedor">
        <div class="encabezado">
            <div class="espacio"></div>
            <div class="izquierda">
                <img src="images/usfx.png" alt="logo">
            </div>
            <div class="derecha">
                <h1>Universidad de Sn Francisco Xavier</h1>
                <h2>Facultad de Tecnologia</h2>
                <p>Carrera Ing de Sistemas, Ciencias de la Computación </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semestre 2-2020</p>
            </div>
        </div>
        <div class="medio">
            <div class="izquier">
                <br> <br> <br> <br> <p></p> Nombre de estudiante: Jorge Andres Copa Arancibia</p> <br>
                <p>Fecha: 26/10/2022</p>
            </div>
            <div class="dere">
                <div class="container">
                    <div class="item">1</div>
                    <div class="item">Pregunta 1</div>
                    <div class="item"><a href="pregunta3.php">Pregunta 3</a></div>
                    <div class="item"  ><a href="pregunta4.html">Pregunta 4</a></div>
                    
                </div>
            </div>
        </div>
        <div class="pie">
            <div class="izq"></div>
            <div class="me"></div>
            <div class="der"></div>
        </div>
    </div>
</body>
</html>