<?php
    //require_once('../Conexion.php');
    class CrudDocumento{
    
        public function __construct(){
        }

        public function RegistrarDocumento($Documento){
            $Db = Db::Conectar(); //Conectar a la base de datos
            //Definir la inserción a realizar.
            $Sql = $Db->prepare('INSERT INTO documentos VALUES(NULL,:NombreDocumento,
            :RutaDocumento,:PalabrasClaveDocumento)'); 
           // $Sql->bindValue('CodigoDocumento',$Documento->getCodigoCompetencia());
            $Sql->bindValue('NombreDocumento',($Documento->getNombreDocumento()));
            $Sql->bindValue('RutaDocumento',($Documento->getRutaDocumento()));
            $Sql->bindValue('PalabrasClaveDocumento',($Documento->getPalabrasClaveDocumento()));
            try{
                $Sql->execute(); //Ejecutar el Insert
                //echo "Registro Exitoso";
            }
            catch(Exception $e){ //Capturar Errores
                echo $e->getMessage(); //Mostar errores en la inserción
                die();
            }
        }

        public function ModificarCompetencia($Competencia){
            $Db = Db::Conectar(); //Conectar a la base de datos
            //Definir la modificación a realizar.
            $Sql = $Db->prepare('UPDATE competencias SET NombreCompetencia=:NombreCompetencia
            WHERE CodigoCompetencia=:CodigoCompetencia'); 
            $Sql->bindValue('CodigoCompetencia',$Competencia->getCodigoCompetencia());
            $Sql->bindValue('NombreCompetencia',$Competencia->getNombreCompetencia());
            try{
                $Sql->execute(); //Ejecutar el Sql que un Update
                echo "Modificación Exitosa";
            }
            catch(Exception $e){ //Capturar Errores
                echo $e->getMessage(); //Mostar errores en la modificación
                die();
            }
        }


        public function EliminarCompetencia($CodigoCompetencia){
            $Db = Db::Conectar(); //Conectar a la base de datos
            //Definir la modificación a realizar.
            $Sql = $Db->prepare('DELETE FROM competencias WHERE CodigoCompetencia=:CodigoCompetencia'); 
            $Sql->bindValue('CodigoCompetencia',$CodigoCompetencia);
            $CodigoCompetencia = 23;
            try{
                $Sql->execute(); //Ejecutar el Sql que contiene el Delete
                echo "Eliminación Exitosa";
            }
            catch(Exception $e){ //Capturar Errores
                echo $e->getMessage(); //Mostar errores en la modificación
                die();
            }
        }

        //Listar todos los registros de la tabla
        public function ListarDocumentos($buscar){
            $Db = Db::Conectar();
            $ListaDocumentos = [];
            $Sql = $Db->query("SELECT * FROM documentos WHERE NombreDocumento LIKE '%$buscar%' OR PalabrasClaveDocumento LIKE '%$buscar%'");
            $Sql->execute();
             foreach($Sql->fetchAll() as $Documento){
                $MyDocumento = new Documento();
                //echo $Competencia['CodigoCompetencia']."----".$Competencia['NombreCompetencia'];
                $MyDocumento->setCodigoDocumento($Documento['CodigoDocumento']);
                $MyDocumento->setNombreDocumento($Documento['NombreDocumento']);
                $MyDocumento->setRutaDocumento($Documento['RutaDocumento']);
                $MyDocumento->setPalabrasClaveDocumento($Documento['PalabrasClaveDocumento']);
                $ListaDocumentos[] = $MyDocumento;
            }
            return $ListaDocumentos;
        }

        public function ObtenerDocumento($Palabra){ //Código para obtener una Competecia
            $Db = Db::Conectar();
            $Sql = $Db->prepare('SELECT * FROM documentos WHERE NombreDocumento=:NombreDocumento');
            $Sql->bindValue('NombreDocumento',$NombreDocumento);
            $MyDocumento = new Documento();//Crear un objeto de tipo competencia
            try{
                $Sql->execute(); //Ejecutar el Update
                $Documento = $Sql->fetch(); //Se almacena en la variable $Documento los datos de la variable $Sql
                $MyDocumento->setCodigoCompetencia($Competencia['CodigoCompetencia']);
                $MyCompetMyDocumento->setNombreCompetencia($Competencia['NombreCompetencia']);

            }
            catch(Exception $e){ //Capturar Errores
                echo $e->getMessage(); //Mostar errores en la modificiación
                die();
            }
            return $MyCompetencia;
        }

    }


//$Crud = new CrudCompetencia();
//$Crud->ListarCompetencias();


?>