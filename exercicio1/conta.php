<?php

class contaCorrente{
    private $titular;

    private $agencia;

    private $numero;

    private $saldo;

    private $cpf;

    private $telefone;

    private $lucro;

    public function __construct($titular, $agencia, $numero, $saldo, $cpf, $telefone, $lucro){
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo; 
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->lucro = $lucro;
    }

    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        return $this;
    }

    public function transferir($valor, contaCorrente $conta){

        if(!is_numeric($valor)){
            echo "O valor passado não é numero";
            exit;
        }
        $conta->depositar($valor);

        return $this;

    }
    
    public function verLucro($valor){
        $this->lucro = $this->$saldo - $valor;
        return $this;
    }
    
    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        if($atributo == "titular" || $atributo == "saldo"){
            return false;
        }
        $this->$atributo = $valor;
    }

    

}