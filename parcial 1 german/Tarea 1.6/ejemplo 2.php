<?php
    //Arreglo de Arreglos
    $persona=array(
        "Pedro"=>array(
            "edad"=>17,
            "peso"=>60,
            "Semestre"=>4,

        ),
        "Maria"=>array(
            "edad"=>18,
            "peso"=>52,
            "Semestre"=>6,
            
        )
    );
    echo "Semestre: ", $persona["Maria"]["Semestre"];//Acceso Al Item
    echo "<br>";
    echo var_dump($persona);
?>