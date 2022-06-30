<?php

    class Aeronave {
        private $codAeronave;
        private $nomeModelo;
        private $numeroDeAssentos;

        public function getCodAeronave()
        {
                return $this->codAeronave;
        }

        public function setCodAeronave($codAeronave)
        {
                $this->codAeronave = $codAeronave;

                return $this;
        }

        public function getNomeModelo()
        {
                return $this->nomeModelo;
        }
 
        public function setNomeModelo($nomeModelo)
        {
                $this->nomeModelo = $nomeModelo;

                return $this;
        }

        public function getNumeroDeAssentos()
        {
                return $this->numeroDeAssentos;
        }

        public function setNumeroDeAssentos($numeroDeAssentos)
        {
                $this->numeroDeAssentos = $numeroDeAssentos;

                return $this;
        }
    }

    class TrechoAeronave {
        private $numeroTrecho;
        private $codigoAeroporto;
        private $dataPartida;
        private $horaPartida;
        private $horaChegada;


        public function getNumeroTrecho()
        {
                return $this->numeroTrecho;
        }
 
        public function setNumeroTrecho($numeroTrecho)
        {
                $this->numeroTrecho = $numeroTrecho;

                return $this;
        }

        public function getCodigoAeroporto()
        {
                return $this->codigoAeroporto;
        }

        public function setCodigoAeroporto($codigoAeroporto)
        {
                $this->codigoAeroporto = $codigoAeroporto;

                return $this;
        }

        public function getDataPartida()
        {
                return $this->dataPartida;
        }

        public function setDataPartida($dataPartida)
        {
                $this->dataPartida = $dataPartida;

                return $this;
        }

        public function getHoraPartida()
        {
                return $this->horaPartida;
        }

        public function setHoraPartida($horaPartida)
        {
                $this->horaPartida = $horaPartida;

                return $this;
        }

        public function getHoraChegada()
        {
                return $this->horaChegada;
        }

        public function setHoraChegada($horaChegada)
        {
                $this->horaChegada = $horaChegada;

                return $this;
        }
    }

?>