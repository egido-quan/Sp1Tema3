<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php

     $palabras = ["naranja", "lima", "sandía", "arándano", "plátano", "mango"];

    function estaLaLetra(array $palabras, string $char): bool {
        for ($i = 0; ($i < count($palabras)); $i++) {
            if (stripos($palabras[$i], $char) === false) { // pongo === para que compare valor y tipo, pues
                return false;                              // con == cuando la posición es 0 lo interpreta como false
            }                                              // He usado stripos para que ignore si son mayúsculas o minúsculas
        }        
        return true;
    }

    

    echo "Este es el array de palabras:<br>";
    foreach ($palabras as $palabra) {
        echo $palabra . " ";
        }
    echo "<br>";
    echo "<br>La letra 'a' " . ((estaLaLetra($palabras, "a")) ? "sí" : "no") . " está en todas las palabras del array<br>";
    echo "<br>";
    echo "La letra 'e' " . ((estaLaLetra($palabras, "e")) ? "sí" : "no") . " está en todas las palabras del array<br>";
    echo "<br>";
    echo "La letra 's' " . ((estaLaLetra($palabras, "s")) ? "sí" : "no") . " está en todas las palabras del array<br>";
?>   


</bodY>
</htXl>
