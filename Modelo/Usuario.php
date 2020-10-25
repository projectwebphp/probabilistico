<?php
class Usuario{
    //Atributos de la clase(Parámetros de Entrada)
    private $IdUsuario;
    private $NumeroDocumento;
    private $CorreoElectronico;
    private $Nombres;
    private $Apellidos;
    private $Contrasena;
    private $IdRol;
    private $NombreRol;
    private $IdEstado;
    private $NombreEstado;
    private $Existe;//Para determinar si el Usuario existe o no existe en la tabla usuarios

    public function __construct(){
    }

    public function setIdUsuario($IdUsuario){
        $this->IdUsuario = $IdUsuario; 
    }

    public function getIdUsuario(){
        return $this->IdUsuario;
    }

    public function setNumeroDocumento($NumeroDocumento){
        $this->NumeroDocumento = $NumeroDocumento; 
    }

    public function getNumeroDocumento(){
        return $this->NumeroDocumento;
    }


    public function setCorreoElectronico($CorreoElectronico){
        $this->CorreoElectronico = $CorreoElectronico; 
    }

    public function getCorreoElectronico(){
        return $this->CorreoElectronico;
    }

    public function setNombres($Nombres){
        $this->Nombres = $Nombres; 
    }

    public function getNombres(){
        return $this->Nombres;
    }

    public function setApellidos($Apellidos){
        $this->Apellidos = $Apellidos; 
    }

    public function getApellidos(){
        return $this->Apellidos;
    }

    public function setContrasena($Contrasena){
        $this->Contrasena = $Contrasena; 
    }

    public function getContrasena(){
        return $this->Contrasena;
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

    public function setNombreEstado($NombreEstado){
        $this->NombreEstado = $NombreEstado; 
    }

    public function getNombreEstado(){
        return $this->NombreEstado;
    }

    public function setExiste($Existe){
        $this->Existe = $Existe; 
    }

    public function getExiste(){
        return $this->Existe;
    }
}
?>