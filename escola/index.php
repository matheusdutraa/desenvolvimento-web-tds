<?php
//Teste de conexão

include_once("utl/conexao.php");

$connection = conectar_db();
print_r($connection)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SCA</title>
</head>
<body>
    <center><h2>Alunos</h2></center>
    <br>
    <a href="alunos_inc.php">Incluir Alunos</a>
    <br><br><br>
    <p>Listagem de alunos</p>
</body>
</html>