<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importancia Social de la Educación - Universidad Gerardo Barrios</title>
    <style>
        body {
            background-color: #fdebd0; 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #333; 
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .introduction-space {
            background-color: #fcf3cf; 
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .button {
            background-color: #3498db; 
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #2980b9; 
        }
    </style>
</head>
<body>

<?php
$logoUniversidad = "https://instructure-uploads.s3.amazonaws.com/account_109250000000000001/attachments/4454475/Logotipo-vertical-azul.png";
$nombreUniversidad = "Universidad Gerardo Barrios";
$nombreFacultad = "Facultad de Ciencia y Tecnologia";
$nombreMateria = "Programacion en php y html :)";
$nombreDocente = "Licenciado Willian Alexis Montes Girón";
$nombreCarrera = "Ingeniería en Sistemas y Redes Informáticas";
$nombreEstudiante = "Erick David Munguia Zelaya, saul salomon soto machuca";
$codigoEstudiante = "SMSS020522" "SMSS137422" ;

echo "
    <div style='text-align: center;'>
        <img src='$logoUniversidad' alt='Logo de la Universidad' width='100'>
        <h1>$nombreUniversidad</h1>
        <p>Facultad: $nombreFacultad</p>
        <p>Materia: $nombreMateria</p>
        <p>Docente: $nombreDocente</p>
        <p>Carrera: $nombreCarrera</p>
        <p>Estudiante: $nombreEstudiante</p>
        <p>Código de Estudiante: $codigoEstudiante</p>
    </div>
    ";
?>

<div class="container">
    <div class="introduction-space">
        <h2>Introducción</h2>
        <p>bueno la educación es un pilar fundamental para el desarrollo social. A través de la educación, se promueve la igualdad de oportunidades, se fomenta el pensamiento crítico y se empodera a las comunidades para enfrentar los desafíos del mundo actual.</p>
        <h2>Importancia Social</h2>
        <p>Una educación de calidad no solo beneficia a los individuos, sino también a toda la sociedad. Contribuye a la reducción de la pobreza, la prevención de conflictos, la promoción de la salud y el bienestar, y el fortalecimiento de la democracia y la participación ciudadana.</p>
    </div>
    <center>
        <a href="bd.html"><button class="button">Diagrama de BD</button></a>
    </center>
    <center>
        <a href="DIC.html"><button class="button">Diccionario de Datos</button></a>
    </center>
</div>

</body>
</html>
