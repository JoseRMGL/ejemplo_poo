<?php
    include_once('../clases/Ventas.php');
    $ventas = new Ventas();
    $ventas->tipoContratacion=$_GET['txtTipoContratacion'];
    $ventas->comisionVenta=$_GET['txtComisionVentas'];
    //atributos Heredados
    $empleado->codigo = $_GET['txtCodigo'];
    $empleado->nivelAcademico=$_GET['txtNivelAcademico'];
    $empleado->sueldoBase=$_GET['txtSueldoBase'];
    $empleado->asignarNombre($_GET['txtNombre']);
    $empleado->apellido=$_GET['txtApellido'];
    $empleado->telefono=$_GET['txtTelefono'];
    $empleado->direccion=$_GET['txtDireccion'];
    echo "Sueldo Liquido: " . $ventas->calcularSueldoLiquido();
    echo "<br>" . $ventas->verDatos();
?>