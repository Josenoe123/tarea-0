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
    <h1 style = "text-align: center;" center>4886. Autores</h1>
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
    Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron. Por ejemplo, el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia de documentos científicos anteriores funciona mucho y es frecuente que un documento utilice dos convenciones de nomenclatura diferentes: la variación corta (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt) Apellidos completos separados por guiones. Encontramos que la mezcla de dos convenciones en un papel es estéticamente desagradable 
    y quisiera que usted escribiera un programa que transformara variaciones largas en cortas
    <h2>Entrada</h2>   
    La primera y única línea de entrada contendrá como máximo 100 caracteres, letras mayúsculas y minúsculas del alfabeto inglés y guión ('-' ASCII 45). El primer carácter siempre será una letra mayúscula. Los guiones siempre serán
     seguidos por una letra mayúscula. Todos los demás caracteres serán letras minúsculas.
    <h2>Salida</h2>
    La primera y única línea de salida debe contener la variación corta apropiada.
    <h2>EJEMPLO</h2>
    <table border = "1" class="tb4"  cellspacing="0" cellspadding="5">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
           <td>Knuth-Morris-Pratt</td>
            <td>KMP</td>
        </tr>
        <tr>
           <td>Mirko-Slavko</td>
            <td>MS</td>
        </tr>
        <tr>
           <td>Pasko-Patak</td>
            <td>PP</td>
        </tr>
     </table>
        <form action="Autores.php" method="post">
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
           echo $x1[0];
           for($i=1;$i<$n;$i++){
                if($x1[$i] == '-')
                $cont++;
                if($cont){
                    echo $x1[$i+1];
                    $cont = 0;
                }
           }
        }
    ?>
</body>
</html>