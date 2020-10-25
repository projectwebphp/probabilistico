<?php
class Contingenciasmilitaresactivosmdn{
    //Atributos de la clase(Parámetros de Entrada)
    
  private $idcontingencia;
  private $idgrupopersonalMDN;
  private $anio;
  private $totalpartidas;
  private $personasinvalidez;
  private $porcentajeinvalidez;
  private $valorinvalidez;
  private $reservainvalidez;
  private $personasfallecimiento;
  private $porcentajefallecimiento;
  private $valorfallecimiento;
  private $reservafallecimiento;
  private $cantidaddesvinculacion;
  private $porcentajedesvinculacion;
  private $valordesvinculacion;
  private $reservadesvinculacion;
  private $cantidadretiro;
  private $porcentajeretiro;
  private $valorretiro;
  private $reservaretiro;
  private $totalpersonas;

    /*private $IdRol;
    private $NombreRol;
    private $IdEstado;
    */
    public function __construct(){
    }

    public function setIdcontingencia($idcontingencia)
    {
        $this->Idcontingencia = $idcontingencia;
    }

    public function getIdcontingencia()
    {
        return $this->Idcontingencia;
    }
    
    public function setIdgrupopersonalMDN($idgrupopersonalMDN)
    {
        $this->IdgrupopersonalMDN = $idgrupopersonalMDN;
    }

    public function getIdgrupopersonalMDN()
    {
        return $this->IdgrupopersonalMDN;
    }

    public function setAnio($anio)
    {
        $this->Anio = $anio;
    }

    public function getAnio()
    {
        return $this->Anio;
    }

    public function setTotalpartidas($totalpartidas)
    {
        $this->Totalpartidas = $totalpartidas;
    }

    public function getTotalpartidas()
    {
        return $this->Totalpartidas;
    }

    public function setPersonasinvalidez($personasinvalidez)
    {
        $this->Personasinvalidez = $personasinvalidez;
    }

    public function getPersonasinvalidez()
    {
        return $this->Personasinvalidez;
    }

    public function setPorcentajeinvalidez($porcentajeinvalidez)
    {
        $this->Porcentajeinvalidez = $porcentajeinvalidez;
    }

    public function getPorcentajeinvalidez()
    {
        return $this->Porcentajeinvalidez;
    }

    public function setValorinvalidez($valorinvalidez)
    {
        $this->Valorinvalidez = $valorinvalidez;
    }

    public function getValorinvalidez()
    {
        return $this->Valorinvalidez;
    }

    public function setReservainvalidez($reservainvalidez)
    {
        $this->Reservainvalidez = $reservainvalidez;
    }

    public function getReservainvalidez()
    {
        return $this->Reservainvalidez;
    }

    public function setPersonasfallecimiento($personasfallecimiento)
    {
        $this->Personasfallecimiento = $personasfallecimiento;
    }

    public function getPersonasfallecimiento()
    {
        return $this->Personasfallecimiento;
    }

    public function setPorcentajefallecimiento($porcentajefallecimiento)
    {
        $this->Porcentajefallecimiento = $porcentajefallecimiento;
    }

    public function getPorcentajefallecimiento()
    {
        return $this->Porcentajefallecimiento;
    }

    public function setValorfallecimiento($valorfallecimiento)
    {
        $this->Valorfallecimiento = $valorfallecimiento;
    }

    public function getValorfallecimiento()
    {
        return $this->Valorfallecimiento;
    }

    public function setReservafallecimiento($reservafallecimiento)
    {
        $this->Reservafallecimiento = $reservafallecimiento;
    }

    public function getReservafallecimiento()
    {
        return $this->Reservafallecimiento;
    }

    public function setCantidaddesvinculacion($cantidaddesvinculacion)
    {
        $this->Cantidaddesvinculacion = $cantidaddesvinculacion;
    }

    public function getCantidaddesvinculacion()
    {
        return $this->Cantidaddesvinculacion;
    }

    public function setPorcentajedesvinculacion($porcentajedesvinculacion)
    {
        $this->Porcentajedesvinculacion = $porcentajedesvinculacion;
    }

    public function getPorcentajedesvinculacion()
    {
        return $this->Porcentajedesvinculacion;
    }

    public function setValordesvinculacion($valordesvinculacion)
    {
        $this->Valordesvinculacion = $valordesvinculacion;
    }

    public function getValordesvinculacion()
    {
        return $this->Valordesvinculacion;
    }

    public function setReservadesvinculacion($reservadesvinculacion)
    {
        $this->Reservadesvinculacion = $reservadesvinculacion;
    }

    public function getReservadesvinculacion()
    {
        return $this->Reservadesvinculacion;
    }

    public function setCantidadretiro($cantidadretiro)
    {
        $this->Cantidadretiro = $cantidadretiro;
    }

    public function getCantidadretiro()
    {
        return $this->Cantidadretiro;
    }

    public function setPorcentajeretiro($porcentajeretiro)
    {
        $this->Porcentajeretiro = $porcentajeretiro;
    }

    public function getPorcentajeretiro()
    {
        return $this->Porcentajeretiro;
    }

    public function setValorretiro($valorretiro)
    {
        $this->Valorretiro = $valorretiro;
    }

    public function getValorretiro()
    {
        return $this->Valorretiro;
    }

    public function setReservaretiro($reservaretiro)
    {
        $this->Reservaretiro = $reservaretiro;
    }

    public function getReservaretiro()
    {
        return $this->Reservaretiro;
    }

    public function setTotalpersonas($totalpersonas)
    {
        $this->Totalpersonas = $totalpersonas;
    }

    public function getTotalpersonas()
    {
        return $this->Totalpersonas;
    }
}
?>