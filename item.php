<?php

    class Item{
        public $name;
        protected $costo;
        protected $disponibilità;


        function __construct($_name,$_costo,$_disponibilità){
            $this->name=$_name;
            $this->costo=$_costo;
            $this->disponibilità=$_disponibilità;
        }

        public function getCosto(){
            return $this->costo;
        }

        public function getDispo(){
            if($this->disponibilità){
                return 'si';
            }
            return 'no';
        }

       public function possoComprarlo($soldi){
           if($soldi>=$this->costo){
               if($this->disponibilità){
                   return 'il prodotto è disponibile e ha abbastanza soldi per comprarlo';
               }else{
                   return 'Ha i soldi per comprarlo ma purtroppo il prodotto non è disponibile';
               }
           }
           else{
                if($this->disponibilità){
                    return 'il prodotto è disponibile ma non ha abbastanza soldi per comprarlo';
                }
                else{
                    return 'il prodotto non è disponibile e non ha abbastanza soldi per comprarlo';
                }
           }
       }
    }