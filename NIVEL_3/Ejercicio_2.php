<?php

    $array_strings = [
        "Raqueta",
        "Jugador",
        "Pelota",
        "Marcador",
        "Arbitro", 
        "Pista",
        "Linea",
        "Publico"
        ];


    echo "<br>Array original<br>";
    mostrarArray($array_strings);

 
    $array_num_car_par = array_filter($array_strings, "stringPar");
    echo "<br><br>Array con las palabras con número par de caracteres<br>";
    mostrarArray($array_num_car_par);


    function stringPar(string $palabra) {
        return strlen($palabra) % 2 == 0;
    }

    function mostrarArray(array $array): void {
        $array = array_values($array);
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