<?php

require_once 'ProdutoDigital.php';
require_once 'ProdutoFisico.php';


$produtoDigital= new  ProdutoDigital('notebook', 2000, 20);
$produtoDigital-> mostrarProduto();
$produtoDigital-> mostrarTamanho();
echo "<br>";

$produtoFisico= new  ProdutoFisico('software', 3000, 10);
$produtoFisico-> mostrarProduto();
$produtoFisico-> mostrarPeso();
