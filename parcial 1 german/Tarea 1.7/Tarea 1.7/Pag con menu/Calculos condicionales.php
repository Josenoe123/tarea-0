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
    <h1 style = "text-align: center;" center>7050. Cálculos condicionales</h1>
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
    Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones. 
    Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial N
    realizar las siguientes operaciones en el orden indicado y con aritmética entera: 
    <h2>Entrada</h2>   
    Un entero N
    <h2>Salida</h2>
    Dos enteros que correspondan con el valor final de N y el número de veces que fue modificado 
    respectivamente.
    <h2>EJEMPLO</h2>
    <table border = "1" class="tb4"  cellspacing="0" cellspadding="5">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
           <td>7</td>
                <td>8 1</td>
        </tr>
        

    </table>
        <form action="Calculos condicionales.php" method="post">
           <br> Numero N:
            <input type="text" name="txtN"> <br>
            <input type="submit" name="Enviar"> <br>
        </form>
        <br>
    <?php
        if($_POST){
            $Mov = 0;
            $N = $_POST['txtN'];
            if($N % 2 == 0){
                $N = $N / 2;
                $Mov++;
            }
            else{
                $N++;
                $Mov++;
            }
            if($N >= 100){
                $Mov++;
                $N = $N / 100;
            }
            else if($N >= 10 && $N <= 99 ){
                $N = $N / 10;
               $Mov++;
            }
            if($N % 3 == 0){
                $N--;
                $Mov++;
            }
            echo "RESULTADO: ",$N," Numero de Movimientos: ",$Mov;
        }
    ?>
</body>
</html>