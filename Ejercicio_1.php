<?php

    // 1.Programa que lea un valor de precio base y calcule 
    // su impuesto, si es valor es mayor de 150.000 se le 
    // aplicará un 19% de impuestos, en caso contrario se le 
    // aplicará un 16%.

    function base($precio){
        if($precio>=15000){
            $res = (int) ($precio * 0.19) / 100;
        }else{
            $res = (int) ($precio * 0.16) / 100;
        }
        return ($precio+$res);
    }
    print(base(10));






?>