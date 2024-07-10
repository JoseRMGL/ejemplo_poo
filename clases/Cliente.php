<?php
    include_once('Persona.php');
    class Cliente extends Persona{
        public $nit="";
        public function verDatos(){
            return parent::verDatos() .
             "<br>Nit: ". $this->nit;
        }
    }
?>