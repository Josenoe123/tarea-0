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
    <h1 style = "text-align: center;" center>11338. Escalera de asteriscos </h1>
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
    Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta. Tu misión es 
    ayudar a Inés a subir a su casa construyendo una escalera de longitud N y altura hecha de asteriscos.
    <h2>Entrada</h2>   
    Se te darán como valor de entrada un numero entero N el cuál representa la longitud y altura de la escalera.
    <h2>Salida</h2>
    Deberás imprimir como salida una escalera de dimensiones N de largo y N de alto
    <h2>EJEMPLO</h2>
    <table border = "1" class="tb4"  cellspacing="0" cellspadding="5">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
           <td>2</td>
            <td># <br> ##</td>
        </tr>
        <tr>
           <td>5</td>
            <td># <br> ## <br> ### <br> #### <br> #####</td>
        </tr>
        <tr>
           <td>1</td>
            <td>#</td>
        </tr>
        <tr>
           <td>3</td>
            <td># <br> ## <br> ###</td>
        </tr>

    </table>
        <form action="Escalera.php" method="post">
        <br> <br> Numero N:
            <input type="text" name="txtN"> <br>
            <input type="submit" name="Enviar"> <br>
        </form>
        <br>  <br>
    <?php
        if($_POST){
            echo "RESULTADO:  <br> <br>";
            $N = $_POST['txtN'];
            for($i=0;$i<$N;$i++){
               for($j=0;$j<=$i;$j++){
                echo "#";
               }
               echo " <br>";
            }
        }
    ?>
</body>
</html>