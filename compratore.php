<?php

    class Compratore{
        public $name;
        protected $portafoglio;

        function __construct($_name,$_portafoglio){
            $this->name=$_name;
            $this->portafoglio=$_portafoglio;
        }

        private function setPortafoglio($soldi){
            $this->portafoglio=$soldi;
        }
        public function getPortafoglio(){
            return $this->portafoglio;
        }
    }