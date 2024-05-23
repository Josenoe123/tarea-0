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
            background-color: #808B96;
        }
    </style>
    <H3>RESULTADO DEL PROBLEMA 1 DE FUNCIONES</H3>
    <?php
        if($_POST){
            $n = $_POST['n'];
            function f($n){
                if($n > 0){
                    return (pow($n,2) + (3 * $n));
                }
                else return ($n * $n) - $n;
            }
            echo f($n);
        }
    ?>
</body>
</html>