<?php

$conn = new mysqli("localhost", "root", "", "semana10");
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
} else {
    echo "<h2>Tabla de Estudiantes</h2><br>";

    $sql = "SELECT id, nombre, apellido, carnet, id_carrera FROM estudiante";
    $result = $conn->query($sql);
    echo "<div id='estudiantes'>";
    if ($result->num_rows > 0) {
        // Si hay resultados, mostrarlos
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"];
            echo "Nombre: " . $row["nombre"];
            echo "Apellido: " . $row["apellido"];
            echo "Carnet: " . $row["carnet"];
            echo "ID Carrera: " . $row["id_carrera"];
            echo "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }

    echo "</div>";

    echo "<div>";
    echo "<h2>Tabla de Carreras</h2><br>";

    $sql_carreras = "SELECT id, nombre, duracion, descripcion FROM carrera";
    $result_carreras = $conn->query($sql_carreras);

    echo "<div id='carreras'>";
    if ($result_carreras->num_rows > 0) {
        // Si hay resultados, mostrarlos
        while($row_carrera = $result_carreras->fetch_assoc()) {
            echo "ID: " . $row_carrera["id"];
            echo "Nombre: " . $row_carrera["nombre"];
            echo "Duración: " . $row_carrera["duracion"];
            echo "Descripción: " . $row_carrera["descripcion"];
            echo "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }
    echo "</div>";

    echo "<h2>Tabla de Profesores</h2>";

    $sql_profesores = "SELECT id, nombre, especialidad FROM profesor";
    $result_profesores = $conn->query($sql_profesores);

    echo "<div id='profesores'>";
    if ($result_profesores->num_rows > 0) {
        // Si hay resultados, mostrarlos
        while($row_profesor = $result_profesores->fetch_assoc()) {
            echo "ID: " . $row_profesor["id"];
            echo "Nombre: " . $row_profesor["nombre"];
            echo "Especialidad: " . $row_profesor["especialidad"];
            echo "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }
    echo "</div>";

}

$conn->close();
?>
