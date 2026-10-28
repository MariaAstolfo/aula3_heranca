<?php

require_once "Veiculo.php";

class Moto extends Veiculo{
    private float $cilindradas;

public function __construct($nome, $ano, $cilindradas){
    parent::__construct($nome, $ano);
    $this->cilindradas=$cilindradas;
}
public function mostarMoto(){
    echo " | Cilindradas: ". $this->cilindradas;
}
}