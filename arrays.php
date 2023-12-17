    <?php

    // Actividad 1: 
    // Opción 1:
    $alumno = ["Juan", "Perez", 8.5, 8.6];

    // Opción 2 (legacy):
    $alumno = array("Juan", "Perez", 8.5, 8.6);

    // Actividad 2:
    // Opción 1:
    $alumnos = [
        ["Juan", "Perez", 8.5, 8.6],
        ["Constanza", "Garrido", 8.9, 5.0],
        ["Pedro", "Gonzalez", 7.8, 3.0],
        ["Luis", "Larrain", 8.5, 6.0],
        ["Rita", "Sanchez", 9.0, 5.0],
        ["Carlos", "Salgado", 7.1, 4.5]
    ];

    // Opción 2 (legacy):
    $alumnos = array(
        array("Juan", "Perez", 8.5, 8.6),
        array("Constanza", "Garrido", 8.9, 5.0),
        array("Pedro", "Gonzalez", 7.8, 3.0),
        array("Luis", "Larrain", 8.5, 6.0),
        array("Rita", "Sanchez", 9.0, 5.0),
        array("Carlos", "Salgado", 7.1, 4.5)
    );

    // Actividad 3: 
    // ¿cuál sería la operación adecuada para calcular el promedio de calificaciones de cada alumno?
    foreach ($alumnos as $alumno) {
        $promedio = ($alumno[2] + $alumno[3]) / 2;
        echo "Promedio de " . $alumno[0] .  " es: " . number_format($promedio, 2) . "<br>";
    }

    // ¿y el promedio general de la clase en un arreglo de calificaciones?
    $total = 0;
    $cantidad = count($alumnos);

    foreach ($alumnos as $alumno) {
        $total += ($alumno[2] + $alumno[3]);
    }

    $promedioGenenal = $total / ($cantidad * 2);

    echo "Promedio general del curso: " . number_format($promedioGenenal, 2) . "<br>";

    // ¿como seleccionar el alumno con la calificación más alta?
    $mayorNota = 0;
    $alumnoMayorNota = "";

    foreach ($alumnos as $alumno) {
        $nota = max($alumno[2], $alumno[3]);
        if ($nota > $mayorNota) {
            $mayorNota = $nota;
            $alumnoMayorNota = $alumno[0] . " " . $alumno[1];
        }
    }

    echo "La mejor nota es de " . $alumnoMayorNota . ": " . number_format($mayorNota, 2);


    