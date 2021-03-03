<?php

    // 5.	El profesor de una materia desea conocer la cantidad de sus alumnos 
    // que no tienen derecho al examen de nivelación. Diseñe el algoritmo que lea 
    // las calificaciones obtenidas en las 5 unidades por cada uno de los 40 alumnos 
    // y escriba la cantidad de ellos que no tienen derecho al examen de nivelación.

    $lista = (array) [
        "Alumno_1" => array(
            "Nombre" => "Marcelo",
            "Notas" => array(5,5,3.8,5,3.7)
        ),
        "Alumno_2" => array(
            "Nombre" => "Juan",
            "Notas" => array(1,2,2.3,2,3.5)
        )
    ];
    function nivelación($promedio){
        if($promedio>=0 && $promedio<=2.9){
            return "Tiene derecho a la nivelación";
        }else{
            return "No tiene derecho a la nivelación";
        }
    }
    foreach ($lista as $key => $value) {
        $promedio = (int) array_sum($lista[$key]["Notas"])/count($lista[$key]["Notas"]);
        $notas = join(" , ", $lista[$key]["Notas"]);
        $mensaje = (string) nivelación($promedio);
        $cadena = (string) <<<FIN
        El alunmo {$lista[$key]["Nombre"]} tiene un promedio de: $promedio<br>
        Notas $notas<br>
        $mensaje<br><br>
FIN;
        print_r($cadena);
    }
?>