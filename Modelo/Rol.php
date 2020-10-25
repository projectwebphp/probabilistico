<?php
class Rol{
    //Atributos de la clase(Parámetros de Entrada)
    private $IdRol;
    private $NombreRol;
    private $IdEstado;
 
    public function __construct(){
    }

    public function setIdRol($IdRol){
        $this->IdRol = $IdRol; 
    }

    public function getIdRol(){
        return $this->IdRol;
    }

    public function setNombreRol($NombreRol){
        $this->NombreRol = $NombreRol; 
    }

    public function getNombreRol(){
        return $this->NombreRol;
    }

    public function setIdEstado($IdEstado){
        $this->IdEstado = $IdEstado; 
    }

    public function getIdEstado(){
        return $this->IdEstado;
    }
}
?>