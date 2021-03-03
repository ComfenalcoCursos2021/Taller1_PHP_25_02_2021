<?php
    // 2.Calcular el sueldo que le corresponde al trabajador de una 
    // empresa que cobra $14.400.000 anual, el programa debe realizar 
    // los cálculos en función de los siguientes criterios:

    // • Si lleva más de 10 años en la empresa se le aplica un aumento del 10%.
    // • Si lleva menos de 10 años, pero más que 5 se le aplica un aumento del 7%.
    // • Si lleva menos de 5 años, pero más que 3 se le aplica un aumento del 5%.
    // • Si lleva menos de 3 años se le aplica un aumento del 3%.
    
    $lista = (array) [
        "Trabajador"=> 
            array(
                "Nombre" => "Miguel",
                "Tiempo" => 10,
                "Sueldo_Anual" => 14400000
            )
    ];
    function aumento($data){
        if($data["Tiempo"] >= 10){
            return $data["Sueldo_Anual"] * 0.10 / 100;
        }else if($data["Tiempo"] < 10 && $data["Tiempo"]>=5){
            return $data["Sueldo_Anual"] * 0.07 / 100;
        }else if($data["Tiempo"] < 5 && $data["Tiempo"]>=3){
            return $data["Sueldo_Anual"] * 0.05 / 100;
        }else if($data["Tiempo"] < 3 && $data["Tiempo"]>=1){
            return $data["Sueldo_Anual"] * 0.03 / 100;
        }
    }
    if(isset($lista["Trabajador"])){
        $aumento = (string) number_format(aumento($lista["Trabajador"]));
        $puntos = (string) number_format($lista["Trabajador"]["Sueldo_Anual"]);
        $res = (string) <<<FIN
        El empleado {$lista["Trabajador"]["Nombre"]} lleva en nuestra empresa {$lista["Trabajador"]["Tiempo"]} años 
        resive un sueldo anual de $$puntos<br>
        Tiene un aumento $$aumento
FIN;
        print_r($res);

    }else{
        print_r("Error");
    }

?>