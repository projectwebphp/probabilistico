<?php
session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la sesión no existe redireccionar al login
    header("Location:../../Index.php");
}

require_once("../../Conexion.php");
require_once('../Modelo/Documento.php'); //Vincular la Clase Competencia
require_once('../Modelo/CrudDocumento.php'); //Vincular la Clase Crud

$Documento = new Documento(); //Crear el objeto Competencia
$CrudDocumento = new CrudDocumento();
if(isset($_POST["Registrar"])) //Si la petición es de Registrar
{
    echo "Registrar";
    //$Documento->setCodigoDocumento($_POST["CodigoDocumento"]); //Instanciar el atributo
    $Documento->setNombreDocumento($_POST["NombreDocumento"]); //Instanciar el atributo
    $Documento->setRutaDocumento($_POST["RutaDocumento"]); //Instanciar el atributo
    $Documento->setPalabrasClaveDocumento($_POST["setPalabrasClaveDocumento"]); //Instanciar el atributo
    //echo $Documento->getNombreDocumento(); //Verificar instanciación
    $CrudDocumento::RegistrarDocumento($Documento); // Llamar el método para Insertar
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

?>