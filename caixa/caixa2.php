<?php

    require_once "caixa.php";

    $caixa = new Caixa(2, 4 , 10, "brindes", "red");

    echo $caixa->getConteudo();
    echo $caixa->adicionarConteudo("Item");
    echo "</br>";
    $caixa->mostraConteudo();

    echo "<br>" .$caixa->caixa();
    echo " <br> O tamanho da caixa eh: "
    .$caixa->calculaTamanhoCaixa($caixa->setAltura(2.33),
                                 $caixa->setLargura(3.33),
                                 $caixa->setComprimento(4.56));

   
?>