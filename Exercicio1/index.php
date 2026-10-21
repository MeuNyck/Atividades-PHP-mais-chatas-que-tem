<?php
require_once "Pessoa.php";
require_once "Aluno.php";

$aluno1 = new Aluno("Carlos", 17, "Informática");
$aluno2 = new Aluno("Mariana", 18, "Administração");

echo "<h2>Aluno 1</h2>";
$aluno1->apresentar();
$aluno1->mostrarDados();

echo "<h2>Aluno 2</h2>";
$aluno2->mostrarDados();
?>
