<?php
require_once "ProdutoFisico.php";
require_once "ProdutoDigital.php";

$notebook = new ProdutoFisico("Notebook", 3500, 2.5);
$software = new ProdutoDigital("Software", 199.90, 500);

echo "<h2>Produto físico</h2>";
$notebook->mostrarPeso();

echo "<h2>Produto digital</h2>";
$software->mostrarTamanho();
?>
