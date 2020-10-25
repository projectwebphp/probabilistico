<?php
 require_once("../Modelo/Conexion.php");
 require_once("../Modelo/Usuario.php"); //Incluir el modelo Usuario
 require_once("../Modelo/CrudUsuario.php");
 require_once("../Modelo/Rol.php"); //Incluir el modelo Usuario
 require_once("../Modelo/CrudRol.php");
 require_once("../Menu/Modelo/Menu.php"); //Incluir el modelo Usuario
 require_once("../Menu/Modelo/CrudMenu.php");
 require_once("../Modelo/Permiso.php");
 require_once("../Modelo/PersonalFuerza.php"); //Incluir el modelo Usuario
 require_once("../Modelo/CRUDPErsonalFuerza.php");
 require_once("../Modelo/Contingenciasmilitaresactivosmdn.php"); //Incluir el modelo Usuario
 require_once("../Modelo/CrudContingenciasmilitaresactivosmdn.php");

 $Usuario = new Usuario(); //Crear un objeto vacio de la clase Rol
 $CrudUsuario = new CrudUsuario();

 $Rol = new Rol(); //Crear un objeto vacio de la clase Rol
 $CrudRol = new CrudRol();

 $Menu = new Menu(); //Crear un objeto vacio de la clase Rol
 $CrudMenu = new CrudMenu();

 $Contingenciasmilitaresactivosmdn = new Contingenciasmilitaresactivosmdn(); //Crear un objeto vacio de la clase Rol
 $CrudContingenciasMilitaresActivosMDN = new CrudContingenciasMilitaresActivosMDN();

 

 class Controlador{

    public function __construct(){}

    public function ListarMenus(){
        $CrudMenu = new CrudMenu(); //Crear de un objeto CrudUsuario
        return $CrudMenu->ListarMenus(); //Llamado al método ListarUsuario
    }

    public function AsignarPermiso(){
        $CrudMenu = new CrudMenu(); //Crear de un objeto CrudUsuario
        //return $CrudMenu->ListarMenus(); //Llamado al método ListarUsuario
        $Permiso = new Permiso();
        $Rol = new Rol(); //Crear un objeto vacio de la clase Rol
        $CrudRol = new CrudRol();
        $Permiso->setIdMenu($_POST["idMenu"]); //Instanciar el atributo
        $Permiso->setIdRol($_POST["idRol"]); //Instanciar el atributo
        //$Permiso->setIdEstado($_POST["IdEstado"]); //Instanciar el atributo
        return $CrudRol->RegistrarPermiso($Permiso);
    }

    public function EliminarPermiso(){
        $CrudMenu = new CrudMenu(); //Crear de un objeto CrudUsuario
        //return $CrudMenu->ListarMenus(); //Llamado al método ListarUsuario
        $Permiso = new Permiso();
        $Rol = new Rol(); //Crear un objeto vacio de la clase Rol
        $CrudRol = new CrudRol();
        $Permiso->setIdMenu($_POST["idMenu"]); //Instanciar el atributo
        $Permiso->setIdRol($_POST["idRol"]); //Instanciar el atributo
        //$Permiso->setIdEstado($_POST["IdEstado"]); //Instanciar el atributo
        return $CrudRol->EliminarPermiso($Permiso);
    }

    public function ActualizarRol(){
        $CrudRol = new CrudRol(); //Crear de un objeto CrudUsuario
        //return $CrudMenu->ListarMenus(); //Llamado al método ListarUsuario
        $Rol = new Rol();
        $Rol->setIdRol($_POST["idrol"]); //Instanciar el atributo
        $Rol->setNombreRol($_POST["nombrerol"]); //Instanciar el atributo
        //$Permiso->setIdEstado($_POST["IdEstado"]); //Instanciar el atributo
        return $CrudRol->ActualizarRol($Rol);
    }


    public function DesplegarVista($ruta){
        require_once($ruta);
    }

    public function ListarUsuarios(){
        $CrudUsuario = new CrudUsuario(); //Crear de un objeto CrudUsuario
        return $CrudUsuario->ListarUsuarios(); //Llamado al método ListarUsuario
    }

    public function ListarPersonalFuerza(){
        $CrudPersonalFuerza = new CrudPersonalFuerza(); //Crear de un objeto CrudUsuario
        return json_encode($CrudPersonalFuerza->ListarPersonalFuerza()); //Llamado al método ListarUsuario
    }



    public function RegistrarUsuario(){
        $Usuario = new Usuario(); //Crear un objeto vacio de la clase Rol
        $CrudUsuario = new CrudUsuario();
        $Usuario->setNumeroDocumento($_POST["numerodocumento"]); //Instanciar el atributo
        $Usuario->setCorreoElectronico($_POST["correoelectronico"]); //Instanciar el atributo
        $Usuario->setNombres($_POST["nombres"]); //Instanciar el atributo
        $Usuario->setApellidos($_POST["apellidos"]); //Instanciar el atributo
        $Usuario->setIdRol($_POST["rol"]); //Instanciar el atributo
        $Usuario->setIdEstado($_POST["estado"]); //Instanciar el atributo
        $CrudUsuario->RegistrarUsuario($Usuario); // Llamar el método para Insertar
        require_once("../Vista/ListarUsuario.php");    
    }

    public function EditarUsuario(){
        $Usuario = new Usuario(); //Crear un objeto vacio de la clase Rol
        $CrudUsuario = new CrudUsuario();
        $Usuario->setIdUsuario($_POST["idusuario"]); //Instanciar el atributo
        $Usuario->setNumeroDocumento($_POST["numerodocumento"]); //Instanciar el atributo
        $Usuario->setCorreoElectronico($_POST["correoelectronico"]); //Instanciar el atributo
        $Usuario->setNombres($_POST["nombres"]); //Instanciar el atributo
        $Usuario->setApellidos($_POST["apellidos"]); //Instanciar el atributo
        $Usuario->setIdRol($_POST["rol"]); //Instanciar el atributo
        $Usuario->setIdEstado($_POST["estado"]); //Instanciar el atributo
        return $CrudUsuario->ActualizarUsuario($Usuario);
    }

    public function EliminarUsuario($IdUsuario){
        $CrudUsuario = new CrudUsuario();
        return $CrudUsuario->EliminarUsuario($IdUsuario);
    }
    
    public function ListarContingenciasMilitaresActivosMDN(){
        $CrudContingenciasMilitaresActivosMDN = new CrudContingenciasMilitaresActivosMDN(); //Crear de un objeto CrudUsuario
        return $CrudContingenciasMilitaresActivosMDN->ListarContingenciasMilitaresActivosMDN(); //Llamado al método ListarUsuario
    }
}

if(isset($_POST["buscar"])){
    $Controlador = new Controlador();
    echo $_POST["idEstado"];
    if($_POST["idEstado"]=="true")
    {
        echo $Controlador->AsignarPermiso($_POST["idMenu"],$_POST["idRol"],$_POST["idEstado"]);
    }
    else
    {
        echo $Controlador->EliminarPermiso($_POST["idMenu"],$_POST["idRol"],$_POST["idEstado"]);
       
    }
 }

?>