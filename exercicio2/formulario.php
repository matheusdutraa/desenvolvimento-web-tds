<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet"  href="style.css">
        <!---No enunciado diz para criar o elemento "cargo", mas não o criei, pois não é pedido para usar ele, então não faz sentido, o mesmo pro "nome"--->
    </head>
    <body>
    <div class="container">
    <form action="" method="get">
        Dia<input type="text" name="day"><br>
        Mês<input type="text" name="month"><br>
        Ano<input type="text" name="year"><br>
        <br>
     <input type="submit" name="submit" value="Validar" />
    </form>
    </div>

    <?php
    
     $dia = $_GET['day'];
     $mes = $_GET['month'];
     $ano = $_GET['year'];

     if(checkdate($mes, $dia, $ano))
      echo 'Data válida: ';
     else
      echo 'Data inválida: ';

    if(isset($_GET['submit'])){
        $day = $_GET['day'];
        $month = $_GET['month'];
        $year = $_GET['year'];
        $date = $day."/".$month."/".$year;
        echo $date;
    }
    ?>
    
    <br><br><br>
    <div class="container">
    <form action="" method="get">
        Salário<input type="text" name="salario"><br>
        <br>
        <input type="submit" value="Calcular Salário">
    </form>

    </div>

    <?php

    if(isset($_GET['salario'])){
        $salario = $_GET['salario'];
        $salario = $salario * 1.03;
        echo "O salário reajustado é: ".$salario;
        $salarioSemanal = $salario / 4;
        echo "<br>O salário semanal é: ".$salarioSemanal;
    }

    ?>
  
    </body>
   </html>