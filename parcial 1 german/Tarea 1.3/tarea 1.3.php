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
        <h1 style="text-align: center;">5630. Colegiatura</h1>
        <h2>Descripción</h2>
        La mamá de Esteban quiere inscribirlo en la mejor preparatoria de
        Cuernavaca, pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas 
        un programa que le diga cuanto tenga que pagar. El esquema que maneja la prepa es este: <br>
        Plan de pagos:
        <br>
        La colegiatura de los alumnos se determina según el numero de materias que cursan. El costo de cada una de las materias es de $1600.
         Se ha establecido un 
        programa para estimular a los alumnos, el cual consiste en lo siguiente: si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento del 30% sobre la colegiatura y no se le cobrara IVA; si el 
        promedio obtenido es menor que 9 deberá pagar la colegiatura completa, mas el IVA del 16%.
        <h2>Entrada</h2>
        El numero de materias A que Esteban va a cursar. Y un numero con decimales B
        que es el promedio de Esteban.
        <h2>Salida</h2>
        Un numero entero C con el precio a pagar. Debe de ir con un $.
        <h2>Ejemplo</h2>
        <table border = "1">
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
            <tr>
               <td>5 <br> 9.6</td>
               <td>$5600</td>
            </tr>
            <tr>
               <td>8 <br> 7.8</td>
               <td>$14848</td>
            </tr>
            <tr>
               <td>2 <br> 8</td>
               <td>$3712</td>
            </tr>
        </table>
        <br>
        <h3>Solucion:</h3>
        <?php
        #CODIGO php
        $a = 8;
        $b = 7.8;
        $costo = $a * 1600;
        if($b < 9){
            $iva = $costo * 0.16;
            $costo += $iva;
            echo "$",$costo;
        }
        else{
            $reduccion = $costo * 0.30;
            $costo = $costo - $reduccion;
            echo "$",$costo;
        }
        ?>
    </body>
</html>