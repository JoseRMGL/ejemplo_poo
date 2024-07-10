<?php
//referencia al archivo donde esta la clase
    include_once('../clases/persona.php');
    //instanciar la clase = crear un objeto
    $persona = new Persona();
    //asignar valor al atributo apellido el cual es publico
    $persona->apellido=$_GET['txtApellido'];
    //mostrar el contenido del atributo apellido el cual es public
    // echo "Apellido: ". $persona->apellido;
    $persona->telefono=$_GET['txtTelefono'];
    $persona->direccion=$_GET['txtDireccion'];

    //asignando nombre por medio de un metodo por que el atributo es privado
    $persona->asignarNombre($_GET['txtNombre']);
    //mostrar el contenido del atributo nombre (es publico)
    // echo "<br>Nombre: ". $persona->verNombre();
    // echo $persona->nombreCompleto();
    echo $persona->verDatos();
?>