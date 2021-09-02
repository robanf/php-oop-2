<?php

    class Item{
        public $name;
        protected $costo;


        function __construct($_name,$_costo){
            $this->name=$_name;
            $this->costo=$_costo;
        }

       
    }