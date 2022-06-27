<?php

    require_once "mer.php";

    $aluno = new aluno();
    $aluno->setMatricula(123);
    $aluno->setNome("João");
    $aluno->setData_nascimento("01/01/2000");
    echo $aluno->getMatricula();
    echo $aluno->getNome();
    echo $aluno->getData_nascimento();

    $professor = new professor();
    $professor->setMatricula(456);
    $professor->setNome("Maria");
    $professor->setData_nascimento("01/01/2000");
    echo $professor->getMatricula();
    echo $professor->getNome();
    echo $professor->getData_nascimento();

    $curso = new Curso();
    $curso->setNome("Engenharia de Software");
    $curso->setCarga_horaria(120);
    $curso->setProfessor($professor);
    echo $curso->getNome();
    echo $curso->getCarga_horaria();
    echo $curso->getProfessor()->getNome();
    echo $curso->getProfessor()->getData_nascimento();

?>