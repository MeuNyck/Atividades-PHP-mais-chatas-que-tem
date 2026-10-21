<?php
require_once "Livro.php";
require_once "Revista.php";

$livro1 = new Livro("Dom Casmurro", 1899, "Machado de Assis");
$livro2 = new Livro("O Pequeno Príncipe", 1943, "Antoine de Saint-Exupéry");
$revista = new Revista("Mundo da Tecnologia", 2025, 15);

echo "<h2>Livro 1</h2>";
$livro1->mostrarLivro();

echo "<h2>Livro 2</h2>";
$livro2->mostrarLivro();

echo "<h2>Revista</h2>";
$revista->mostrarRevista();
?>
