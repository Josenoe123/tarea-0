<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <br>
        <table border = "1" class="tb1" cellspacing="0">
            <tr>
                <th>Problema</th>
                <th>Ver Solucion</th>

            </tr>
        </table>
        <hr>
    </center>
    <ul id = "menu">
    <li><a href="tarea 1.8.php">Menu</a></li>
        <li><a href="Bit de paridad.php">Bit de paridad</a></li>
        <li><a href="Autores.php">Autores</a></li>
        <li><a href="Adquisición de Letras.php">Letras</a></li>
    </ul>
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
    <h1 style = "text-align: center;" center>4352. Bit de paridad</h1>
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
    Un bit de paridad es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar. Los bits de paridad conforman 
    el método de detección de errores más simple. Existen dos variantes de este método:
    <h2>Entrada</h2>   
    La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.
    <h2>Salida</h2>
    La salida es la misma secuencia de siete bits de la entrada más el 
    bit de paridad par. Dicho bit de paridad se agrega al lado derecho.
    <h2>EJEMPLO</h2>
    <table border = "1" class="tb4"  cellspacing="0" cellspadding="5">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
           <td>1010001</td>
            <td>10100011</td>
        </tr>
        <tr>
           <td>1101001</td>
            <td>11010010</td>
        </tr>
        <tr>
           <td>0000000</td>
            <td>00000000</td>
        </tr>
        <tr>
           <td>1111111</td>
            <td>11111111</td>
        </tr>
     </table>
        <form action="Bit de paridad.php" method="post">
           <br> <br>Num: <br>
            <input type="text" name="txtN1"> <br>
            <input type="submit" name="Enviar"> <br>
        </form>
        <br> <br>
    <?php
        if($_POST){
           $x1 = $_POST['txtN1'];
           $n = strlen($x1);
           $cont = 0;
            for($i = 0;$i<$n;$i++){
                if($x1[$i] == '1')
                $cont++;
            }
            if($cont % 2 == 0){
                echo $x1 , "0";
            }
            else{
                echo $x1 ,"1";
            }
        }
    ?>
</body>
</html>