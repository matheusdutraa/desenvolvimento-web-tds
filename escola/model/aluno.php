<?php
# Arquivo com a declaração da classe Aluno

class Aluno{

    private $idAluno;
    private $nomeAluno;
    private $idade;
    private $estrangeiro;
    private $curso;

    public function __construct($idAluno,$nomeAluno,$idade,$estrangeiro,$curso){
        $this -> idAluno = $idAluno;
        $this -> nomeAluno = $nomeAluno;
        $this -> idade = $idade;
        $this -> estrangeiro = $estrangeiro;
        $this -> curso = $curso;
    }

    public function getNomeAluno()
    {
        return $this->nomeAluno;
    }

    public function setNomeAluno($nomeAluno)
    {
        $this->nomeAluno = $nomeAluno;

        return $this;
    }

    public function getIdAluno()
    {
        return $this->idAluno;
    }

    public function setIdAluno($idAluno)
    {
        $this->idAluno = $idAluno;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getEstrangeiro()
    {
        return $this->estrangeiro;
    }

    public function setEstrangeiro($estrangeiro)
    {
        $this->estrangeiro = $estrangeiro;

        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}


?>