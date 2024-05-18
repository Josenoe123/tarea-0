<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    
    <div class="header-Registro">
        <h1>Registro</h1>
        <img src="https://cbtis217.edu.mx/img/bandera.png" 
        alt="imagen" class="img-header">
    </div>
    <div class="cont-Registro" align="center">
            <table class="TB-Registro">
            <form action="index.php" method="POST">
                <tr>
                    <td class="datos">Nombre:</td>
                    <td><input type="text" name="Nombre"></td>
                </tr>
                <tr>
                    <td class="datos">Usuario:</td>
                    <td><input type="text" name="Usuario"></td>
                </tr>
                <tr>
                    <td class="datos">Correo:</td>
                    <td><input type="text" name="Correo"></td>
                </tr>
                <tr>
                    <td class="datos">Password:</td>
                    <td><input type="text" name="Password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Registrarse" class="btn-submit"></td>
                    <td><input type="button" value="Inicio" class="btn-redirect" onclick="redirectToPage()"></td>
                </tr>
                </form>
            </table>
    </div>
    <script>
        function redirectToPage() {
            window.location.href = "http://localhost/Proyecto/index.php"; // Reemplaza con la URL de tu elección
        }
    </script>
</body>
</html>