<?php
    include_once('../clases/Empleado.php');
    $empleado = new Empleado();
    $empleado->codigo = $_GET['txtCodigo'];
    $empleado->nivelAcademico=$_GET['txtNivelAcademico'];
    $empleado->sueldoBase=$_GET['txtSueldoBase'];
    //atributos Heredados
    $empleado->asignarNombre($_GET['txtNombre']);
    $empleado->apellido=$_GET['txtApellido'];
    $empleado->telefono=$_GET['txtTelefono'];
    $empleado->direccion=$_GET['txtDireccion'];
    echo "Sueldo Liquido: " . $empleado->calcularSueldoLiquido();
    echo "<br>" . $empleado->verDatos();
?>