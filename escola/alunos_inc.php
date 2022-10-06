<?php
# Página com o formulário para incluir alunos

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form name="formularioAlunos">
        <label for="txtNomeAluno">Nome do Aluno:</label>
        <input type="text" name="txtNomeAluno" maxlength="70">
        <br>

        <label for="txtIdadeAluno">Idade do Aluno:</label>
        <input type="number" name="txtIdadeAluno">
        <br>

        <label for="txtEstrangeiroAluno">Estrangeiro:</label>
        <select name="txtEstrangeiroAluno">
        <option value="S">Sim</option>
        <option value="N">Não</option>
        </select>
        <br>

        <label for="txtCursoAluno">Curso do Aluno:</label>
        <input type="text" name="txtCursoAluno">
        <br>

        print_r()
    </form>
</body>
</html>