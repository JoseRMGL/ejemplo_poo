<?php
    //incluir el archivo Cliente.php para poder utilizar el codigo que contiene
    include_once("../clases/Cliente.php");
    //crear un objeto de tipo Cliente = instanciar la clase
    $cliente = new Cliente();
    $cliente->nit=$_GET['txtNit'];
    $cliente->telefono=$_GET['txtTelefono'];
    $cliente->direccion=$_GET['txtDireccion'];
    $cliente->apellido=$_GET['txtApellido'];
    $cliente->asignarNombre($_GET['txtNombre']);
    echo $cliente->verDatos();
    // echo "<br>" . $cliente->nombreCompleto();
?>