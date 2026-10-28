<?php

require_once 'Gerente.php';
require_once 'Desenvolvedor.php';

$gerente= new Gerente('Maria', 2000, 'Projeto Social' );
$gerente->exibirInformacoes();
$gerente->gerenciarEquipe();
echo "<br>";

$desenvolvedor= new Desenvolvedor('Tobias', 3000, 'PHP');
$desenvolvedor->exibirInformacoes();
$desenvolvedor->programar();