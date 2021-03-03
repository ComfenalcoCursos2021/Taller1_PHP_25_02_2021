<?php

    // 6. Determina si un carácter de entrada es una letra minúscula, una letra 
    // mayúscula o un número. Si estas tres condiciones son false, el carácter no 
    // es un carácter alfanumérico. En el ejemplo se muestra un mensaje para cada caso.
    $lista = (array) [
        "Dato" => array(
            "aaaAAA"
        )
    ];
    if(ctype_upper($lista["Dato"][0])){
        print_r ("Es mayúscula");
    }else if(ctype_lower($lista["Dato"][0])){
        print_r ("Es minúscula");
    }else if(ctype_alnum($lista["Dato"][0]) || gettype($lista["Dato"][0])=="integer"){
        print_r ("Es alfanuméricos");
    }else{
        print_r ("No es un carácter alfanumérico");
    }

     

?>