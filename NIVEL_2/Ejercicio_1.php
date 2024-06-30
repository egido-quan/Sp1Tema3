<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<body>
<?php
    $lista1 = [3, 7, 4.5, 27, 23.45];
    $lista2 = [1, 2, 3, 7, 4.5, 19.24];
    echo "Lista 1:<br>";
    listArray($lista1);
    echo "Lista 2:<br>";
    listArray($lista2);
  
    echo "Intersección con el comando array_intersect<br>";
    $intersec1 = array_intersect($lista1, $lista2);
    listArray($intersec1);
    
    echo "Intersección desarrollada en el código<br>";
    $intersec2 = [];
    foreach ($lista1 as $valor1) {
        foreach($lista2 as $valor2) {
            if ($valor1 == $valor2) {
                $intersec2 [] = $valor1;
            }
        }
    } 
    listArray($intersec2);

    //Por mezcla entiendo crear un nuevo array con todos los elementos de
    //los dos arrays, aunque haya elementos repetidos
    echo "Mezcla con el comando array_merge<br>";
    $mezcla1 = array_merge($lista1, $lista2);
    listArray($mezcla1);

    echo "Mezcla desarrollada en el código<br>";
    $mezcla = [];
    foreach ($lista1 as $valor) {
        $mezcla2 [] = $valor;
    } 
    foreach ($lista2 as $valor) {
        $mezcla2 [] = $valor;
    } 
    listArray($mezcla2);



    function listArray(array $arr): void {
        foreach ($arr as $valor) {
            echo $valor . " ";
        }
        echo "<br><br>";
    }




?>   


</bodY>
</htXl>
