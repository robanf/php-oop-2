<?php
    require_once 'item.php';

    class Compratore{
        public $name;
        protected $portafoglio;

        function __construct($_name,$_portafoglio){
            $this->name=$_name;
            $this->portafoglio=$_portafoglio;
        }

        protected function setPortafoglio($soldi){
            $this->portafoglio=$soldi;
        }
        public function getPortafoglio(){
            return $this->portafoglio;
        }
        public function compra($dispo,$costo){
            if($dispo){
                $this->portafoglio=-$costo;
                return 'Comprato';
            }
            return 'Non siamo riusciti a portare a termine la transazione controllare disponibilità o saldo carta';
        }
    }