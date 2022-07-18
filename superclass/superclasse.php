<?php
/*
Criar a SuperClasse - Pessoa (nome, endereço, descricao, RG, Telefone)

SubClasses (- PessoaFisica( CPF), - PessoaJuridica (CNPJ, racaoSocial, Sigla, nomeFantasia)).

Criar atributos, métodos Get/Set, construtores.

Criar as funções em que mostra os dados das SubClasses.

Criar uma classe de teste.
*/

    class Person{
        private $nome;
        private $endereco;
        private $descricao;
        private $rg;
        private $telefone;

        public function __construct($nome, $endereco, $descricao, $rg, $telefone){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->descricao = $descricao;
            $this->rg = $rg;
            $this->telefone = $telefone;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function getRg(){
            return $this->rg;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function setRg($rg){
            $this->rg = $rg;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

    }

    class PhysicalPerson extends Person{
        private $cpf;

        public function __construct($nome, $endereco, $descricao, $rg, $telefone, $cpf){
            parent::__construct($nome, $endereco, $descricao, $rg, $telefone);
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        function ShowDataPhysical(){
            return "Nome: ".$this->getNome()."<br>Endereço: ".$this->getEndereco()."<br>Descrição: ".$this->getDescricao()."<br>RG: ".$this->getRg()."<br>Telefone: ".$this->getTelefone()."<br>CPF: ".$this->getCpf()."<br>";
        }

    }

    class LegalPerson extends Person{
        private $cnpj;
        private $razaoSocial;
        private $sigla;
        private $nomeFantasia;

        public function __construct($nome, $endereco, $descricao, $rg, $telefone, $cnpj, $razaoSocial, $sigla, $nomeFantasia){
            parent::__construct($nome, $endereco, $descricao, $rg, $telefone);
            $this->cnpj = $cnpj;
            $this->razaoSocial = $razaoSocial;
            $this->sigla = $sigla;
            $this->nomeFantasia = $nomeFantasia;
        }

        public function getCnpj(){
            return $this->cnpj;
        }

        public function getRazaoSocial(){
            return $this->razaoSocial;
        }

        public function getSigla(){
            return $this->sigla;
        }

        public function getNomeFantasia(){
            return $this->nomeFantasia;
        }

        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }

        public function setRazaoSocial($razaoSocial){
            $this->razaoSocial = $razaoSocial;
        }

        public function setSigla($sigla){
            $this->sigla = $sigla;
        }

        public function setNomeFantasia($nomeFantasia){
            $this->nomeFantasia = $nomeFantasia;
        }

        function ShowDataLegal(){
            return "Nome: ".$this->getNome()."<br>Endereço: ".$this->getEndereco()."<br>Descrição: ".$this->getDescricao()."<br>RG: ".$this->getRg()."<br>Telefone: ".$this->getTelefone()."<br>CNPJ: ".$this->getCnpj()."<br>Razão Social: ".$this->getRazaoSocial()."<br>Sigla: ".$this->getSigla()."<br>Nome Fantasia: ".$this->getNomeFantasia()."<br>";
        }

    }

?>
