<?php
    $numero = $_POST['numero'];

    for($i=0; $i<=10; $i++){
        $total = $numero*$i;
        echo $numero.' x '.$i.' = '.$total.'<br>';
    }
?>