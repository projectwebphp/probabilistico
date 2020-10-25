<?php
/*
require_once('../../Conexion.php');
require_once('../Modelo/Usuario.php');
require_once('../Modelo/CrudUsuario.php');
*/

require_once('../Modelo/Conexion.php');
require_once('../Modelo/Rol.php');
require_once('../Modelo/CrudRol.php');

$CrudRol = new CrudRol(); //Crear un Objeto CrudCompetencia
$Rol = $CrudRol->BuscarRol($_GET["IdRol"]);
$CrudMenu = new CrudMenu(); //Crear de un objeto CrudUsuario
$ListaMenus = $CrudMenu->ListarMenus(); //Llamado al método ListarMenu


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
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                    <th>Id</th>
                    <th>Menu</th>
                    <th>Estado</th>
                    <th>Asignar</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php foreach($ListaMenus as $Menu){ ?>
                            <tr>
                                <td><?php echo $Menu->getIdMenu() ?></td>
                                <td><?php echo $Menu->getNombreMenu() ?></td>
                                <td><?php echo $Menu->getIdEstado() ?></td>
                                <td>
                                    <input type="checkbox" onclick="asignarMenu(<?php echo $Menu->getIdMenu() ?>,<?php echo $_GET['IdRol'] ?>,this.checked)"
                                    <?php
                                    if($CrudRol->BuscarPermiso( $_GET['IdRol'] ,$Menu->getIdMenu())== 1)
                                    {
                                        ?>
                                        checked
                                        <?php
                                    }
                                    ?>
                                    />
                                    <!--
                                    <a href="MenuEntidad.php?EditarRol&IdMenu=<?php echo $Menu->getIdMenu() ?>" class="btn btn-warning">Editar</a>
                                    
                                    <a class="btn btn-danger" href="MenuEntidad.php?EliminarMenu&IdMenu=<?php echo $Menu->getIdMenu() ?>" >Eliminar</a>
                                    -->
                                </td>
                            </tr> 
                        <?php 
                        }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <th>Id Rol</th>
                    <th>Nombre Rol</th>
                    <th>Estado</th>
                    <th>Acción</th>
                    </tr>
                    </tfoot>
                </table>
        </div>
     
    </body>
</html>
