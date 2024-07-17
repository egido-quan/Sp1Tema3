<?php

    $array_enteros = [];
    const LONGITUD_ARRAY = 10;
    conSt VALOR_MAX = 100;
    const VALOR_MIN = 1;


    for ($i = 0; $i < LONGITUD_ARRAY; $i++) {
        $array_enteros[] = rand(VALOR_MIN, VALOR_MAX);
        }

    echo "<br>Array original<br>";
    mostrarArray($array_enteros);

    $suma_de_primos = array_reduce($array_enteros, "sumaSiPrimo");

    echo "<br><br>La suma de los números primos del array es:<br>";
    echo $suma_de_primos;

    function sumaSiPrimo($acum, $num) { 
        echo "<br> El $num";
        echo (esPrimo($num)) ? " es primo": " no es primo";
        if (esPrimo($num)) {
            $acum += $num;
            echo " - Acumulado primos = $acum";
        }
        return $acum;
    }    

    function esPrimo($num): bool {
        if ($num == 1) { return false; }
        for ($i = 2; ($i * $i) <= $num; $i++) {
                if ($num % $i == 0) {
                    return false;
                }
        }
        return true;

    }

    function mostrarArray(array $array): void {
        echo "[";
        for ($i = 0; $i < count($array); $i++) { 
            if ($i != count($array) - 1) {
                echo $array[$i] . ",  ";
            } else {
                echo $array[$i];
            }
        } 
        echo "]<br>";
    }       