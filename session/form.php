<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Referente ao exemplo abordado sobre Session, Criar uma sessão para um 
    formulário de Pesquisa de opinião( tema a seu critério), em que o usuário informa os 
    dados e imprime na tela e finaliza fechando a session. -->
    <form action="session.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="opiniao">Opiniao:</label>
        <textarea name="opiniao" id="opiniao" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>