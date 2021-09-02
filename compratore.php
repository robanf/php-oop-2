<?php

    class Compratore{
        protected $name
        protected $cognome
        protected $portafoglio

        function __construct($_name,$_cognome){
            $this->name=$_name;
            $this->cognome=$_cognome;
        }

        private setPortafoglio($soldi){
            $this->portafoglio=$soldi;
        }
        protected getPortafoglio(){
            return $this->portafoglio;
        }
    }