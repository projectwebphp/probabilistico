<?php
require_once("../../Conexion.php");
require_once("../Modelo/Usuario.php"); //Incluir el modelo Usuario
require_once("../Modelo/CrudUsuario.php");

$CrudUsuario = new CrudUsuario(); //Crear de un objeto CrudUsuario
$ListaUsuarios = $CrudUsuario->ListarUsuarios(); //Llamado al método ListarUsuario


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gestionar Empleados</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container mt-4">
            <div class="card border-info">
                <div class="card-header bg-info text-white">
                    <a href="Agregar.php" class="btn btn-primary">Agregar Nuevo Cliente</a>
                </div>
                <input class="form-control" id="myInput" type="text" placeholder="Buscar..">

            </div>
            <div class="card-bordy">
                <table class="table table-hover">
                    <thead>
                    <th>Codigo</th>
                    <th>Documento</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo Electrónico</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    </thead>
                    <tbody id="myTable">
                        <?php foreach($ListaUsuarios as $Usuario){ ?>
                            <tr>
                                <td><?php echo $Usuario->getCodigoUsuario() ?></td>
                                <td><?php echo $Usuario->getDocumento() ?></td>
                                <td><?php echo $Usuario->getNombres() ?></td>
                                <td><?php echo $Usuario->getApellidos() ?></td>
                                <td><?php echo $Usuario->getCorreoElectronico() ?></td>
                                <td><?php echo $Usuario->getCodigoRol() ?></td>
                                <td><?php echo $Usuario->getCodigoEstado() ?></td>
                                <td>
                                    <a href="Editar.php?CodigoUsuario=<?php echo $Usuario->getCodigoUsuario() ?>" class="btn btn-warning">Editar</a>
                                    <a href="Eliminar.php?CodigoUsuario=<?php echo $Usuario->getCodigoUsuario() ?>" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr> 
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



</html>
