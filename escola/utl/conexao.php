<?php
#Arquivo: conexao.php
#Finalidade: Criar uma conexão com a base de dados
$HOST = "localhost";
$NOME_BANCO = "db_aulaphp";
$USUARIO = "root";
$SENHA = "bancodedados";

function conectar_db() {
    global $HOST, $NOME_BANCO, $USUARIO, $SENHA;

    $options = array(
        //Define o charset da conexão
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        //Define o tipo do erro como exceção
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        //Define o tipo de retorno do array de resultas
        //(campo => valor)
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

    $options = array();

    $str_conn = "mysql:host=" .$HOST. ";dbname=" .$NOME_BANCO;
    
    try {
        $conn = new PDO($str_conn,$USUARIO,$SENHA,$options);
    } catch(PDOException $e) {
        echo "Falha ao conectar na base de dados: " .$e->getMessage();;
    }

        return $conn;

}

?>