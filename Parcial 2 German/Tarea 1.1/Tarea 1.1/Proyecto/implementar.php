<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
<div class="header-Registro">
        <h1>CRUD DE ALUMNOS</h1>
        <img src="https://cbtis217.edu.mx/img/bandera.png" 
        alt="imagen" class="img-header">
    </div>
    <div class="cont-Login" align="center">
      <table class="TB-Registro">
                <tr>
                    <td><input type="button" value="Insertar Datos" class="btn-redirect" onclick="redirectToPage()"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Eliminar Datos" class="btn-redirect" onclick="redirectToPageEliminar()"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Actualizar Datos" class="btn-redirect" onclick="redirectToPageActualizar()"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Inicio" class="btn-redirect" onclick="redirectToPage0()"></td>
                </tr>
      </table>
      <div>
      <script>
        alert('BIENVENIDO');
     </script>
    <script>
        function redirectToPage0(){
            window.location.href = "http://localhost/Proyecto/index.php"; // Reemplaza con la URL de tu elección
        }
         function redirectToPage() {
            window.location.href = "http://localhost/Proyecto/insertar.php"; // Reemplaza con la URL de tu elección
        }
        function redirectToPageEliminar() {
            window.location.href = "http://localhost/Proyecto/Eliminar.php"; // Reemplaza con la URL de tu elección
        }
        function redirectToPageActualizar() {
            window.location.href = "http://localhost/Proyecto/Actualizar.php"; // Reemplaza con la URL de tu elección
        }
    </script>
</body>
</html>