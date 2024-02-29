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
        <li><a href="Pagina con menu.php">Menu</a></li>
        <li><a href="Calculos condicionales.php">Calculos condicionales</a></li>
        <li><a href="Formulota.php">Formulota</a></li>
        <li><a href="El lado más corto.php">El lado mas corto</a></li>
        <li><a href="Escalera.php">Escalera Asteriscos</a></li>
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
    <h1 style = "text-align: center;" center>18710. Formulota</h1>
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
    Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).
    <h2>Entrada</h2>   
    El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o 
    cero, y pudieran tener decimales.    
    <h2>Salida</h2>
    La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.
    Nota: Se puede usar la función tofixed(numero,decimales) para ajustar la salida.
    <h2>EJEMPLO</h2>
    <table border = "1" class="tb4"  cellspacing="0" cellspadding="5">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Descripccion</th>
        </tr>
        <tr>
           <td>1 <br>2 <br>3</td>
            <td>0.235714</td>
            <td>0.235714285714286</td>
        </tr>
        <tr>
           <td>4 <br>5 <br>6</td>
            <td>0.074477</td>
            <td>0.0744773519163764</td>
        </tr>
        <tr>
           <td>7 <br>8 <br>9</td>
            <td>0.044525</td>
            <td>0.0445247435713634</td>
        </tr>
         </table>
        <form action="Formulota.php" method="post">
           <br> X Y Z:
             <br><input type="text" name="txtN1"> <br>
            <input type="text" name="txtN2"> <br>
            <input type="text" name="txtN3"> <br>
            <input type="submit" name="Enviar"> <br>
        </form>
        <br> <br>
    <?php
        if($_POST){
            $x = $_POST['txtN1'];
            $y = $_POST['txtN2'];
            $z = $_POST['txtN3'];
            $F1 = ($x + $y)/(2*$x);
            $F2 = (pow($x,3) + pow($y,3))/(pow($x,2) + pow($y,2));
            $F3 = (pow($x,2) + pow($y,2)) + pow($z,2);
            $Final = ($F1 + $F2) / $F3;
            echo "X: ",$x, " Y: ",$y," Z: ",$z;
            echo "<br>RESULTADO: ";
            echo $Final;
        }
    ?>
</body>
</html>