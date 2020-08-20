<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Clase 5 - Matematica</title>
  </head>
  <body>

    <form action="clase6.php" method="POST" class="form-inline">

        <label for="numero1">Numero:
        <input type="text" name="numero1" class="form-control" id="numero1">

        <label for="numero2">Final:
        <input type="text" name="numero2" class="form-control" id="numero2">

        <label for="operador">Operador:
            <select class="form-control" name="operador" id="operador">
                <option>Sumar</option>
                <option>Restar</option>
                <option>Multiplicar</option>
                <option>Dividir</option>
                <option>Potenciacion</option>
            </select>

        <input type="submit" value="Enviar" class="btn btn-success" name="btn1">   
        

    </form> 


    <?php

        if(isset($_POST['btn1'])){ //para saber si se presiono el boton
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operador = $_POST['operador'];

            switch($operador){
                case 'Sumar': suma($numero1, $numero2);
                break;

                case 'Restar': restar($numero1, $numero2);
                break;

                case 'Multiplicar': multiplicar($numero1, $numero2);
                break;

                case 'Dividir': dividir($numero1, $numero2);

                case 'Potenciacion': potenciar($numero1, $numero2);
                break;

                default: echo 'Eleji algun operador de la lista';
            }
        }

        function suma($parametro1, $final){
            echo "<table class='table table-striped'>";
           for($i=0; $i<=$final; $i++){
            $total = $parametro1 + $i;
            echo "<tr><td>".$total."<td><tr>";
           }
           echo "</table>";
        }

        function restar($parametro1, $final){
            echo "<table class='table table-striped'>";
           for($i=0; $i<=$final; $i++){
            $total = $parametro1 -$i;
            echo "<tr><td>".$total."<td><tr>";
           }
           echo "</table>";
        }

        function multiplicar($parametro1, $final){
            echo "<table class='table table-striped'>";
           for($i=0; $i<=$final; $i++){
            $total = $parametro1 *$i;
            echo "<tr><td>".$total."<td><tr>";
           }
           echo "</table>";
        }

        function dividir($parametro1, $final){
            echo "<table class='table table-striped'>";
           for($i=0; $i<=$final; $i++){
            $total = $parametro1 /$i;
            echo "<tr><td>".$total."<td><tr>";
           }
           echo "</table>";
        }

        function potenciar($parametro1, $final){
            echo "<table class='table table-striped'>";
           for($i=0; $i<=$final; $i++){
            $total = $parametro1 **$i;
            echo "<tr><td>".$total."<td><tr>";
           }
           echo "</table>";
        }
    ?>


  </body>
</html>