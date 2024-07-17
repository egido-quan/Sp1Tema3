<?php

    $array_enteros = [];
    $cantidad_enteros = 10;
    $valor_max_enteros = 10;
    $valor_min_enteros = 0;


    for ($i = 0; $i < $cantidad_enteros; $i++) {
        $array_enteros[] = rand($valor_min_enteros, $valor_max_enteros);
        }

    echo "<br>Array original<br>";
    mostrarArray($array_enteros);

 
    $array_al_cubo = array_map(function($element) {
        return $element * $element * $element;
    }, $array_enteros);


    echo "<br><br>Array con los números elevados al cubo<br>";
    mostrarArray($array_al_cubo);

    function mostrarArray(array $array): void {
        echo "(";
        for ($i = 0; $i < count($array); $i++) { 
            if ($i != count($array) - 1) {
                echo $array[$i] . ",  ";
            } else {
                echo $array[$i];
            }
        } 
        echo ")";
    }       