<?php

require_once "conta.php";


$contaMatheus = new contaCorrente("Matheus", "1212", "12251-3", 500.00);
$contaMatheus->depositar(100.00);
$contaMatheus->transferir(50.00, $contaJoice);
$contaMatheus->verLucro();

$contaJoice = new contaCorrente("Joice", "1512", "12256-3", 500.00);
$contaJoice->depositar(100.00);
$contaJoice->transferir(70.00, $contaMatheus);
$contaJoice->verLucro();


var_dump($contaMatheus);
var_dump($contaJoice);

?> 