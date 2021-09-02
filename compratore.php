<?php

    class Compratore{
        protected $name;
        protected $portafoglio;

        function __construct($_name,$_portafoglio){
            $this->name=$_name;
            $this->portafoglio=$_portafoglio;
        }

        private setPortafoglio($soldi){
            $this->portafoglio=$soldi;
        }
        protected getPortafoglio(){
            return $this->portafoglio;
        }
    }