<?php
require_once "Animal.php";

class Gato extends Animal {
    private $cor;

    public function __construct($nome, $idade, $cor) {
        parent::__construct($nome, $idade);
        $this->cor = $cor;
    }

    public function miar() {
        $this->mostrarNome();
        echo "Idade: " . $this->getIdade() . "<br>";
        echo "Cor: " . $this->cor . "<br>";
        echo "Miau!<br>";
    }
}
?>
