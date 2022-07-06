<?php

    require_once "triangulo.php";

    $triangulo = new Triangulo();

    $triangulo->setBase(2);
    $triangulo->setAltura(3);
    $triangulo->setArea($triangulo->calculaArea($triangulo->getBase(), $triangulo->getAltura()));
    $triangulo->setComprimento($triangulo->calculaComprimento($triangulo->getBase(), $triangulo->getAltura()));
    $triangulo->setPerimetro($triangulo->calculaPerimetro($triangulo->getBase(), $triangulo->getAltura()));
    $triangulo->setTipo($triangulo->calculaTipo($triangulo->getBase(), $triangulo->getAltura()));
    $triangulo->setVolume($triangulo->calculaVolume($triangulo->getBase(), $triangulo->getAltura()));

    echo " <br> " .$triangulo->Triangulo();
    echo " <br> A base do triangulo eh: " .$triangulo->getBase();
    echo " <br> A altura do triangulo eh: " .$triangulo->getAltura();
    echo " <br> A area do triangulo eh: " .$triangulo->getArea();
    echo " <br> O comprimento do triangulo eh: " .$triangulo->getComprimento();
    echo " <br> O perimetro do triangulo eh: " .$triangulo->getPerimetro();
    echo " <br> O tipo do triangulo eh: " .$triangulo->getTipo();
    echo " <br> O volume do triangulo eh: " .$triangulo->getVolume();

?>