<?php

    require('superclasse.php');

    PhysicalPerson = new Person('nome', 'endereco', 'descricao', 'rg', 'telefone');
    PhysicalPerson = new PyshicalPerson();
    PhysicalPerson->setCpf('cpf');
    PhysicalPerson->setNome('nome');
    PhysicalPerson->setEndereco('endereco');
    PhysicalPerson->setDescricao('descricao');
    PhysicalPerson->setRg('rg');
    PhysicalPerson->setTelefone('telefone');

    echo PhysicalPerson->ShowDataPhysical();

    //echo " <br> " .$triangulo->Triangulo();
    /*echo PhysicalPerson->getCpf();
    echo PhysicalPerson->getNome();
    echo PhysicalPerson->getEndereco();
    echo PhysicalPerson->getDescricao();
    echo PhysicalPerson->getRg();
    echo PhysicalPerson->getTelefone();
    */
    echo '<br>';

    LegalPerson = new Person('nome', 'endereco', 'descricao', 'rg', 'telefone');
    LegalPerson = new LegalPerson();
    LegalPerson->setCnpj('cnpj');
    LegalPerson->setRazaoSocial('razaoSocial');
    LegalPerson->setSigla('sigla');
    LegalPerson->setNomeFantasia('nomeFantasia');
    LegalPerson->setNome('nome');
    LegalPerson->setEndereco('endereco');
    LegalPerson->setDescricao('descricao');
    LegalPerson->setRg('rg');
    LegalPerson->setTelefone('telefone');

    echo LegalPerson->ShowDataLegal();

?>