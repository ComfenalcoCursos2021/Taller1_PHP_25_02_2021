<?php

    // 4.El programa muestra primero una tabla de notas con sus equivalentes en el 
    // Standard Grading System o el sistema utilizado en los Estados Unidos que va 
    // desde la A hasta la F. El programa preguntará al usuario su nota y transformará 
    // ese resultado al equivalente en el Standard Grading System. También el programa 
    // dará una pequeña pero valiosa recomendación al usuario respecto a su nivel de 
    // estudio y calidad como estudiante. 

    $lista = (array) [
        "Traditional" => array(
            0 => array(90, 100),
            1 => array(80, 89),
            2 => array(70, 79),
            3 => array(60, 69),
            4 => array(50, 59),
            5 => array(0, 49),
        ),
        "Point_Range" => array(
            0 => array(12, 14),
            1 => array(9, 11),
            2 => array(6, 8),
            3 => array(3, 5),
            4 => array(1, 2),
            5 => array(0, 0),
        ),
        "SBG_Letter" => array(
            0 => array("A"),
            1 => array("B"),
            2 => array("C"),
            3 => array("D"),
            4 => array("E"),
            5 => array("F"),
        ),
        "SBG_Rating" => array(
            0 => array(4),
            1 => array(3),
            2 => array(2),
            3 => array(1),
            4 => array(0),
            5 => array(0),
        ),
        "Proficiency_level_witch_standard" => array(
            0 => array("Exceeds proficiency"),
            1 => array("Demonstrates proficiency"),
            2 => array("Approaches proficiency"),
            3 => array("Falls well below proficiency"),
            4 => array("Lacks all proficiency"),
            5 => array("No attempt made"),
        ),
    ];
    $nota = (array) [
        "Usuario" => array(
            "Nota" => 75
        )
    ];
    foreach ($lista["Traditional"] as $key => $value) {
        if($nota["Usuario"]["Nota"]>=$value[0] && $nota["Usuario"]["Nota"]<=$value[1]){
            switch ($lista["Proficiency_level_witch_standard"][$key][0]) {
                case 'Exceeds proficiency':
                    $reconpensa = (string) "Reconpensa: <b>Una beca todo pagado a cualquier univiersisdad de EE.UU</b>";
                    break;
                case 'Demonstrates proficiency':
                    $reconpensa = (string) "Reconpensa: <b>Un viaje a silicon valley</b>";
                    break;
                default:
                    $reconpensa = (string) "";
                    break;
            }
            $cadena = (string) <<<FIN
            Su calificacion es de <b>{$lista["SBG_Letter"][$key][0]}-{$lista["SBG_Rating"][$key][0]} </b>
            puntuacion en el rango <b>{$lista["Point_Range"][$key][0]}</b> - <b>{$lista["Point_Range"][$key][1]}</b><br>  
            <b>{$lista["Proficiency_level_witch_standard"][$key][0]}</b><br>
            $reconpensa
FIN;
            print_r($cadena);
            goto parrar;
        }
        
    }
    parrar:
?>