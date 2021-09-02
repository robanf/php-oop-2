<?php

    class Item{
        public $name;
        protected $costo;
        private $disponibilità;


        function __construct($_name,$_costo,$_disponibilità){
            $this->name=$_name;
            $this->costo=$_costo;
            $this->disponibilità=$_disponibilità;
        }

       public possoComprarlo($soldi){
           if($soldi>=$this->costo){
               if($this->disponibilità){
                   return 'il prodotto è disponibile e hai abbastanza soldi per comprarlo';
               }else{
                   return 'Hai i soldi per comprarlo ma purtroppo il prodotto non è disponibile';
               }
           }
           else{
                if($this->disponibilità){
                    return 'il prodotto è disponibile ma non hai abbastanza soldi per comprarlo';
                }
                else{
                    return 'il prodotto non è disponibile e non hai abbastanza soldi per comprarlo';
                }
           }
       }
    }