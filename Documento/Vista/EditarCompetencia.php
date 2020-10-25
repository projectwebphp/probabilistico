<?php
session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la sesión no existe redireccionar al login
    header("Location:../../Index.php");
}

require_once('../Modelo/Competencia.php');
require_once('../Modelo/CrudCompetencia.php');

$CrudCompetencia = new CrudCompetencia(); //Crear un Objeto CrudCompetencia
$Competencia = $CrudCompetencia::ObtenerCompetencia($_GET["CodigoCompetencia"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h1 align="center">Competencia</h1>
    <form action="../Controlador/ControladorCompetencia.php" method="post">
        Código Competencia: <input type="text" name="CodigoCompetencia" id="CodigoCompetencia" 
        value="<?php echo $Competencia->getCodigoCompetencia(); ?>">
        <br>
        Nombre Competencia: <input type="text" name="NombreCompetencia" id="NombreCompetencia"
        value="<?php echo $Competencia->getNombreCompetencia(); ?>">
        <br>
        <input type="hidden" name="Modificar" id="Modificar">
        <button type="submit">Modificar</button>
    </form>
</body>
</html>