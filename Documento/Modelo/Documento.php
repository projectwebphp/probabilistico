<?php
    class Documento{
        //Parámentros de entrada
        private $CodigoDocumento;
        private $NombreDocumento;
        private $RutaDocumento;
        private $PalabrasClave;

        //Definir el constructor
        public function __construct(){}

        //Definir los métodos set y get para cada atributo de la clase
        public function setCodigoDocumento($CodigoDocumento){
            $this->CodigoDocumento = $CodigoDocumento;
        }

        public function getCodigoDocumento(){
            return $this->CodigoDocumento;
        }

        public function setNombreDocumento($NombreDocumento){
            $this->NombreDocumento = $NombreDocumento;
        }

        public function getNombreDocumento(){
            return $this->NombreDocumento;
        }

        public function setRutaDocumento($RutaDocumento){
            $this->RutaDocumento = $RutaDocumento;
        }

        public function getRutaDocumento(){
            return $this->RutaDocumento;
        }

        public function setPalabrasClaveDocumento($PalabrasClaveDocumento){
            $this->PalabrasClaveDocumento = $PalabrasClaveDocumento;
        }

        public function getPalabrasClaveDocumento(){
            return $this->PalabrasClaveDocumento;
        }
    }
?>