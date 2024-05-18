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
        <h1>Actualizar Datos</h1>
        <img src="https://cbtis217.edu.mx/img/bandera.png" 
        alt="imagen" class="img-header">
    </div>
    <div class="cont-Registro" align="center">
        <table class="TB-Registro">
            <form action="Actualizar.php" method="POST">
                <tr>
                    <td><input type="button" value="Apellidos" class="btn-redirect" onclick="redirectToPage()"></td>
                    <td><input type="button" value="Nombre" class="btn-redirect" onclick="redirectToPage2()"></td>
                    <td><input type="button" value="Fecha_Nac" class="btn-redirect" onclick="redirectToPage3()"></td>
                    <td><input type="button" value="Direccion" class="btn-redirect" onclick="redirectToPage4()"></td>
                    <td><input type="button" value="Telefono" class="btn-redirect" onclick="redirectToPage5()"></td>
                    <td><input type="button" value="Correo" class="btn-redirect" onclick="redirectToPage6()"></td>
                    <td><input type="button" value="Tutor" class="btn-redirect" onclick="redirectToPage7()"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Volver" class="btn-redirect" onclick="redirectToPage0()"></td>
                </tr>
            </form>
            </table>
        <div>
        <script>
            function redirectToPage0() {
            window.location.href = "http://localhost/Proyecto/implementar.php"; }
         function redirectToPage() {
            window.location.href = "http://localhost/Proyecto/Apellidos.php"; // Reemplaza con la URL de tu elección
        }
        function redirectToPage2() {
            window.location.href = "http://localhost/Proyecto/Nombre.php"; // Reemplaza con la URL de tu elección
        }
        function redirectToPage3() {
            window.location.href = "http://localhost/Proyecto/Fecha.php"; // Reemplaza con la URL de tu elección
        }
        function redirectToPage4() {
            window.location.href = "http://localhost/Proyecto/Direccion.php"; // Reemplaza con la URL de tu elección
        }
        function redirectToPage5() {
            window.location.href = "http://localhost/Proyecto/Telefono.php"; // Reemplaza con la URL de tu elección
        }
        function redirectToPage6() {
            window.location.href = "http://localhost/Proyecto/Correo.php"; // Reemplaza con la URL de tu elección
        }
        function redirectToPage7() {
            window.location.href = "http://localhost/Proyecto/Tutor.php"; // Reemplaza con la URL de tu elección
        }
    </script>
</body>
</html>
