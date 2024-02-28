<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .tb2{
            background-color: #075646;
        }
        .tb1{
            background-color: #fff;
            cursor: pointer;
        }
        body{
            background-color: #88B9D3;
        }
        .tb4{
            background-color: #716B57;
            
        }
        .tb5{
            background-color: #fff;
        }
    </style>
    <center class="tb2">
        <br>
        <table border = "1" class="tb1">
            <tr>
                <th>Problema</th>
                <th>Ver Solucion</th>

            </tr>
        </table>
        <hr>
    </center>
    <h1 style = "text-align: center;" center>2765. Sumando dos conjuntos</h1>
    <center>
        <table  border = "1" class="tb5" cellspacing="0">
            <tr>
                <th>Puntos</th>
                <td>9.96	</td>
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
    Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea N=4: <br>

    2 3 4 5 <br>

    6 7 1 3 <br>
    El resultado de sumarlos es: <br>

    8 10 5 8 <br>
    <h2>Entrada</h2>   
    En la primera línea el entero N. En la segunda línea, separados por un espacio, los números del primer conjunto. En la tercera 
    línea también separados por un espacio, los números del segundo conjunto.
    <h2>Salida</h2>
    Los números resultantes de sumar ambos conjuntos, separados por un espacio.
    <h2>EJEMPLO</h2>
    <table border = "1" class="tb4"  cellspacing="0" cellspadding="5">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Descripccion</th>
        </tr>
        <tr>
           <td>4
                2 3 4 5
                6 7 1 3</td>
                <td>8 10 5 8</td>
                <td>2+6, 3+7, 4+1, 5+3</td>
        </tr>
        

    </table>

<?php
    $arr1=array();
    $arr2=array();
    $n = rand(1,100);
    $n2 = rand(1,100);
    $suma = 0;
    echo "<h3> El primer arreglo o conjunto Tiene: <br> </h3>",$n,"<h3> Elementos <br> </h3>";
    echo "<h3> El Segundo arreglo o conjunto Tiene: <br> </h3>",$n2,"<h3> Elementos <br> </h3>";
    for($i=0;$i<$n;$i++){
        $Num = rand(1,1000);
        echo $i+1," Elemento del 1er arreglo con un valor de:",$Num,"<br>";
        $suma += $Num;
    }

    echo "<br> <hr>";
    for($i=0;$i<$n2;$i++){
        $Num = rand(1,1000);
        echo $i+1," Elemento del 2do arreglo con un valor de:",$Num,"<br>";
        $suma += $Num;
    }
    echo "<br> <br> <h3>La suma finalmente del arreglo es: </h3>",$suma;

?>
</body>
</html>