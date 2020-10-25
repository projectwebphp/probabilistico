<?php
session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la sesión no existe redireccionar al login
    header("Location:../../Index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Competencia</h1>
    <form action="../Controlador/ControladorCompetencia.php" method="post">
        Código Competencia: <input type="text" name="CodigoCompetencia" id="CodigoCompetencia">
        <br>
        Nombre Competencia: <input type="text" name="NombreCompetencia" id="NombreCompetencia">
        <br>
        <input type="hidden" name="Registrar" id="Registrar">
        <button type="submit">Registrar</button>
    </form>
</body>
</html>