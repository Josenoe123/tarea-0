<?php
    $contraseñe;
    $login;
    if($_POST){
        $login = $_POST['name'];
        $contraseña = $_POST['password'];
    }
    $conexion = mysqli_connect('localhost','root','','sistema','3306');
    
    $consulta = "select * from usuarios where login like '$login'
    and password like sha1('$contraseña')";
    $resultado = mysqli_query($conexion,$consulta);
    if(mysqli_fetch_array($resultado)){
        echo "Contraseña Correcta entro al sistema";
    }
    else{
        echo "Esa no es la contraseña";
    }
    mysqli_close($conexion);
?>