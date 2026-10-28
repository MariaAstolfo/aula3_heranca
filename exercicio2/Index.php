<?php

require_once "Carro.php";
require_once "Moto.php";

$carro1=new Carro('Civic', 2010, 4);
$carro1->apresentarVeiculo();
$carro1->mostarCarro();
echo "<br>";
$moto1= new Moto('Bis', 2005, 2);
$moto1-> apresentarVeiculo();
$moto1->mostarMoto();


