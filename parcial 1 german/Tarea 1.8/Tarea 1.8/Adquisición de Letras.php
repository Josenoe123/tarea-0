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
    <h1 style = "text-align: center;" center>3991. Adquisición de Letras </h1>
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
    En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.
    El paquete que la escuela entrega es una palabra con letras minúsculas del alfaeto.
    <h2>Entrada</h2>   
    Un solo string de letras minúsculas.
    <h2>Salida</h2>
    La cantidad de veces que aparece la letra favorita de Miguel.
    <h2>EJEMPLO</h2>
    <table border = "1" class="tb4"  cellspacing="0" cellspadding="5">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
           <td>abcjdlllld</td>
            <td>2</td>
        </tr>
     </table>
        <form action="Adquisición de Letras.php" method="post">
           <br> <br>Nombre: <br>
            <input type="text" name="txtN1"> <br>
            <input type="submit" name="Enviar"> <br>
        </form>
        <br> <br>
    <?php
        if($_POST){
           $x1 = $_POST['txtN1'];
           $n = strlen($x1);
           $cont = 0;
           for($i=1;$i<$n;$i++){
                if($x1[$i] == 'd')
                $cont++;
           }
           echo $cont;
        }
    ?>
</body>
</html>