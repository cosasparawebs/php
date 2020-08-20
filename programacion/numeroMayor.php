<?php

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if($numero1==$numero2){
        echo $numero1.' y '.$numero2.' son iguales.';
    } else if($numero1>$numero2){
        echo $numero1.' es mayor que '.$numero2;
    } else{
        echo $numero1.' es menor que '.$numero2;
    }

?>