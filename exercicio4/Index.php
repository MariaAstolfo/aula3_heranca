<?php

require_once 'Livro.php';
require_once 'Revista.php';

$livro1=new Livro('Potter', 2010, 'Maria');
$livro1->mostrarTitulo();
$livro1->mostrarLivro();
echo "<br>";

$revista1=new Revista('Potter', 2010, 14);
$revista1->mostrarTitulo();
$revista1->mostrarRevista();