<?php
class CrudContingenciasMilitaresActivosMDN{
    public function __construct(){}

    public function ValidarAcceso($Usuario){
        $Db = Db::Conectar();
        $Sql = $Db->prepare("SELECT * FROM usuario WHERE CorreoElectronico=:CorreoElectronico AND
        Contrasena=:Contrasena AND IdEstado=1");
        $Sql->bindValue('CorreoElectronico',$Usuario->getCorreoElectronico());
        $Sql->bindValue('Contrasena',md5($Usuario->getContrasena()));
        $Sql->execute(); //Ejecutar la consulta
        $MiUsuario = new Usuario();
        if($Sql->rowCount() > 0){ // rowCount: Determinar el número de registros arrojados por la consulta
            $DatosUsuario = $Sql->fetch(); //Almacenar los datos arrojados por la consulta
            $MiUsuario->setIdUsuario($DatosUsuario['IdUsuario']);
            $MiUsuario->setCorreoElectronico($DatosUsuario['CorreoElectronico']);
            $MiUsuario->setIdRol($DatosUsuario['IdRol']);
            $MiUsuario->setExiste(1);  //Asignar al atributo 
        }
        else{
            $MiUsuario->setExiste(0);
        }
        return $MiUsuario;
    }

     //Listar todos los registros de la tabla
     public function ListarContingenciasMilitaresActivosMDN(){
        $Db = Db::Conectar();
        $Listacontingencia = [];
        $Sql = $Db->query('SELECT *
        FROM contingenciasmilitaresactivosmdn');
        $Sql->execute();

        foreach($Sql->fetchAll() as $Contingenciasmilitaresactivosmdn){
            $O = new Contingenciasmilitaresactivosmdn();
            $O->setIdcontingencia($Contingenciasmilitaresactivosmdn['idcontingencia']);
            $O->setIdgrupopersonalMDN($Contingenciasmilitaresactivosmdn['idgrupopersonalMDN']);
            $O->setAnio($Contingenciasmilitaresactivosmdn['anio']);
            $O->setTotalpartidas($Contingenciasmilitaresactivosmdn['totalpartidas']);
            $O->setPersonasinvalidez($Contingenciasmilitaresactivosmdn['personasinvalidez']);
            $O->setPorcentajeinvalidez($Contingenciasmilitaresactivosmdn['porcentajeinvalidez']);
            $O->setValorinvalidez($Contingenciasmilitaresactivosmdn['valorinvalidez']);
            $O->setReservainvalidez($Contingenciasmilitaresactivosmdn['reservainvalidez']);
            $O->setPersonasfallecimiento($Contingenciasmilitaresactivosmdn['personasfallecimiento']);
            $O->setPorcentajefallecimiento($Contingenciasmilitaresactivosmdn['porcentajefallecimiento']);
            $O->setValorfallecimiento($Contingenciasmilitaresactivosmdn['valorfallecimiento']);
            $O->setReservafallecimiento($Contingenciasmilitaresactivosmdn['reservafallecimiento']);
            $O->setCantidaddesvinculacion($Contingenciasmilitaresactivosmdn['cantidaddesvinculacion']);
            $O->setPorcentajedesvinculacion($Contingenciasmilitaresactivosmdn['porcentajedesvinculacion']);
            $O->setValordesvinculacion($Contingenciasmilitaresactivosmdn['valordesvinculacion']);
            $O->setReservadesvinculacion($Contingenciasmilitaresactivosmdn['reservadesvinculacion']);
            $O->setCantidadretiro($Contingenciasmilitaresactivosmdn['cantidadretiro']);
            $O->setPorcentajeretiro($Contingenciasmilitaresactivosmdn['porcentajeretiro']);
            $O->setValorretiro($Contingenciasmilitaresactivosmdn['valorretiro']);
            $O->setReservaretiro($Contingenciasmilitaresactivosmdn['reservaretiro']);
            $O->setTotalpersonas($Contingenciasmilitaresactivosmdn['totalpersonas']);

            $Listausuario[] = $O;
        }
        return $Listacontingencia;
    }

    public function RegistrarUsuario($Usuario){
        $Db = Db::Conectar(); //Conectar a la base de datos
        //Definir la inserción a realizar.
        $Sql = $Db->prepare('INSERT INTO usuario(
            NumeroDocumento,CorreoElectronico,Nombres,Apellidos,Contrasena,
            IdRol,IdEstado) VALUES(:NumeroDocumento,:CorreoElectronico,
        :Nombres,:Apellidos,:Contrasena,:IdRol,:IdEstado)'); 
        $Sql->bindValue('NumeroDocumento',$Usuario->getNumeroDocumento());
        $Sql->bindValue('CorreoElectronico',$Usuario->getCorreoElectronico());
        $Sql->bindValue('Nombres',$Usuario->getNombres());
        $Sql->bindValue('Apellidos',$Usuario->getApellidos());
        $Sql->bindValue('Contrasena',md5($Usuario->getNumeroDocumento()));
        $Sql->bindValue('IdRol',$Usuario->getIdRol());
        $Sql->bindValue('IdEstado',$Usuario->getIdEstado());
       
        try{
            $Sql->execute(); //Ejecutar el Insert
            echo "Registro Exitoso";
        }
        catch(Exception $e){ //Capturar Errores
            echo $e->getMessage(); //Mostar errores en la inserción
            die();
        }
    }

    public function BuscarUsuario($IdUsuario){ //Código para obtener una Competecia
        $Db = Db::Conectar();
        $Sql = $Db->prepare('SELECT usuario.*,rol.NombreRol,estado.NombreEstado
        FROM usuario 
        INNER JOIN rol ON usuario.IdRol=rol.IdRol
        INNER JOIN estado ON usuario.IdEstado=estado.IdEstado
        WHERE IdUsuario=:IdUsuario');
        $Sql->bindValue('IdUsuario',$IdUsuario);
        $U = new Usuario();//Crear un objeto de tipo competencia
        try{
            $Sql->execute(); //Ejecutar el Update
            $Usuario = $Sql->fetch(); //Se almacena en la variable $Competencia los datos de la variable $Sql
            $U->setIdUsuario($Usuario['IdUsuario']);
            $U->setCorreoElectronico($Usuario['CorreoElectronico']);
            $U->setNumeroDocumento($Usuario['NumeroDocumento']);
            $U->setNombres($Usuario['Nombres']);
            $U->setApellidos($Usuario['Apellidos']);
            $U->setIdRol($Usuario['IdRol']);
            $U->setNombreRol($Usuario['NombreRol']);
            $U->setIdEstado($Usuario['IdEstado']);
            $U->setNombreEstado($Usuario['NombreEstado']);


        }
        catch(Exception $e){ //Capturar Errores
            echo $e->getMessage(); //Mostar errores en la modificiación
            die();
        }
        return $U;
    }

    public function ActualizarUsuario($Usuario){
        $Db = Db::Conectar(); //Conectar a la base de datos
        //Definir la modificación a realizar.
        $Sql = $Db->prepare('UPDATE usuario SET Nombres=:Nombres,
        Apellidos=:Apellidos,CorreoElectronico=:CorreoElectronico,
        IdRol=:IdRol,
        IdEstado=:IdEstado
        WHERE IdUsuario=:IdUsuario'); 
        $Sql->bindValue('Nombres',$Usuario->getNombres());
        $Sql->bindValue('Apellidos',$Usuario->getApellidos());
        $Sql->bindValue('CorreoElectronico',$Usuario->getCorreoElectronico());
        $Sql->bindValue('IdRol',$Usuario->getIdRol());
        $Sql->bindValue('IdEstado',$Usuario->getIdEstado());
        $Sql->bindValue('IdUsuario',$Usuario->getIdUsuario());
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

    public function EliminarUsuario($IdUsuario){
        $Db = Db::Conectar(); //Conectar a la base de datos
        //Definir la modificación a realizar.
        $Sql = $Db->prepare('DELETE FROM usuario WHERE IdUsuario=:IdUsuario'); 
        $Sql->bindValue('IdUsuario',$IdUsuario);
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