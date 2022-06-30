<?php

    require_once "test-air.php";

    $Aeronave = new Aeronave();
    $Aeronave->setcodAeronave(12345);
    $Aeronave->setNomeModelo("Air-Fry 12");
    $Aeronave->setNumeroDeAssentos(87);
    echo $Aeronave->getCodAeronave();
    echo $Aeronave->getNomeModelo();
    echo $Aeronave->getNumeroDeAssentos();

    $TrechoAeronave = new TrechoAeronave();
    $TrechoAeronave->setNumeroTrecho(4);
    $TrechoAeronave->setCodigoAeroporto(2);
    $TrechoAeronave->dataPartida("12/06");
    $TrechoAeronave->horaPartida("14:00");
    $TrechoAeronave->horaChegada("17:00");
    echo $TrechoAeronave->getCodigoAeroporto();
    echo $TrechoAeronave->getCodigoAeroporto();
    echo $TrechoAeronave->getDataPartida();
    echo $TrechoAeronave->getHoraPartida();
    echo $TrechoAeronave->horaChegada();

?>