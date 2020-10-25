<?php
session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la sesión no existe redireccionar al login
    header("Location:../index.php");
}

require_once('../Conexion.php');
require_once('../Documento/Modelo/Documento.php');
require_once('../Documento/Modelo/CrudDocumento.php');


$CrudDocumento = new CrudDocumento();
$Documento = new Documento();
$ListaDocumentos = $CrudDocumento->ListarDocumentos($_POST["buscar"]); //Recibir datos de la consulta
//var_dump($ListaDocumentos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
    <td>
        <h1 align="center">Lista de Documentos</h1>
        <table align="center" border="1">
            <thead>
                <tr>
                    <th>Código Documento</th>
                    <th>Nombre Documento</th>
                    <th>Palabras Clave</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($ListaDocumentos as $Documento){
                ?>
                    <tr>
                        <td>
                            <?php echo $Documento->getCodigoDocumento(); ?>
                        </td>
                        <td>
                            <a href="#" onclick="desplegarpdf('<?php echo $Documento->getRutaDocumento(); ?>')"><?php echo $Documento->getNombreDocumento(); ?></a>
                        </td>
                        <td>
                            <?php echo $Documento->getPalabrasClaveDocumento(); ?>
                        </td>
                    
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </td>
    <td>
       <iframe class="card-img-top" src="" width="100%" height="300"></iframe>
    </td>
    </tr>
    </table>
</body>
</html>