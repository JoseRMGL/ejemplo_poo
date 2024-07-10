<?php
    class Persona{
        //atributos
        private $nombre="";
        public $apellido="";
        public $telefono="";
        public $direccion="";
        //metodos
        //metodo para asignar = metodo set
        public function asignarNombre($valor){
            $this->nombre=$valor;
        }
        //Metodo para obtener = get
        public function verNombre(){
            return $this->nombre;
        }
        public function nombreCompleto() {
            return "<br>Nombre Compleo: ". $this->nombre . " ". $this ->apellido;
        }
        public function verDatos() {
            return "<br>Nombre Compleo: ". $this->nombre . " ". $this ->apellido . " " . "<br>Telefono: ". $this->telefono . "<br>Dirección: ". $this->direccion;
        }
    }
?>