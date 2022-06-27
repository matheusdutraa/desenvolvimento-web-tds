<?php

class aluno{

    public $matricula;
    public $nome;
    public $data_nascimento;

    public function __construct($matricula, $nome, $data_nascimento){
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->data_nascimento = $data_nascimento;

    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getData_nascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @return  self
     */ 
    public function setData_nascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;

        return $this;
    }
}
    
}

class professor{

    public $cod_professor
    public $nome;

    public function __construct($cod_professor, $nome){
        $this->cod_professor = $cod_professor;
        $this->nome = $nome;
    }

    public function getCod_professor()
    {
        return $this->cod_professor;
    }

    /**
     * @return  self
     */ 
    public function setCod_professor($cod_professor)
    {
        $this->cod_professor = $cod_professor;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}

class curso{

    public $cod_curso;
    public $quantidade_alunos;
    public $carga_horarioa;

    public function __construct($cod_curso, $quantidade_alunos){
        $this->cod_curso = $cod_curso;
        $this->quantidade_alunos = $quantidade_alunos;
    }


    public function getCod_curso()
    {
        return $this->cod_curso;
    }

    /**
     * @return  self
     */ 
    public function setCod_curso($cod_curso)
    {
        $this->cod_curso = $cod_curso;

        return $this;
    }

    public function getQuantidade_alunos()
    {
        return $this->quantidade_alunos;
    }

    /**
     * @return  self
     */ 
    public function setQuantidade_alunos($quantidade_alunos)
    {
        $this->quantidade_alunos = $quantidade_alunos;

        return $this;
    }

    public function getCarga_horarioa()
    {
        return $this->carga_horarioa;
    }

    /**
     * @return  self
     */ 
    public function setCarga_horarioa($carga_horarioa)
    {
        $this->carga_horarioa = $carga_horarioa;

        return $this;
    }
}

?>