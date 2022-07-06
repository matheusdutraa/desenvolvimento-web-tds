<?php
/*Criar uma classe para Triângulo e outro para Cilindro.
Adicionar os atributos respectivos de cada com seus métodos Getters/Setters, construtor e classe para realizar os devidos testes.
Criar as funções para calcular as medidas totais de cada uma das formas.
*/
    class Triangulo {
        private $altura;
        private $base;
        private $area;
        private $comprimento;
        private $perimetro;
        private $tipo;
        private $volume;
      
        function Triangulo(){
            print("<br> Triangulo 1 ");
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

        public function getBase()
        {
                return $this->base;
        }

        public function setBase($base)
        {
                $this->base = $base;

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

        public function getPerimetro()
        {
                return $this->perimetro;
        }

        public function setPerimetro($perimetro)
        {
                $this->perimetro = $perimetro;

                return $this;
        }

        public function getTipo()
        {
                return $this->tipo;
        }

        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }

        public function setVolume($volume)
        {
                $this->volume = $volume;

                return $this;
        }

        public function getVolume()
        {
                return $this->volume;
        }


        public function calculaArea($base, $altura){
            $this->area = ($base * $altura) / 2;
            return $this->area;
        }

        public function calculaComprimento($base, $altura){
            $this->comprimento = sqrt(pow($base, 2) + pow($altura, 2));
            return $this->comprimento;
        }

        public function calculaPerimetro($base, $altura){
            $this->perimetro = $base + $altura + sqrt(pow($base, 2) + pow($altura, 2));
            return $this->perimetro;
        }

        public function calculaTipo($base, $altura){
            if($base == $altura){
                $this->tipo = "Equilatero";
            }elseif($base != $altura){
                $this->tipo = "Isosceles";
            }
            else{
                $this->tipo = "Escaleno";
            }

            return $this->tipo;
        }

        public function calculaVolume($base, $altura){
            $this->volume = ($base * $altura) / 3;
            return $this->volume;
        }
    }
?>