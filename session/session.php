<?php
    /* Referente ao exemplo abordado sobre Session, Criar uma sessão para um 
    formulário de Pesquisa de opinião( tema a seu critério), em que o usuário informa os 
    dados e imprime na tela e finaliza fechando a session. */

    session_start();
    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['opiniao'])){
        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['opiniao'] = $_POST['opiniao'];
        echo "Nome: ".$_SESSION['nome']."<br>";
        echo "Email: ".$_SESSION['email']."<br>";
        echo "Opiniao: ".$_SESSION['opiniao']."<br>";
        session_destroy();
    }

?>