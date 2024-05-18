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
        <h1>Apellidos</h1>
        <img src="https://cbtis217.edu.mx/img/bandera.png" 
        alt="imagen" class="img-header">
    </div>
    <div class="cont-Registro" align="center">
        <table class="TB-Registro">
            <form action="Apellidos.php" method="POST">
                <tr>
                    <td>
                        Apellido Nuevo:
                    </td>
                    <td>
                        <input type="text" name="Apellido">
                    </td>
                </tr>
                <tr>
                    <td>
                        Matricula:
                    </td>
                    <td>
                        <input type="text" name="Matricula">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Actualizar" name="Enviar" class="btn-submit">
                        <td><input type="button" value="Volver" class="btn-redirect" onclick="redirectToPage()"></td>
                    </td>
                </tr>
            </form>
            </table>
        <div>
            <script>
                function redirectToPage() {
                window.location.href = "http://localhost/Proyecto/Actualizar.php";}
            </script>
</body>
</html>

<?php
$MATRICULA= 0;
$Apellidos = 'MEX';
$Nombre = 'Gua';
$Fecha_nac = '2007-10-08';
$Direccion = 'GUA';
$Telefono = 'BUA';
$Correo = 'NUA';
$Tutor = 'NUA';

$conexion = mysqli_connect('localhost','root','','Escuela','3306');
$consulta = "select * from Alumnos";
$Resultado = mysqli_query($conexion,$consulta);

// Tomar los datos y ponerlo en una tabla
echo "<table cellspacing = 0 class='professional-table'>";
    while($mostrar = mysqli_fetch_array($Resultado)){
        echo "<tr>";
        echo "<td>", $mostrar['Matricula'], "</td>";
        echo "<td>", $mostrar['Apellidos'], "</td>";
        echo "<td>", $mostrar['Nombre'], "</td>";
        echo "<td>", $mostrar['Fecha_nac'], "</td>";
        echo "<td>", $mostrar['Direccion'], "</td>";
        echo "<td>", $mostrar['Telefono'], "</td>";
        echo "<td>", $mostrar['Correo'], "</td>";
        echo "<td>", $mostrar['Tutor'], "</td>";
        echo "<tr>";
    }
echo "</table>";

if($_POST){
    $MATRICULA = $_POST['Matricula'];
    $Apellidos = $_POST['Apellido'];
    mysqli_close($conexion);
    //Paso 1: Conectarse a un servidor y una base de datos
    $conexion = mysqli_connect('localhost','root','','Escuela','3306');
    
    //Paso 2: Realizar la accion(Insert,Update ETC...).
    $consulta = "Update Alumnos set Apellidos = '$Apellidos' where Matricula = $MATRICULA";
    $Resultado = mysqli_query($conexion,$consulta);

    echo "<script>
    alert('Modificado Correctamente');
    </script>;";
    echo "<script>
    window.location.href = 'Apellidos.php';
    </script>;";
    //Paso 3: cerrar la conexion
    mysqli_close($conexion);
}
else mysqli_close($conexion);

?>