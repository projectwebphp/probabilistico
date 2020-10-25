<?php
class Permiso{
    //Atributos de la clase(Parámetros de Entrada)
    private $IdPermiso;
    private $IdRol;
    private $IdMenu;
 
    public function __construct(){
    }

    public function setIdMenu($IdMenu){
        $this->IdMenu = $IdMenu; 
    }

    public function getIdMenu(){
        return $this->IdMenu;
    }

    public function setIdRol($IdRol){
        $this->IdRol = $IdRol; 
    }

    public function getIdRol(){
        return $this->IdRol;
    }
}
?>