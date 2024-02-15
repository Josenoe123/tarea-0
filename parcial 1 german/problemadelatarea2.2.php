<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>12618. Practicando con formulas</h1>
        <h2>Descripción</h2>
        Dado un valor real a, quieres resolver 
        una serie de ecuaciones hasta obtener el valor de z.
        <p style = "text-align: center;"> 
            <br> x = 3a + 15 <br>
            y = x + 3/x+1 <br>
            z = 5x + 7y / axy <br>
        <p>

        <h2>Entrada</h2>
        Un real a. Puedes suponer que 1 <= a <= 100.
        <h2>Salida</h2>
        Un real que sea el valor de z  impreso con tres puntos decimales.
        <h2>Ejemplo</h2>
        <table border = "1">
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
            <tr>
               <td>33.562</td>
               <td>0.148</td>
            </tr>
            <tr>
                <td>72.569</td>
                <td>0.069</td>
            </tr>
            <tr>
                <td>64.835</td>
                <td>0.077</td>
            </tr>
        </table>
        <br>
        <?php
        #CODIGO php
        $a = 64.835;
        $x = (3*$a) + 15;
        $y = ($x+3)/($x+1);
        $z = (5*$x) + (7*$y);
        $z = $z / ($a * $x * $y);
        echo $z;
        ?>
    </body>
</html>