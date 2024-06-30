<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php

    //Creación del array y borrado de un elemento con unset
    $X = array (10, 20, 30, 40, 50, 60);
    echo"Creamos el array (10, 20, 30, 40, 50, 60)<br>";
    var_dump($X);
    echo "<br>El array contiene " . count( $X ) . " elementos <br>";
    echo"<br><br>";

    echo "Si borramos el elemento [3] con la función unset se pierde ese índice<br>";
    unset($X[3]);
    var_dump($X);
    echo "<br>El array contiene " . count( $X ) . " elementos <br>";


    //Creamos el array de nuevo y borrado de un elemnto con array_splice
    echo "<br><br>Si queremos que los índices se reordenen
    hemos de usar array_splice en lugar de unset<br><br>";
    echo"Creamos de nuevo el mismo array<br>";
    $X = array (10, 20, 30, 40, 50, 60);
    echo "El array contiene " . count( $X ) . " elementos <br>";
    var_dump($X);
    echo"<br><br>";
    echo"Borramos el elemento [3] con array_splice<br>";
    array_splice($X,3,1);
    echo "El array contiene " . count( $X ) . " elementos <br>";
    var_dump($X);
    echo "<br>Los índices se han reordenado";


?>   


</bodY>
</htXl>
