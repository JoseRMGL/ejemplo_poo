<?php
    include_once('Persona.php');
    class Empleado extends Persona {
        public $codigo=0;
        public $nivelAcademico="";
        public $sueldoBase=0;
        private $bonificacion=350;
        private $igss=0;

        public function calcularSueldoLiquido(){
            $this->igss = $this->sueldoBase * 0.0483;
            $sueldoLiquido = $this->sueldoBase + $this->bonificacion - $this->igss;
            return $sueldoLiquido;
        }
        public function verDatos(){
            return "Codigo de empleados: " . $this->codigo . parent::verDatos() . "<br>Nivel: ". $this->nivelAcademico . "<br>Sueldo Base: " . $this->sueldoBase . "<br>Bonificacion: "  . $this->bonificacion . "<br>IGSS: " . $this->igss;
        }
    }
?>