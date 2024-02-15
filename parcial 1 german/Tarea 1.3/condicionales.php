<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php
    echo "<h3>Estructura de Control IF</h3> <hr>";
    echo "El mayor es 35 <br> <hr>";
    $a = 35;
    $b = 15;
    # Este es un if simple *******************************
    if($a > $b)
        echo "El mayor es A con un valor de: ",$a,"<br>";
    # Este es un if else *******************************
    if($a > $b)
        echo "El mayor es A con un valor de: ",$a,"<br>";
    else
        echo "El mayor es B con un valor de: ",$b,"<br>";
    # if else con cadenas *******************************
    echo "<br> <hr>";
    echo "Prueba de If y else con strings <hr>";
    $estacion = "Primavera";
    if($estacion == "invierno")
        echo "Invierno,del 21 de diciembre al 20 de marzo";
    else if($estacion == "Primavera")
        echo "Primavera,del 21 de marzo al 20 de Junio";
    else if($estacion == "Verano")
        echo "Verano,del 21 de Junio al 20 de septiempre";
    else if($estacion == "Otoño")
        echo "Otoño,del 21 de Septiembre al 20 de Diciembre";
   ?> 
</body>
</html>