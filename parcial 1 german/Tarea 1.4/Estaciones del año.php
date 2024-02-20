<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: withd;
        }
    </style>
    <center>
        <br>
        <table border = "1">
            <tr>
                <th>Problema</th>
                <th>Ver Solucion</th>

            </tr>
        </table>
        <hr>
    </center>
    <h1 style = "text-align: center;" center>13433. Estaciones del Año</h1>
    <center>
        <table  border = "1">
            <tr>
                <th>Puntos</th>
                <td>23.98</td>
                <th>Límite de memoria</th>
                <td>32 MiB</td>
            </tr>
            <tr>
                <th>Límite de tiempo (caso)</th>
                <td>1s</td>
                <th>Límite de tiempo (total)</th>
                <td>1m0s</td>
            </tr>
            <tr>
                <th>Tamaño límite de entrada (bytes)</th>
                <td>10 KiB</td>
            </tr>
        </table>
    </center>
    <center>
    <h2>Descripccion</h2>
    Brithany quiere combinar la programación con el inglés, 
    y se encuentra empezando a usar las estructuras de control selectivas 
    en la programación estructurada, como ejercicio necesita desarrollar un 
    programa que sea capaz de especificar a que estación (su nombre en inglés) 
    del año pertenece una fecha en especifico compuesta por un día d 
    y un mes m según lo siguiente: <br> <br>

   * Winter del 21 de diciembre al 20 de marzo <br>
   * Spring del 21 de marzo al 21 de junio <br>
   * Summer del 22 de junio al 22 de septiembre <br>
   * Fall del 23 de septiembre al 20 de diciembre <br> <br>
   Considerando la siguiente cantidad de días para cada mes: <br> <br>
* Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días <br>
    * Abril, Junio, Septiembre y Noviembre 30 días <br>
    * Febrero 28 días <br>
    </center>
    * Cualquier fecha fuera de estos rangos debe considerarse como no existente <br>
    Ayuda a Brithany a crear ese programa usando estructuras de control selectivas. <br>
    <h2>Entrada</h2>   
    Dos números enteros d y m separados por un espacio que corresponden al día y mes de una fecha determinada <br>
    <h2>Salida</h2>
    Una cadena S
 que indique la estación del año a la que pertenece la fecha ingresada o un 
 mensaje que indique no existe la fecha, si la fecha no es válida.
    <h2>EJEMPLO</h2>
    <table border = "1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>15 10</td>
            <td> Fall</td>
        </tr>
         <tr>
            <td>22 3</td>
            <td> Spring</td>
        </tr>
         <tr>
            <td>31 4</td>
            <td> No Existe</td>
        </tr>

    </table>

    <h3>Resultado:</h3>
    Dia 15 y Mes 10 <br>
    <?php
    $Dia = 15;
    $Mes = 10;
    if($Dia > 31 && $Mes == 1)
        echo "No Existe";
    if($Dia > 28 && $Mes == 2)
        echo "No Existe";
    if($Dia > 31 && $Mes == 3)
        echo "No Existe";
    if($Dia > 30 && $Mes == 4)
        echo "No Existe";
    if($Dia > 31 && $Mes == 5)
        echo "No Existe";
    if($Dia > 30 && $Mes == 6)
        echo "No Existe";
    if($Dia > 31 && $Mes == 7)
        echo "No Existe";
    if($Dia > 31 && $Mes == 8)
        echo "No Existe";
    if($Dia > 30 && $Mes == 9)
        echo "No Existe";
    if($Dia > 31 && $Mes == 10)
        echo "No Existe";
    if($Dia > 30 && $Mes == 11)
        echo "No Existe";
    if($Dia > 31 && $Mes == 12)
        echo "No Existe";
    if($Dia <= 31 && $Dia >= 1){
        if($Mes >= 1 && $Mes <= 12){
            if(($Dia >= 1 && $Dia <= 31) && $Mes == 1){
                echo "Winter";
            }
            else if(($Dia >= 1 && $Dia <= 28) && $Mes == 2){
                echo "Winter";
            }
             else if(($Dia >= 1 && $Dia <= 20) && $Mes == 3){
                echo "Winter";
            }
             else if(($Dia >= 21 && $Dia <= 31) && $Mes == 3){
                echo "Spring";
            }
             else if(($Dia >= 1 && $Dia <= 30) && $Mes == 4){
                echo "Spring";
            }
             else if(($Dia >= 1 && $Dia <= 31) && $Mes == 5){
                echo "Spring";
            }
             else if(($Dia >= 1 && $Dia <= 20) && $Mes == 6){
                echo "Spring";
            }
             else if(($Dia >= 21 && $Dia <= 30) && $Mes == 6){
                echo "Summer";
            }
            else if(($Dia >= 1 && $Dia <= 31) && $Mes == 7){
                echo "Summer";
            }
            else if(($Dia >= 1 && $Dia <= 31) && $Mes == 8){
                echo "Summer";
            }
            else if(($Dia >= 1 && $Dia <= 20) && $Mes == 9){
                echo "Summer";
            }
            else if(($Dia >= 21 && $Dia <= 30) && $Mes == 9){
                echo "Fall";
            }
            else if(($Dia >= 1 && $Dia <= 31) && $Mes == 10){
                echo "Fall";
            }
            else if(($Dia >= 1 && $Dia <= 30) && $Mes == 11){
                echo "Fall";
            }
            else if(($Dia >= 1 && $Dia <= 20) && $Mes == 12){
                echo "Fall";
            }
            else if(($Dia >= 21 && $Dia <= 31) && $Mes == 12){
                echo "Winter";
            }
        }
        else
        echo "No Existe";
    }
    else
    echo "No Existe";
?>
<br>**************************************************************************************************************************************************************************************
 <center>
        <br>
        <table border = "1">
            <tr>
                <th>Problema</th>
                <th>Ver Solucion</th>

            </tr>
        </table>
        <hr>
    </center>
<h1 style = "text-align: center;">B. ¿Cuántos valen 7?</h1>
 <center>
        <table  border = "1">
            <tr>
                <th>Puntos</th>
                <td>10.21	</td>
                <th>Límite de memoria</th>
                <td>32 MiB</td>
            </tr>
            <tr>
                <th>Límite de tiempo (caso)</th>
                <td>1s</td>
                <th>Límite de tiempo (total)</th>
                <td>1m0s</td>
            </tr>
            <tr>
                <th>Tamaño límite de entrada (bytes)</th>
                <td>10 KiB</td>
            </tr>
        </table>
    </center>
    <h2>Descripccion</h2>
   Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.
    <h2>Entrada</h2>   
    Dos enteros en el rango de -1000 a 1000. <br>
    <h2>Salida</h2>
    La cantidad de enteros iguales a 7.  <br>
    <h2>EJEMPLO</h2>
    <table border = "1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>-3 8</td>
            <td> 0</td>
        </tr>
         <tr>
            <td>7 57</td>
            <td> 1</td>
        </tr>
         <tr>
            <td>62 7</td>
            <td>1</td>
        </tr>
        <tr>
            <td>7 7</td>
            <td>2</td>
        </tr>
    </table>

    <h3>Resultado:</h3>
    N1 = -3 y N2 = 8 <br> <br>

    <?php
        $a = -3;
        $b = 8;
        $cont = 0;
        if($a == 7)
        $cont++;
        if($b == 7)
        $cont++;
        echo $cont;
    ?>
<br>**************************************************************************************************************************************************************************************
 <center>
        <br>
        <table border = "1">
            <tr>
                <th>Problema</th>
                <th>Ver Solucion</th>

            </tr>
        </table>
        <hr>
    </center>   
<h1 style = "text-align: center;">C. El mayor de tres números</h1>
    <center>
        <table  border = "1">
            <tr>
                <th>Puntos</th>
                <td>23.98</td>
                <th>Límite de memoria</th>
                <td>32 MiB</td>
            </tr>
            <tr>
                <th>Límite de tiempo (caso)</th>
                <td>1s</td>
                <th>Límite de tiempo (total)</th>
                <td>1m0s</td>
            </tr>
            <tr>
                <th>Tamaño límite de entrada (bytes)</th>
                <td>10 KiB</td>
            </tr>
        </table>
    </center>
    <h2>Descripccion</h2>
    Realiza un problema que imprima el mayor de tres números.
    <h2>Entrada</h2>   
    Escribe tres números enteros a,b y c. <br>
    <h2>Salida</h2>
    El número entero mayor de los tres números introducidos. <br>
    <h2>EJEMPLO</h2>
    <table border = "1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>10 <br> 8 <br> -7 <br></td>
            <td> 10</td>
        </tr>
        <tr>
            <td>10 <br> 81 <br> 101 <br></td>
            <td> 101</td>
        </tr>
        <tr>
            <td>11 <br> 11 <br> 11 <br></td>
            <td> 11</td>
        </tr>
        <tr>
            <td>10 <br> 810 <br> 101<br></td>
            <td> 810</td>
        </tr>
    </table>

    <h3>Resultado:</h3>
    A = 10 B = 8 C = -7 <br> <br>

    <?php
        $A = 10;
        $B = 8;
        $C = -7;

        if($A == $B && $B == $C)
            echo $A;
        else if($A > $B && $A > $C)
            echo $A;
        else if($B > $A && $B > $C)
            echo $B;
        else
           echo $C;
    ?>
</body>
</html>

