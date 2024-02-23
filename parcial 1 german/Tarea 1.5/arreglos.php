<?php
    $a=array();
    //Con la funcion rand puedo llenar un arreglo con numeros de 0 a 10 en este caso
    $n=rand(1,1000);
    for($i=1;$i<=$n;$i++) // Ciclo para llenar el arreglo
        array_push($a,rand(0,10));
    $suma = 0;
    for($i=0;$i<$n;$i++){
        $suma += $a[$i];
    }
    echo "El promedio de todos los alumnos del CBtis217 es de: ",$suma / $n;
    echo " <br> <br> Calificaciones mayores a 6 o igual Alumnos no Reprobados:";
    $aprobados = 0;
    for($i=0;$i<$n;$i++){//Improimiendo el arreglo
        if($a[$i] >= 6){
           $aprobados++;
        }
    }
    echo $aprobados,"<br> <br>";
    $reprobados = 0;
    for($i=0;$i<$n;$i++){//Improimiendo el arreglo
        if($a[$i] < 6){
           $reprobados++;
        }
    }
    $porcentaje = ($reprobados / $n) * 100;
    $porcentaje2 = ($aprobados / $n) * 100;
    echo "La cantidad de Alumnos que reprobaron son ",$reprobados," y el porcentaje de alumnos en total es: ",round($porcentaje,2),"%<br> <br>";
    echo "La cantidad de Alumnos aprobados en porcentaje es de: ",round($porcentaje2,2),"% Mientras que la cantidad de alumnos aprobados es de ",$aprobados,"<br> <br>";
    $mediaaritmetica = $suma / $n;
    $sumaaritmetica = 0;
    for($i=0;$i<$n;$i++){
        $media = pow(($a[$i] - $mediaaritmetica),2);
        $sumaaritmetica += $media;
    }
    $mediadeloscuadrados = $sumaaritmetica / $n;
    $raizdelamedia = sqrt($mediadeloscuadrados);
    echo "Finalmente la desviacion estandar de todos los numeros es de: ",round($raizdelamedia,2);
    echo "<br> <br> Tabla con las calificaciones: <br> <br> <table border='1'>";
    for($i=0;$i<$n;$i++){
        echo "<td>";
        echo $a[$i];
        if(($i+1) % 30 == 0)
        echo "<tr>";
    }
    echo "</table>";

?>
