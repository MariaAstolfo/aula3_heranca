<?php

require_once 'Publicacao.php';

class Revista extends Publicacao{
    private int $edicao;

    public function __construct($titulo,$anoPublicao,$edicao){
        parent::__construct($titulo,$anoPublicao);
        $this->edicao=$edicao;
    }
    public function mostrarRevista(){
        echo " Edição: ". $this->edicao;
    }
}