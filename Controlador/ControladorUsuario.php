<?php
require_once("../Modelo/Conexion.php");
require_once("../Modelo/Usuario.php"); //Incluir el modelo Usuario
require_once("../Modelo/CrudUsuario.php");


$Usuario = new Usuario(); //Crear un objeto vacio de la clase Usuario
$CrudUsuario = new CrudUsuario();

if(isset($_POST["Acceder"])){ //Validar que se realizó la petición de Acceder
    $Usuario->setCorreoElectronico($_POST["NombreUsuario"]); //Asignar valor a atributo NombreUsuario
    $Usuario->setContrasena($_POST["Contrasena"]); //Asignar valor a atributo Contraseña
    //var_dump($Usuario);
    $Usuario = $CrudUsuario->ValidarAcceso($Usuario);
    //var_dump($Usuario);
    if($Usuario->getExiste() == 1){
        session_start(); //Inicializar sesiones
        //Definir las variables de sesión a emplear en el aplicativo
        $_SESSION["NombreUsuario"] = $Usuario->getNombres()." ".$Usuario->getApellidos();
        $_SESSION["IdUsuario"] = $Usuario->getIdUsuario();
        $_SESSION["IdRol"] = $Usuario->getIdRol();
        header("Location:../Menu.php");
    }
    else
    {
        ?>
        <script>
            alert("Usuario y/o clave incorrectos");
           // document.location.href = "../../Index.php";
        </script>
    <?php
    }
}
else if(isset($_POST["Registrar"])){
    echo "Registrar";
    $Usuario->setNumeroDocumento($_POST["numerodocumento"]); //Instanciar el atributo
    $Usuario->setCorreoElectronico($_POST["correoelectronico"]); //Instanciar el atributo
    $Usuario->setNombres($_POST["nombres"]); //Instanciar el atributo
    $Usuario->setApellidos($_POST["apellidos"]); //Instanciar el atributo
    $Usuario->setIdRol($_POST["rol"]); //Instanciar el atributo
    $Usuario->setIdEstado($_POST["estado"]); //Instanciar el atributo
    $CrudUsuario::RegistrarUsuario($Usuario); // Llamar el método para Insertar
    header("Location:../Vista/Index.php");
}
else if(isset($_POST["Editar"])){
    header("Location:../Vista/Editar.php");
}
else if(isset($_POST["Actualizar"])){
    echo "Actualizar";
    header("Location:../Vista/Index.php");
}
else if(isset($_POST["GuardarCambios"])){
    echo "GuardarCambios";
    $Usuario->setIdUsuario($_POST["IdUsuario"]); //Instanciar el atributo
    $Usuario->setNumeroDocumento($_POST["numerodocumento"]); //Instanciar el atributo
    $Usuario->setCorreoElectronico($_POST["correoelectronico"]); //Instanciar el atributo
    $Usuario->setNombres($_POST["nombres"]); //Instanciar el atributo
    $Usuario->setApellidos($_POST["apellidos"]); //Instanciar el atributo
    $Usuario->setIdRol($_POST["rol"]); //Instanciar el atributo
    $Usuario->setIdEstado($_POST["estado"]); //Instanciar el atributo
    $CrudUsuario::ActualizarUsuario($Usuario); // Llamar el método para Insertar
    header("Location:../Vista/Index.php");
}
else //En caso contrario envío al Login
{
    //header("Location:../../Index.php");
}

/*
$Competencia = new Competencia(); //Crear el objeto Competencia
$CrudCompetencia = new CrudCompetencia();
if(isset($_POST["Registrar"])) //Si la petición es de Registrar
{
    echo "Registrar";
    $Competencia->setCodigoCompetencia($_POST["CodigoCompetencia"]); //Instanciar el atributo
    $Competencia->setNombreCompetencia($_POST["NombreCompetencia"]); //Instanciar el atributo
    echo $Competencia->getNombreCompetencia(); //Verificar instanciación
    $CrudCompetencia::InsertarCompetencia($Competencia); // Llamar el método para Insertar
}
elseif(isset($_POST["Modificar"])) //Si la petición es de Modificar
{
    echo "Modificar";
    $Competencia->setCodigoCompetencia($_POST["CodigoCompetencia"]); //Instanciar el atributo
    $Competencia->setNombreCompetencia($_POST["NombreCompetencia"]); //Instanciar el atributo
    echo $Competencia->getNombreCompetencia(); //Verificar instanciación
    $CrudCompetencia::ModificarCompetencia($Competencia); // Llamar el método para Modificar
}
elseif($_GET["Accion"]=="EliminarCompetencia"){
    $CrudCompetencia::EliminarCompetencia($_GET["CodigoCompetencia"]); // Llamar el método para Modificar
}
*/

?>