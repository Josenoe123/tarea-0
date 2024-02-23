<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <style>
            
        </style>
        <h1>12655. C09</h1>
        <h2>Descripción</h2>
        Escribe un programa que solicite las calificaciones
         de Matemáticas, Español y Cocina y nos de su promedio.
        <h2>Entrada</h2>
        Tres Numeros
        <h2>Salida</h2>
        Un número real representado el promedio de los tres números
        <h2>Ejemplo</h2>
        <table border = "1">
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
            <tr>
               <td>10 9.5 9.0</td>
               <td>9.5</td>
            </tr>
        </table>
        <br>
        <?php
        #CODIGO php
        $a = 10;
        $b = 9.5;
        $c = 9;
        $promedio = ($a + $b + $c) / 3;
        echo $promedio;
        ?>
    </body>
</html>