<?php
/*
require_once('../../Conexion.php');
require_once('../Modelo/Usuario.php');
require_once('../Modelo/CrudUsuario.php');
*/

require_once('../Modelo/Conexion.php');
require_once('../Modelo/Usuario.php');
require_once('../Modelo/CrudUsuario.php');

$CrudUsuario = new CrudUsuario(); //Crear un Objeto CrudCompetencia
$Usuario = $CrudUsuario->BuscarUsuario($_GET["IdUsuario"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Editar ClienUduariote</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4 col-lg-4">
               <h2>Editar Usuario</h2>
        </div>
        <div class="card-body">
            <form  name="frmCliente" method="POST" action="MenuEntidad.php">
                <input type="text" name="idusuario" id="idusuario" class="form-control" value="<?php echo $Usuario->getIdUsuario(); ?>">
                <label>NumeroDocumento:</label>
                <input type="text" name="numerodocumento" id="numerodocumento" class="form-control" value="<?php echo $Usuario->getNumeroDocumento(); ?>">
                 <label>Nombres</label>
                <input type="text" name="nombres" id="nombre" class="form-control" value="<?php echo $Usuario->getNombres(); ?>">
                <label>Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $Usuario->getApellidos(); ?>">
                <label>Correo Electrónico</label>
                <input type="text" name="correoelectronico" id="correoelectronico" class="form-control" value="<?php echo $Usuario->getCorreoElectronico(); ?>">
                <label>Rol</label>
                <select name="rol" id="rol" class="form-control">
                    <option value="">Seleccione el estado</option>
                    <option value="1" <?php if($Usuario->getIdRol() == 1){ ?> selected <?php } ?>>Administrador</option>
                    <option value="2" <?php if($Usuario->getIdRol() == 2){ ?> selected <?php } ?>>Asesor</option>
                </select>                
                <label>Estado</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="">Seleccione el rol</option>
                    <option value="1" <?php if($Usuario->getIdEstado() == 1){ ?> selected <?php } ?>>Activo</option>
                    <option value="2" <?php if($Usuario->getIdEstado() == 2){ ?> selected <?php } ?>>Inactivo</option>
                </select>
                <button type="submit" name="GuardarCambios" class="btn btn-success">Actualizar</button>
            </form>
        </div>
     
    </body>
</html>
