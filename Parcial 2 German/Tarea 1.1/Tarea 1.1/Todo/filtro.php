<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrar Datos</title>
</head>
<body>
    <h3>CLAVE PARA BUSCAR UN PAIS</h3>
    <form action="filtro.php" method="post">
        <input type="text" name="name">
        <input type="submit" name="Enviar">
    </form>
    <h1>Listado de ciudades</h1>
    <?php
    $list;
        if($_POST){
            $list = $_POST['name'];
        $conexion = mysqli_connect('localhost','root','','world','3306');

        $consulta = "select * from city where CountryCode like '$list'";

        $resultado = mysqli_query($conexion,$consulta);
        echo "<table border = 1>";
        while($dato = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>" ,$dato['ID'] ,"</td>";
            echo "<td>",$dato['Name'],"</td>";
            echo "<td>" ,$dato['CountryCode'], "</td>";
            echo "<td>",$dato['District'], "</td>";
            echo "<td> ",$dato['Population'],"</td>";
            echo "</tr>";
        }
    }
    ?>
</body>
</html>