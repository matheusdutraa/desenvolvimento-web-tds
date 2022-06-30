<?php

    class Caixa {
        private $altura;
        private $comprimento;
        private $largura;
        private $conteudo; 

        function Caixa(){
                print("/nCaixa 1");
                
        }

        public function __construct($altura, $comprimento, $largura, $conteudo, $cor){
                $this->altura = $altura;
                $this->comprimento = $comprimento;
                $this->largura = $largura;
                $this->conteudo = $conteudo;
                $this->cor = $cor;

        }

        public function __destruc(){
                print("Destruindo: " .$this->altura. " " .$this->comprimento. " " .$this->largura. " " .$this->conteudo. " " .$this->cor);
            
                echo " <br> Destruindo elementos " .$caixa->__destruc()
        }

        public function getAltura()
        {
                return $this->altura;
        }

        public function setAltura($altura)
        {
                $this->altura = $altura;

                return $this;
        }

        public function getcomprimento()
        {
                return $this->comprimento;
        }


        public function setcomprimento($comprimento)
        {
                $this->comprimento = $comprimento;

                return $this;
        }

        public function getLargura()
        {
                return $this->largura;
        }

        public function setLargura($largura)
        {
                $this->largura = $largura;

                return $this;
        }

        public function getConteudo()
        {
                return $this->conteudo;
        }


        public function setConteudo($conteudo)
        {
                $this->conteudo = $conteudo;

                return $this;
        }

        public function getCor()
        {
                return $this->cor;
        }

        public function setCor($cor)
        {
                $this->cor = $cor;

                return $this;
        }

        public function adicionarConteudo($coisa){
            $this->conteudo = $coisa;
        }

        public function mostraConteudo(){
            echo $this->conteudo;
        }

        public function calculaTamanhoCaixa(){
                $aux = $this->getAltura()*$this->getLargura()*$this->getComprimento();
                return $aux;
        }

        public function calculaVolumeCaixa(){

        }
        
    }

?>
