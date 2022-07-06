<?php
/*Criar uma classe para Triângulo e outro para Cilindro.
Adicionar os atributos respectivos de cada com seus métodos Getters/Setters, construtor e classe para realizar os devidos testes.
Criar as funções para calcular as medidas totais de cada uma das formas.
*/ 
    class Cilindro {
        private $altura;
        private $raio;
        private $volume;
        private $area;
        private $comprimento;

         function Cilindro(){
            print("<br> Cilindro 1 ");
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

        public function getRaio()
        {
                return $this->raio;
        }

        public function setRaio($raio)
        {
                $this->raio = $raio;

                return $this;
        }

        public function getVolume()
        {
                return $this->volume;
        }

        public function setVolume($volume)
        {
                $this->volume = $volume;

                return $this;
        }

        public function getArea()
        {
                return $this->area;
        }

        public function setArea($area)
        {
                $this->area = $area;

                return $this;
        }

        public function getComprimento()
        {
                return $this->comprimento;
        }

        public function setComprimento($comprimento)
        {
                $this->comprimento = $comprimento;

                return $this;
        }

        public function calculaVolume(){
            $this->volume = (pi()*pow($this->raio,2)*$this->altura);
            return $this->volume;
        }

        public function calculaArea(){
            $this->area = (2*pi()*$this->raio*$this->altura);
            return $this->area;
        }

        public function calculaComprimento(){
            $this->comprimento = (2*pi()*$this->raio*$this->altura);
            return $this->comprimento;
        }

        public function mostraVolume(){
            echo "Volume: " . $this->volume;
        }

        public function mostraArea(){
            echo "Área: " . $this->area;
        }

        public function mostraComprimento(){
            echo "Comprimento: " . $this->comprimento;
        }
    }
?>