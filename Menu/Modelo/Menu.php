<?php
class Menu{
    //Atributos de la clase(Parámetros de Entrada)
    private $IdMenu;
    private $NombreMenu;
    private $LinkMenu;
    private $IdEstado;
 
    public function __construct(){
    }

    public function setIdMenu($IdMenu){
        $this->IdMenu = $IdMenu; 
    }

    public function getIdMenu(){
        return $this->IdMenu;
    }

    public function setNombreMenu($NombreMenu){
        $this->NombreMenu = $NombreMenu; 
    }

    public function getNombreMenu(){
        return $this->NombreMenu;
    }

    public function setLinkMenu($LinkMenu){
        $this->LinkMenu = $LinkMenu; 
    }

    public function getLinkMenu(){
        return $this->LinkMenu;
    }

    public function setIdEstado($IdEstado){
        $this->IdEstado = $IdEstado; 
    }

    public function getIdEstado(){
        return $this->IdEstado;
    }
}
?>