<?php
require_once "Gerente.php";
require_once "Desenvolvedor.php";

$gerente = new Gerente("Roberto", 6000, "TI");
$desenvolvedor = new Desenvolvedor("Ana", 4000, "PHP");

echo "<h2>Gerente</h2>";
$gerente->gerenciarEquipe();

echo "<h2>Desenvolvedor</h2>";
$desenvolvedor->programar();
?>
