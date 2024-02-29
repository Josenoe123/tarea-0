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
    <h1 style = "text-align: center;" center>7093. El lado más corto</h1>
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
    Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, 
    calcule la longitud de su lado más corto.
    <h2>Entrada</h2>   
    Ocho reales
    <h2>Salida</h2>
    El lado mas corto
    <h2>EJEMPLO</h2>
    <table border = "1" class="tb4"  cellspacing="0" cellspadding="5">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
           <td>10.1 10.2 <br>
20.2 10.3 <br>
22.3 4.1 <br>
7.5 0.9</td>
        <td>6.545991</td>
        </tr>
     </table>
        <form action="El lado más corto.php" method="post">
           <br> <br>Los puntos: <br>
            <input type="text" name="txtN1"> <br>
            <input type="text" name="txtN2"> <br>
            <input type="text" name="txtN3"> <br>
            <input type="text" name="txtN4"> <br>
            <input type="text" name="txtN5"> <br>
            <input type="text" name="txtN6"> <br>
            <input type="text" name="txtN7"> <br>
            <input type="text" name="txtN8"> <br>
            <input type="submit" name="Enviar"> <br>
        </form>
        <br> <br>
    <?php
        if($_POST){
           $x1 = $_POST['txtN1'];
           $y1 = $_POST['txtN2'];
           $x2 = $_POST['txtN3'];
           $y2 = $_POST['txtN4'];
           $x3 = $_POST['txtN5'];
           $y3 = $_POST['txtN6'];
           $x4 = $_POST['txtN7'];
           $y4 = $_POST['txtN8'];
           $Min = 0;
           $L1 = sqrt(pow($x1 - $x2,2) + pow($y1 - $y2,2));
           $L2 = sqrt(pow($x2 - $x3,2) + pow($y2 - $y3,2));
           $L3 = sqrt(pow($x3 - $x4,2) + pow($y3 - $y4,2));
           $L4 = sqrt(pow($x4 - $x1,2) + pow($y4 - $y1,2));
           echo "Resultado: ",min(min(min($L1,$L2),$L3),$L4);

        }
    ?>
</body>
</html>