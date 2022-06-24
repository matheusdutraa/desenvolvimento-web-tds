<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP com Forms</title>
</head>
<body>
    <form action="lerForm.php" method="POST" enctype="multipart/form-data">
        <label for="text">Texto</label>
        <input type="text" name="text">

        <label for="radio">Radio</label>
        <input type="radio" name="r1" value="1">
        <input type="radio" name="r1" value="2">

        <label for="checkbox">Checkbox</label>
        <input type="checkbox" name="cb[]" value="check 1">
        <input type="checkbox" name="cb[]" value="check 2">

        <label for="select">Select</label>
        <select name="select">
            <option value="opcao1">Opção 1</option>
            <option value="opcao2">Opção 2</option>
        </select>  
        
        <label for="observacoes">Text Area</label>
        <textarea name="observacoes" cols="30" rows="10"></textarea>

        <label for="arquivo">Arquivo</label>
        <input type="file" name="arquivo">

        <input type="submit" value="Enviar"
    </form>   
    
    <?php
     if(isset($_GET["resposta"])){
     if($_GET["resposta"]==true)
        echo "Dados inseridos com sucesso";
     }
     
    ?>

</body>
</html>