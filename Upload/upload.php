<?php
if (is_array($_FILES) && count($_FILES) > 0) {
    if (/*($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "archivo/png")
        || ($_FILES["file"]["type"] == "archivo/gif")*/
        ($_FILES["file"]["type"] == "application/pdf")
        ) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "../Repositorio/".$_POST["nombreDirectorioCargar"]."/".$_FILES['file']['name'])) {
        //if (move_uploaded_file($_FILES["file"]["tmp_name"], "archivos/".$_FILES['file']['name'])) {
            //more code here...
            require_once("../Conexion.php");
            require_once('../Documento/Modelo/Documento.php'); //Vincular la Clase Competencia
            require_once('../Documento/Modelo/CrudDocumento.php'); //Vincular la Clase Crud

            $Documento = new Documento(); //Crear el objeto Competencia
            $CrudDocumento = new CrudDocumento();
            //if(isset($_POST["Registrar"])) //Si la petición es de Registrar
            {
                //echo "Registrar";
                //$Documento->setCodigoDocumento($_POST["CodigoDocumento"]); //Instanciar el atributo
                $Documento->setNombreDocumento($_FILES['file']['name']); //Instanciar el atributo
                $Documento->setRutaDocumento("Repositorio/".$_POST["nombreDirectorioCargar"]."/".$_FILES['file']['name']); //Instanciar el atributo
                $Documento->setPalabrasClaveDocumento($_POST["PalabrasClaveDocumento"]); //Instanciar el atributo
                //echo $Documento->getNombreDocumento(); //Verificar instanciación
                $CrudDocumento->RegistrarDocumento($Documento); // Llamar el método para Insertar
            }
            echo "Repositorio/".$_POST["nombreDirectorioCargar"]."/".$_FILES['file']['name'];
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
} else {
    echo 0;
}