<?php

    require_once "cilindro.php";

    $cilindro = new Cilindro();    
    
    $cilindro->setAltura(14); 
    $cilindro->setRaio(5);
    $cilindro->setVolume($cilindro->calculaVolume($cilindro->getAltura(), $cilindro->getRaio()));
    $cilindro->setArea($cilindro->calculaArea($cilindro->getRaio()));
    $cilindro->setComprimento($cilindro->calculaComprimento($cilindro->getAltura(), $cilindro->getRaio()));

    echo " <br> " .$cilindro->Cilindro();
    echo " <br> A altura do cilindro eh: " .$cilindro->getAltura();
    echo " <br> O raio do cilindro eh: " .$cilindro->getRaio();
    echo " <br> O volume do cilindro eh: " .$cilindro->getVolume();
    echo " <br> A area do cilindro eh: " .$cilindro->getArea();
    echo " <br> O comprimento do cilindro eh: " .$cilindro->getComprimento();


?>