<?php
/*
require_once('../../Conexion.php');
require_once('../Modelo/Usuario.php');
require_once('../Modelo/CrudUsuario.php');
*/

require_once('Conexion.php');
require_once('Rol/Modelo/Rol.php');
require_once('Rol/Modelo/CrudRol.php');

$CrudRol = new CrudRol(); //Crear un Objeto CrudCompetencia
$Rol = $CrudRol->BuscarRol($_GET["IdRol"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Editar Rol</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4 col-lg-4">
               <h2>Editar Rol</h2>
        </div>
        <div class="card-body">
            <form  name="frmRol" method="POST" action="MenuEntidad.php">
                <input type="text" name="idrol" id="idrol" class="form-control" value="<?php echo $Rol->getIdRol(); ?>">
                <label>Nombre Rol</label>
                <input type="text" name="nombrerol" id="nombrerol" class="form-control" value="<?php echo $Rol->getNombreRol(); ?>">
                <label>Estado</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="">Seleccione el rol</option>
                    <option value="1" <?php if($Rol->getIdEstado() == 1){ ?> selected <?php } ?>>Activo</option>
                    <option value="2" <?php if($Rol->getIdEstado() == 2){ ?> selected <?php } ?>>Inactivo</option>
                </select>
                <button type="submit" name="GuardarRol" class="btn btn-success">Actualizar</button>
            </form>
        </div>
     
    </body>
</html>
