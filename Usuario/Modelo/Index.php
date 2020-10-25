<?php
session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la sesión no existe redireccionar al login
    header("Location:../Index.php");
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
    <h1 align="center">Administrar Competencias</h1>
    <table align="center">
        <thead>
            <tr>
                <td><a href="Vista/IngresarCompetencia.php">Ingresar</a></td>
                <td><a href="Vista/ListarCompetencias.php">Listar</a></td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</body>
</html>