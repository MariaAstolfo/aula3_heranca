<?php

require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

$ContaCorrente1= new ContaCorrente ('Maria', 1000, 2010);
$ContaCorrente1->mostrarInformacoes();
$ContaCorrente1->depositar(500);
$ContaCorrente1->mostrarInformacoes();
$ContaCorrente1->sacar(200);
$ContaCorrente1->mostrarInformacoes();
$ContaCorrente1-> mostrarCartao();
echo "<br>";

$ContaPoupanca1= new ContaPoupanca ('Maria', 1000, 'dsodsdd');
$ContaPoupanca1->mostrarInformacoes();
$ContaPoupanca1-> mostarObjetivo();