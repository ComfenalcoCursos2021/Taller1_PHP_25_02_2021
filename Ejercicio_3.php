<?php
    // 3.	Programa para solicitar el nombre, y la nota promedio de 5 estudiantes 
    // de un curso de computación.

    $lista = (array) [
        "Alumno" => array(
            "Nombre" => "Miguel",
            "Notas" => array(5,9,1,5,8)
        )
    ];
    $promedio = (string) array_sum($lista["Alumno"]["Notas"])/count($lista["Alumno"]["Notas"]);
    $notas = join(" , ", $lista["Alumno"]["Notas"]);
    $cadena = (string) <<<FIN
    El alunmo {$lista["Alumno"]["Nombre"]} tiene un promedio de: $promedio<br>
    Notas $notas
FIN;
    print_r($cadena);
?>