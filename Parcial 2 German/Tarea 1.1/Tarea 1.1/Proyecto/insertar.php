<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    <div class="header-Registro">
        <h1>Insertar Datos</h1>
        <img src="https://cbtis217.edu.mx/img/bandera.png" 
        alt="imagen" class="img-header">
    </div>
    <div class="cont-Registro" align="center">
        <table class="TB-Registro">
            <form action="insertar.php" method="POST">
                <tr>
                    <td>
                        Apellidos:
                    </td>
                    <td>
                        <input type="text" name="Apellidos">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nombre:
                    </td>
                    <td>
                        <input type="text" name="Nombre">
                    </td>
                </tr>
                <tr>
                    <td>
                        Fecha de Nac:
                    </td>
                    <td>
                        <input type="text" name="Fecha">
                    </td>
                </tr>
                <tr>
                    <td>
                        Direccion:
                    </td>
                    <td>
                        <input type="text" name="Direccion">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefono:
                    </td>
                    <td>
                        <input type="text" name="Telefono">
                    </td>
                </tr>
                <tr>
                    <td>
                        Correo:
                    </td>
                    <td>
                        <input type="text" name="Correo">
                    </td>
                </tr>
                <tr>
                    <td>
                        Tutor Nombre Completo:
                    </td>
                    <td>
                        <input type="text" name="Tutor">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="INSERTAR" name="Enviar" class="btn-submit">
                        <td><input type="button" value="Volver" class="btn-redirect" onclick="redirectToPage()"></td>

                    </td>
                </tr>
            </form>
            </table>
        <div>
        <script>
             function redirectToPage(){
                 window.location.href = "http://localhost/Proyecto/implementar.php"; // Reemplaza con la URL de tu elección
             }
        </script>
</body>
</html>

<?php
$Matricula= 0;
$Apellidos = 'MEX';
$Nombre = 'Gua';
$Fecha_nac = '2007-10-08';
$Direccion = 'GUA';
$Telefono = 'BUA';
$Correo = 'NUA';
$Tutor = 'NUA';

if($_POST){
    $Apellidos = $_POST['Apellidos'];
    $Nombre = $_POST['Nombre'];
    $Fecha_nac = $_POST['Fecha'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $Tutor = $_POST['Tutor'];

    //Paso 1: Conectarse a un servidor y una base de datos
    $conexion = mysqli_connect('localhost','root','','Escuela','3306');
    
    //Paso 2: Realizar la accion(Insert,Update ETC...).
    $consulta = "insert into Alumnos() 
    values (null,'$Apellidos','$Nombre','$Fecha_nac','$Direccion','$Telefono','$Correo','$Tutor')";
    $Resultado = mysqli_query($conexion,$consulta);
    echo "<script>
    window.location.href = 'Mostrar.php';
    </script>;";
    //Paso 3: cerrar la conexion
    mysqli_close($conexion);
}

?>