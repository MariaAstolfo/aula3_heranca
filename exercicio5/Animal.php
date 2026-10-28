<?php

class Animal{
    protected string $nome;
    private int $idade;

    public function __construct($nome, $idade){
         $this->nome=$nome;
        $this->idade=$idade;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function mostrarNome(){
        echo "Nome: ".$this->nome." |";
        echo " Idade: ".$this->getIdade()." |";
    }
}