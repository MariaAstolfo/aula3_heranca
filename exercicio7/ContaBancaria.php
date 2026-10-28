<?php

class ContaBancaria{
    protected string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular=$titular;
        $this->saldo=$saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function depositar($valor){
        if ($valor>0){
            $this->saldo+=$valor;
        }
        else{
            echo "Não é possível depositar uma valor negativo";
        }
    }

    public function sacar($valor){
        if ($this->saldo>$valor){
            $this->saldo-=$valor;
        }
        else{
            echo "Não é possível realizar o saque";
        }
    }
    public function mostrarInformacoes(){
        echo "Titular: ". $this->titular. " | ";
        echo "Saldo atual: R$ ". number_format($this->saldo, 2, ',', '.'). " <br>"; 
    }
}