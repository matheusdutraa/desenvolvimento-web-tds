<?php
//Obtendo os valores do form
$texto = $_POST["text"];
$radio = $_POST["r1"];
$check = $_POST["cb"];
$opcoes = $_POST["select"];
$observacoes = $_POST["observacoes"];
$arquivo = $_POST["arquivo"];
$qtCb = count($check);
echo "o formulário possui ".$qtCb." checkBox<br>";

//Apresentar valores das variáveis POST
echo "Texto :".$texto;
echo "<br>Radio :".$radio;
$txt="";
for($i=0;$i<$qtCb;$i++){
    $txt.=$check[$i].",";

}
echo "<br>CheckBox :".$txt;
echo "<br>Opção :".$opcoes;
echo "<br>Obs :".$observacoes;
echo "<br>Nome do arquivo :".$_FILES["arquivo"]["name"];

header("Location:index.php?resposta=true");

?>