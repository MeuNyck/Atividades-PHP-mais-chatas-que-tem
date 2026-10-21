<?php
require_once "Carro.php";
require_once "Moto.php";

$carro = new Carro("Toyota", 2024, 4);
$moto = new Moto("Honda", 2023, 160);

echo "<h2>Carro</h2>";
$carro->mostrarCarro();

echo "<h2>Moto</h2>";
$moto->mostrarMoto();
?>
