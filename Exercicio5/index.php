<?php
require_once "Cachorro.php";
require_once "Gato.php";

$cachorro = new Cachorro("Rex", 3, "Pastor Alemão");
$gato = new Gato("Mimi", 2, "Branco");

echo "<h2>Cachorro</h2>";
$cachorro->latir();

echo "<h2>Gato</h2>";
$gato->miar();
?>
