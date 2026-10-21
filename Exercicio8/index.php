<?php
require_once "SensorTemperatura.php";
require_once "SensorUmidade.php";
require_once "CameraSeguranca.php";

$temperatura = new SensorTemperatura("Sensor da Sala", "Intelbras", "ST001", 24.5);
$umidade = new SensorUmidade("Sensor do Quarto", "Xiaomi", "SU002", 65);
$camera = new CameraSeguranca("Câmera da Entrada", "TP-Link", "CS003", "1920x1080");

echo "<h2>Sensor de Temperatura</h2>";
$temperatura->apresentarDispositivo();
$temperatura->mostrarTemperatura();
echo "Número de série: " . $temperatura->getNumeroSerie() . "<br>";

echo "<h2>Sensor de Umidade</h2>";
$umidade->apresentarDispositivo();
$umidade->mostrarUmidade();
echo "Número de série: " . $umidade->getNumeroSerie() . "<br>";

echo "<h2>Câmera de Segurança</h2>";
$camera->apresentarDispositivo();
$camera->mostrarResolucao();
echo "Número de série: " . $camera->getNumeroSerie() . "<br>";
?>
