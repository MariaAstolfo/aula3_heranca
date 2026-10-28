<?php

require_once 'Cachorro.php';
require_once 'Gato.php';

$cachorro=new Cachorro('Julie', 5, 'Shitzu');
$cachorro->mostrarNome();
$cachorro->latir();
echo "<br>";
$gato=new Gato('Dom', 5, 'Amarelo');
$gato->mostrarNome();
$gato->miar();
