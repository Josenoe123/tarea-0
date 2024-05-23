<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_POST){
            $x = $_POST['X'];
            $y = $_POST['Y'];
            $z = $_POST['Z'];
            function G($b,$c){
                $T = (($b * 7)-3);
                $T2 =(pow($c,2) + 1);
                return $T % $T2;
            }
            function F($a){
                $n1 = $a * 2;
                $n2 = $a * 3;
                $n2 = $n2 * -1;
                return (pow(($a),3) * 4) + (G($n1,$n2));
            }
            function H($x,$y,$z){
                $x2 = $x / $y;
                $z2 = $z / $y;
                return F($x2) + (3 * (G($z2,$x)));
            }
            $R = H($x,$y,$z);
            echo $R;
        }
    ?>
</body>
</html>