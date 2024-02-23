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
        <h1>12662. C16</h1>
        <h2>Descripción</h2>
        OMIJal se ha encontrado con una variante en el 
        Concurso ACM, pues el numero de programadores 
        que conforman un equipo puede variar, entonces
         modifica tu programa anterior pues ahora deberás 
         preguntar el numero de 3 integrantes por equipo, 
         al final indica cuantos equipos puedenformarse 
         y cuantos programadores quedan fuera
        <h2>Entrada</h2>
        Dos números que representen el número de 
        programadores y el número de programadores por equipo
        <h2>Salida</h2>
        Salida con el número de equipos formados y los 
        estudiantes sin equipo, escrito exactamente como en el ejemplo
        <h2>Ejemplo</h2>
        <table border = "1">
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
            <tr>
               <td>5 <br> 4  </td>
               <td>Equipos formados: 1 <br>
               Estudiantes sin equipo: 1 </td>
            </tr>
            <tr>
               <td>18 <br> 3  </td>
               <td>Equipos formados: 6<br>
               Estudiantes sin equipo: 0 </td>
            </tr>
        </table>
        <br>
        <?php
        #CODIGO php
        $a = 18;
        $b = 3;
        $Equipos = $a / $b;
        $NoEquipo = $a % $b;
        echo "Equipos formados: ", round($Equipos);
        echo "<br>Estudiantes sin equipo: ",$NoEquipo;
        ?>
    </body>
</html>