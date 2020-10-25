<?php
session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la sesión no existe redireccionar al login
    header("Location:../../Index.php");
}
require_once('../../Conexion.php'); 
require_once('../Modelo/CrudCompetencia.php'); //Inlcuir el modelo CrudCompetencia
require_once('../Modelo/Competencia.php');

$CrudCompetencia = new CrudCompetencia(); //Crear de un objeto CrudCompetencia
$ListaCompetencias = $CrudCompetencia->ListarCompetencias(); //Llamado al método ListarCompetencia
//var_dump($ListaCompetencias);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Listado de Competencias</h1>
    <a href="../TCPDF/examples/reportepdfcompetencias.php">Reporte Pdf</a>
    <table align="center" border="1">
        <thead>
        <tr>
            <th>Código Competencia</th>
            <th>Nombre Competencia</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <tbody>
        <?php
            foreach($ListaCompetencias as $Competencia){
                ?>
                <tr>
                    <td><?php echo $Competencia->getCodigoCompetencia(); ?></td>
                    <td><?php echo $Competencia->getNombreCompetencia(); ?></td>
                    <td>
                    <a href="EditarCompetencia.php?CodigoCompetencia=<?php echo $Competencia->getCodigoCompetencia(); ?>">Editar</a> 
                    <a href="../Controlador/ControladorCompetencia.php?CodigoCompetencia=<?php echo $Competencia->getCodigoCompetencia(); ?>&Accion=EliminarCompetencia">Eliminar</a></td>
                </tr>
                <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>