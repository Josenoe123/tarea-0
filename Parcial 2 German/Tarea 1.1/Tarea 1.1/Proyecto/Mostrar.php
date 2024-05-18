<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
<div class="header-Registro">
        <h1>MUESTRA DE ALUMNOS</h1>
        <img src="https://cbtis217.edu.mx/img/bandera.png" 
        alt="imagen" class="img-header">
    </div>
    <div class="cont-Registro" align="center">
    <?php
            //Seleccionar una vista
            $ciudad = 'Uri';
            $code = 'MEX';
            $Estado = 'Gua';
            $popu = 35678;

            /*if($_POST){
                $ciudad = $_POST['name'];
                $code = $_POST['countrycode'];
                $Estado = $_POST['District'];
                $popu = $_POST['population'];
            }*/
                //Paso 1: Conectarse a un servidor y una base de datos
                $conexion = mysqli_connect('localhost','root','','Escuela','3306');
                
                //Paso 2: Realizar la accion(Insert,Update ETC...).
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
                //Paso 3: cerrar la conexion
                mysqli_close($conexion);
?>
    <div>
        <table class="TB-Registro">
            <td><input type="button" value="Volver" class="btn-Insertar" onclick="redirectToPage()"></td>
        </table>
        <script>
             function redirectToPage() {
            window.location.href = "http://localhost/Proyecto/implementar.php"; }
        </script>
</body>
</html>