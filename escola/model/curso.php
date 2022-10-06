<?php
# Arquivo com a declaração da classe Curso

class Curso {
    private $idCurso;
    private $nome;

    public function __construc($idCurso, $nome){
        $this -> idCurso = $idCurso;
        $this -> nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdCurso()
    {
        return $this->idCurso;
    }

    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;

        return $this;
    }
}

?>