<?php
    //Uso de explede
    $lista_de_frutas="fresa, mango, sandia";
    $lista_frutas_array=explode(",",$lista_de_frutas);
    var_dump($lista_de_frutas);
    echo "<br>";
    var_dump($lista_frutas_array);
    //Recorrer un arreglo con un ciclo foreach
    foreach($lista_frutas_array as $h){
        echo "<br>","Fruta: ",$h;
    }
    //Arreglo asociativo con
    //Nombres Y edades de al menos 5 personas
    //Imprimir el arreglo con un var_dump()
    //Luego,Imprimir cada elemnto con foreach
    echo "<br> <br> Nombre de 5 personas <br>";
    $personas=array(
        "Mariana"=>18,
        "Isda"=>16,
        "Alexis"=>45,
        "Juan"=>90,
        "Clarence"=>67
    );
    foreach($personas as $p){
        echo "<br>",$p;
    }
?>