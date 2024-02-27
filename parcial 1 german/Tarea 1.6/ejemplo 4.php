<?php
    //While
    $i = 0;
    while($i < 10){//Ciclo controlado por i
        echo $i++, "<br>";
    }
    $dato=rand(50,100);
    echo "<br>";
    while($dato > 20){
        echo $dato,"<br>";
        $dato = $dato/2;
    }
?>