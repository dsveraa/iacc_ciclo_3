<?php

// opción 1:

$alumno = array("Juan", "Perez", 8.5, 9.0);

// opción 2:

$alumno = ["Juan", "Perez", 8.5, 9.0];

// opción 1:

$alumnos = array( 
    array("Juan", "Perez", 8.5, 9.0), 
    array("Constanza", "Garrido", 9.2, 5.0),
    array("Pedro", "Gonzalez", 7.8, 3.0),
    array("Luis", "Larrain", 8.5, 6.0),
    array("Rita", "Sanchez", 9.2, 5.0),
    array("Carlos", "Salgado", 7.1, 4.5)
);

// opción 2:

$alumnos = [
    ["Juan", "Perez", 8.5, 8.6], 
    ["Constanza", "Garrido", 8.9, 5.0],
    ["Pedro", "Gonzalez", 7.8, 3.0],
    ["Luis", "Larrain", 8.5, 6.0],
    ["Rita", "Sanchez", 9.0, 5.0],
    ["Carlos", "Salgado", 7.1, 4.5]
]; 

//¿cuál sería la operación adecuada para calcular el promedio de calificaciones de cada alumno?

for ($i = 0; $i < count($alumnos); $i++) {
$promedio = ($alumnos[$i][2] + $alumnos[$i][3]) / 2;
echo "Promedio de ". $alumnos[$i][0] .  " es: " . number_format($promedio,2) . "<br>";
}

//¿y el promedio general de la clase en un arreglo de calificaciones?

$total = 0;
$cantidad = count($alumnos);

foreach ($alumnos as $alumno) {
    $total += ($alumno[2] + $alumno[3]);
}

$promedioGenenal = $total / ($cantidad * 2);

echo "Promedio general del curso: " . number_format($promedioGenenal,2) . "<br>";

// seleccionar el alumno con la calificación más alta

$mayorNota = 0;
$alumnoMayorNota = "";

foreach ($alumnos as $alumno) {
    $nota = max($alumno[2], $alumno[3]);
    if ($nota > $mayorNota) {
        $mayorNota = $nota;
        $alumnoMayorNota = $alumno[0] . " " . $alumno[1];
    }
}

echo "La mejor nota es de " . $alumnoMayorNota . ": " . number_format($mayorNota,2);