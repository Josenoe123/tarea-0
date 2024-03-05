<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Manejo de Strings</h1>
    <form action="strings.php" method="post">
        <table border="1" cellspacing="0">
            <tr>
                <td>Palabra:</td>
                <td><input type="text" name="txtPalabra"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Enviar"></td>
            </tr>
        </table>
    </form>

<?php
    if($_POST){
        $palabra = $_POST['txtPalabra'];

        echo "<h2> Problema de practica <br></h2>";
        $n = strlen($palabra);
        if($n > 4){
            echo $palabra[0],$n-2,$palabra[$n-1];
        }
        else
        echo $palabra;
        echo "<br> <br>";
        echo "Palabra completa: ",$palabra,"<br>";
        echo "Mayuscula: ",strtoupper($palabra),"<br>";
        echo "Minuscula: ",strtolower($palabra),"<br>";
        echo "Primer letra: ",$palabra[0],"<br>";
        echo "Palabra al revez: ";
        for($i=$n-1;$i>=0;$i--){
            echo $palabra[$i];
        }
        echo "<br>";
        echo " <br>Es palindromo o no: <br>";
        $cont = 0;
        for($i=0;$i<$n/2;$i++){
            if($palabra[$i] != $palabra[$n-1-$i])
            $cont++;
        }
        if($cont == 0)
            echo "<h4> Si es palindromo <br> </h4>";
        else
        echo "<h4> No es palindromo <br> </h4>";

        echo "Palabra imprmiendo cada letra en un renglon diferente: <br>";
        for($i=0;$i<$n;$i++){
            echo $palabra[$i],"<br>";
        }
        echo "<br>";
        echo "Pirademe de una frase <br>";
        for($i=0;$i<$n;$i++){
            for($j=0;$j<=$i;$j++){
                echo $palabra[$j];
            }
            echo "<br>";
        }
    }
?>
</body>

</html>