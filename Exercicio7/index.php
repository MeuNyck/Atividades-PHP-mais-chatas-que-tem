<?php
require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

$corrente = new ContaCorrente("Carlos", 1000, "1234-5678");
$corrente->depositar(500);
$corrente->sacar(200);

echo "<h2>Conta corrente</h2>";
$corrente->mostrarCartao();
echo "Saldo final: R$ " . number_format($corrente->getSaldo(), 2, ',', '.') . "<br>";

$poupanca = new ContaPoupanca("Mariana", 2000, "Comprar uma casa");

echo "<h2>Conta poupança</h2>";
$poupanca->mostrarObjetivo();
?>
