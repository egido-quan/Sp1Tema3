<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<body>
<?php
    $misDatos = array("Nombre"=>"Isidro Zapater",
        "Edad"=>"59",
        "email"=>"isidro.zapater@gmail.com",
        "Plato favorito"=>"Arroz negro");    


    foreach ($misDatos as $campo => $dato) {
        echo "$campo: $dato<br>";
    }

?>   


</bodY>
</htXl>
