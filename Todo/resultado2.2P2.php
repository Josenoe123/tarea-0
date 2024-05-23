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
    <H3>RESULTADO DEL PROBLEMA 2 DE FUNCIONES</H3>
    <?php
        if($_POST){
            $ca = $_POST['ca'];
            function f($ca){
                if($ca == 'Q' || $ca == 'A' || $ca == 'Z'){
                    return 1;
                }
                else if($ca == 'W' || $ca == 'S' || $ca == 'X'){
                    return 2;
                }
                else if($ca == 'E' || $ca == 'D' || $ca == 'C'){
                    return 3;
                }
                else if($ca == 'R' || $ca == 'F' || $ca == 'V'){
                    return 4;
                }
                else if($ca == 'T' || $ca == 'G' || $ca == 'B'){
                    return 5;
                }
                else if($ca == 'Y' || $ca == 'H' || $ca == 'N'){
                    return 6;
                }
                else if($ca == 'U' || $ca == 'J' || $ca == 'M'){
                    return 7;
                }
                else if($ca == 'I' || $ca == 'K'){
                    return 8;
                }
                else if($ca == 'O' || $ca == 'L'){
                    return 9;
                }
                else return 0;
            }
            $n = strlen($ca);
            $suma = 0;
            for($i=0;$i<$n;$i++){
                $suma += f($ca[$i]);
            }
            echo "La suma es :", $suma;
        }
    ?>
</body>
</html>