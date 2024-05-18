<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    <div class="header">
        <h1>CBTIS 217</h1>
        <img src="https://cbtis217.edu.mx/img/bandera.png"
        alt="imagen" class="img-header">

        <div class ="Acceso">
            <table>
                <tr>
                    <td>
                        <a href="Registro.php">Registrarse</a>
                    </td>
                    <td>
                        <a href="Login.php">/Acceder</a>
                    </td>
                </tr>
            </table>
            </div>
    </div>
     <div class="cont">
        
    </div>
    
</body>
</html>
<?php
        $nombre = "MEX";
        $usuario = "MEX";
        $Correo = "MEX";
        $Password = "MEX";
        if($_POST){
            $nombre = $_POST['Nombre'];
            $usuario = $_POST['Usuario'];
            $Correo = $_POST['Correo'];
            $Password = $_POST['Password'];
            $conexion = mysqli_connect('localhost','root','','Escuela','3306');
            $consulta = "insert into Usuarios(Nombre,Usuario,Correo,Password)
            values ('$nombre','$usuario','$Correo',sha1('$Password'))";
            $resultado = mysqli_query($conexion,$consulta);
            echo "<script>
                alert('REGISTRADO CORRECTAMENTE');
                </script>;";
            mysqli_close($conexion);
        }
    ?>