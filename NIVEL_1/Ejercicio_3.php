<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php

     $palabras = ["naranja", "lima", "sandía", "plátano", "mango"];

    function estaLaLetra(array $palabras, string $char): bool {
        $resultado = true;
        for ($i = 0; ($i < count($palabras) && $resultado == true); $i++) {
            if (strpos($palabras[$i], $char) == false) {
                $resultado = false;
            }
            //$resultado = strpos($palabras[$i], $char); ==> Otra opción en lugar del if.
        }        
        return $resultado;
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
