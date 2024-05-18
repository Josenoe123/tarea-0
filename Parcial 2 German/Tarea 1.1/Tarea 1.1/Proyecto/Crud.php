<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
<?php
        $usuario = "MEX";
        $Password = "MEX";
        if($_POST){
            $usuario = $_POST['Usuario'];
            $Password = $_POST['Password'];
            $conexion = mysqli_connect('localhost','root','','Escuela','3306');
            $consulta = "select * from Usuarios where sha1('$Password') = password and Usuario like '$usuario'";
            $resultado = mysqli_query($conexion,$consulta);
            if(mysqli_fetch_array($resultado)){
                echo "<script>
                window.location.href = 'implementar.php';
                </script>;";
            }
            else{
                echo "<script>
                alert('USUARIO O CONTRASEÑA INCORRECTOS');
                </script>;";
                echo "<script>
                window.location.href = 'login.php';
                </script>;";
            }
            mysqli_close($conexion);
        }
    ?>
</body>
</html>