<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Agregar Cliente</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4 col-lg-4">
               <h2>Registrar Cliente</h2>
        </div>
        <div class="card-body">
            <form  name="frmCliente" method="POST" action="MenuEntidad.php">
                <label>Documento:</label>
                <input type="text" name="numerodocumento" id="numerodocumento" class="form-control">
                 <label>Nombres</label>
                <input type="text" name="nombres" id="nombre" class="form-control">
                <label>Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control">
                <label>Correo Electrónico</label>
                <input type="text" name="correoelectronico" id="correoelectronico" class="form-control">
                <label>Rol</label>
                <select name="rol" id="rol" class="form-control">
                    <option value="">Seleccione el rol</option>
                    <option value="1">Administrador</option>
                    <option value="2">Asesor</option>
                </select>
                <label>Estado</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="">Seleccione el estado</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
                <button type="submit" name="RegistrarUsuario" class="btn btn-success">Registrar</button>
            </form>
        </div>
     
    </body>
</html>
