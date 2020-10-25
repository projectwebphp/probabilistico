<?php
class CrudPersonalFuerza{
    public function __construct(){}

     //Listar todos los registros de la tabla
     public function ListarPersonalFuerza(){
        $Db = Db::Conectar();
        $Lista = [];
        $Sql = $Db->query('SELECT * from personalfuerza');
        $Sql->execute();
        /*foreach($Sql->fetchAll() as $PersonalFuerza){
            $PF = new PersonalFuerza();
            $PF->setIdPersonalFuerza($PersonalFuerza['IdPersonalFuerza']);
            $PF->setIdEntidad($PersonalFuerza['IdEntidad']);
            $PF->setAnio($PersonalFuerza['Anio']);
            $PF->setRango($PersonalFuerza['Rango']);
            $PF->setPersonal($PersonalFuerza['Personal']);
            $Lista[] = $PF;
        }
        */
        return $Sql->fetchAll();
    }

    public function RegistrarPersonalFuerza($PersonalFuerza){
        $Db = Db::Conectar(); //Conectar a la base de datos
        //Definir la inserción a realizar.
        $Sql = $Db->prepare('INSERT INTO personalfuerza(
            IdEntidad,Anio,Rango,Personal) VALUES(:IdEntidad,:Anio,
        :Rango,:PersonalFuerza)'); 
        $Sql->bindValue('IdEntidad',$PersonalFuerza->getIdEntidad());
        $Sql->bindValue('Anio',$PersonalFuerza->getAnio());
        $Sql->bindValue('Rango',$PersonalFuerza->getRango());
        $Sql->bindValue('Personal',$PersonalFuerza->getPersonal());
        
        try{
            $Sql->execute(); //Ejecutar el Insert
            echo "Registro Exitoso";
        }
        catch(Exception $e){ //Capturar Errores
            echo $e->getMessage(); //Mostar errores en la inserción
            die();
        }
    }

    public function BuscarPersonalFuerza($PersonalFuerza){ //Código para obtener una Competecia
        $Db = Db::Conectar();
        $Sql = $Db->prepare('SELECT * FROM personalfuerza
        WHERE IdPersonalFuerza=:IdPersonalFuerza');
        $Sql->bindValue('IdPersonalFuerza',$IdPersonalFuerza);
        $PF = new PersonalFuerzaUsuario();//Crear un objeto de tipo competencia
        try{
            $Sql->execute(); //Ejecutar el Update
            $PersonalFuerzaUsuario = $Sql->fetch(); //Se almacena en la variable $Competencia los datos de la variable $Sql
            $PF->setIdEntidad($PersonalFuerzaUsuario['IdEntidad']);
            $PF->setAnio($PersonalFuerza['Anio']);
            $PF->setRango($Usuario['Rango']);
            $PF->setPersonal($Usuario['Personal']);
        }
        catch(Exception $e){ //Capturar Errores
            echo $e->getMessage(); //Mostar errores en la modificiación
            die();
        }
        return $PF;
    }

    public function ActualizarPersonaFuerza($PersonalFuerza){
        $Db = Db::Conectar(); //Conectar a la base de datos
        //Definir la modificación a realizar.
        $Sql = $Db->prepare('UPDATE personalfuerza SET Personal=:Personal
        WHERE IdPersonalFuerza:IdPersonalFuerza'); 
        $Sql->bindValue('Personal',$PersonalFuerza->getPersonal());
        $Sql->bindValue('IdPersonalFuerza',$PersonalFuerza->getIdPersonalFuerza());
         try{
            $Sql->execute(); //Ejecutar el Sql que un Update
            $mensaje=1;
        }
        catch(Exception $e){ //Capturar Errores
            echo $e->getMessage(); //Mostar errores en la modificación
            //die();
            $mensaje=0;
        }

        return $mensaje;
    }

    public function EliminarPersonalFuerza($IdPersonalFuerza){
        $Db = Db::Conectar(); //Conectar a la base de datos
        //Definir la modificación a realizar.
        $Sql = $Db->prepare('DELETE FROM personalfuerza WHERE IdPersonalFuerza=:IdPersonalFuerza'); 
        $Sql->bindValue('IdPersonalFuerza',$IdPersonalFuerza);
        try{
            $Sql->execute(); //Ejecutar el Sql que contiene el Delete
            $mensaje=1;
        }
        catch(Exception $e){ //Capturar Errores
            //echo $e->getMessage(); //Mostar errores en la modificación
            //die();
            $mensaje=0;
        }
        return $mensaje;
    }

    /*
public function InsertarCompetencia($Competencia){
            $Db = Db::Conectar(); //Conectar a la base de datos
            //Definir la inserción a realizar.
            $Insert = $Db->prepare('INSERT INTO competencias VALUES(:CodigoCompetencia,:NombreCompetencia)'); 
            $Insert->bindValue('CodigoCompetencia',$Competencia->getCodigoCompetencia());
            $Insert->bindValue('NombreCompetencia',$Competencia->getNombreCompetencia());
            try{
                $Insert->execute(); //Ejecutar el Insert
                echo "Registro Exitoso";
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
        */


}
?>