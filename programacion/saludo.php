<!-- // CAPITULO 4 - POST Y GET -->

<?php

// POST: es privado 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    echo 'Hola '.$nombre.' '.$apellido;

// GET: es publico
    // $variable = $_GET['nombre'];
    // echo 'Hola '.$variable;

?>