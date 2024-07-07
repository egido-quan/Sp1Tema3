<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<body>
<?php
   
    $notas = array(
        "Juan" => array(7, 6, 4, 4, 8),
        "Ana" => array(4, 3, 6, 8, 5),
        "Manuel" => array(5, 5, 6, 9, 3),
        "Jorge" => array(4, 4, 5, 3, 4,),
        "Marian" => array(9, 8, 7, 8, 6),
        "Luis" => array(5, 2, 3, 6, 7),
        "María" => array(8, 8, 9, 7, 6),
    );
    echo "<h3>Estas son las notas de cada alumno:</h3>";
    foreach($notas as $alumno => $nota) {
        echo "$alumno: ";
        foreach($nota as $n) {
            echo "$n ";
        }
        echo "<br>";
    }
    

    notaMediaAlumno($notas);

    notaMediaClase($notas);


    function notaMediaAlumno(array $notas): void {
        $mediaTot = $j = 0;
        echo "<h3>Nota media de cada alumno</h3>";
        foreach($notas as $alumno => $nota) {
            $mediaAl = $i = 0;
            echo "$alumno: ";
            foreach($nota as $n) {
                $mediaAl += $n;
                $i++;
            }
            $mediaAl = $mediaAl / $i;
            echo "$mediaAl<br>";
        }
        echo "<br>";
    }

    function notaMediaClase(array $notas): void {
        $mediaTot = $i = 0;
        foreach($notas as $alumno => $nota) {
            foreach($nota as $n) {
                $mediaTot += $n;
                $i++;
            }
        }
        $mediaTot = $mediaTot / $i;
        echo "<h2>Nota media de toda la clase: " . round($mediaTot,2). "</h2>";
    }


?>   


</bodY>
</htXl>
