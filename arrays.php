<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS</title>
</head>

<body>
    <h2>Tarea nº algo </h2>
    <h3>Ejercicio 1</h3>
    <?php
    $arrayPares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
    foreach ($arrayPares as $valor) {
        print $valor;
        print "<pre> \n";
    }
    ?>

    <h3>Ejercicio 2</h3>
    <?php
    $array2 = ["Pedro", "Ana", 34, 1];
    print_r($array2);
    ?>

    <h3>Ejercicio 3</h3>
    <?php
    $arrayDatos = ['Nombre' => "Pedro", 'Apellido' => "Torres", 'Direccion' => "Av.Mayor 3703", 'Telefono' => 1122334455];
    ?>

    <h3>Ejercicio 4</h3>
    <?php
    $arrayCiudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
    $i = 0;
    foreach ($arrayCiudades as $valor) {
        print "<pre> \n";
        print "La ciudad con el indice " . $i . " tiene el nombre " . $valor;
        print "<pre> \n";
        $i++;
    }
    ?>

    <h3>Ejercicio 5</h3>
    <?php
    $arrayCitys = ['MD' => "Madrid", 'BCL' => "Barcelona", 'LD' => "Londres", 'NY' => "New York", 'LA' => "Los Angeles", 'CCG' => "Chicago"];
    foreach ($arrayCitys as $indice => $valor) {
        print "<pre> \n";
        print "El indice de " . $valor . " es " . $indice;
    }
    ?>
</body>

</html>