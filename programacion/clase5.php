<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Clase 5 - Matematica</title>
  </head>
  <body>

    <form action="clase5.php" method="POST" class="form-inline">

        <label for="numero1">Numero 1:
        <input type="text" name="numero1" class="form-control" id="numero1">

        <label for="numero2">Numero 2:
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

        if(isset($_POST['btn1'])){
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operador = $_POST['operador'];

            switch($operador){
                case 'Sumar': $total = $numero1 + $numero2;
                echo 'Resultado: '.$total;
                break;

                case 'Restar': $total = $numero1 - $numero2;
                echo 'Resultado: '.$total;
                break;

                case 'Multiplicar': $total = $numero1 * $numero2;
                echo 'Resultado: '.$total;
                break;

                case 'Dividir': $total = $numero1 / $numero2;
                echo 'Resultado: '.number_format($total, 2, ",", "."); //para que ponga 2 decimales
                break;

                case 'Potenciacion': $total = $numero1 ** $numero2;
                echo 'Resultado: '.$total;
                break;

                default: echo 'Eleji algun operador de la lista';
            }
        }

    ?>


  </body>
</html>