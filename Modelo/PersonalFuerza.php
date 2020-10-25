<?php
class PersonalFuerza{
    private $IdPersonalFuerza;
    private $IdEntidad;
    private $Anio;
    private $Rango;
    private $Personal;
    
    /*private $GR;
    private $MG;
    private $BG;
    private $CR;
    private $TC;
    private $MY;
    private $CT;
    private $TE;
    private $ST;
    */

 
    public function __construct(){
    }

    public function setIdPersonalFuerza($IdPersonalFuerza){
        $this->IdPersonalFuerza = $IdPersonalFuerza; 
    }

    public function getIdPersonalFuerza(){
        return $this->IdPersonalFuerza;
    }


    public function setIdEntidad($IdEntidad){
        $this->IdEntidad = $IdEntidad; 
    }

    public function getIdEntidad(){
        return $this->IdEntidad;
    }

    public function setAnio($Anio){
        $this->IdAnio = $Anio; 
    }

    public function getAnio(){
        return $this->Anio;
    }

    public function setRango($Rango){
        $this->Rango = $Rango; 
    }

    public function getRango(){
        return $this->Rango;
    }

    public function setPersonal($Personal){
        $this->Personal = $Personal; 
    }

    public function getPersonal(){
        return $this->Personal;
    }



    /*
    public function getGR($GR){
        $this->GR = $GR;
    }

    public function setGR(){
        return $this->GR;
    }

    public function getMG($MG){
        $this->MG = $MG;
    }

    public function setMG(){
        return $this->MG;
    }

    public function getBG($BG){
        $this->BG = $BG;
    }

    public function setBG(){
        return $this->BG;
    }     

    public function getCR($CR){
        $this->CR = $CR;
    }

    public function setCR(){
        return $this->CR;
    }

    public function getTC($TC){
        $this->TC = $TC;
    }

    public function setTC(){
        return $this->TC;
    }

    public function getMY(){
        
    }
    public function getCT(){

    }
    public function getTE(){

    }
    public function getST(){

    }
*/
}
?>